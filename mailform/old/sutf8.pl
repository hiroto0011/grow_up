#!/xampp/perl/bin/perl
#
# sutf8.pl Shift JIS と UTF-8の相互変換 for Perl Version 0.03
#             (this file encode: "EUC-JP")
#
#    Copyright (C) 2006 Sato-Si（さとーし）
#     http://www2s.biglobe.ne.jp/~satosi/gmap/suft8.pl
#     sato-si@mth.biglobe.ne.jp
#
#   完全に利用フリーですが，プログラムの保障（バグ，パフォーマンスの問題対処）はいたしません・・・。
#
#  ※実行には以下のファイル（Unicode Consortiumで公開されているMicrosoft CP932の変換表）が必要です。
#   ftp://ftp.unicode.org/Public/MAPPINGS/VENDORS/MICSFT/WINDOWS/CP932.TXT
$sjis2unicode_table_filename = 'CP932.TXT';
#
#  備考：このファイルは幾つかの文字が重複して定義された状態になっています。厳密にはこれも調整すべき。
#

# 利用可能な関数一覧
#  &sjis2utf8(*str);		# $strを Shift-JIS から UTF-8へ変換
#  		&sjis2utf8(*str,1);		# $strを Shift-JIS から UTF-8へ変換（BOM付き）
#  &utf82sjis(*str);	# $strを  UTF-8から Shift-JISに変換する
#  &unicode_esc2sjis(*str);	# UNICODEで escapeされたものを シフトJISに変換（例：%u3042なら あ(Shift-JIS) に変換する）
#  &unicode_esc2utf8(*str);	# UNICODEで escapeされたものを UTF-8に変換（例：%u3042なら あ(UTF-8) に変換する）
#  		&unicode_esc2utf8(*str,1);	# UNICODEで escapeされたものを UTF-8に変換（BOM付き）

# ※BOM とは "\xEF\xBB\xBF" を頭につけることで，UTF-8で，バイトオーダーの指定をしている。


# 具体的な例：

#  require "sutf8.pl";
#  $a = "漢字など";  # Shift-JISな文字列。jcode.pl等で，Shift-JISに変換しておく。
#  &sjis2utf8(*a);   # ここで，$a は UTF-8になる
#  open FILE, "> a.txt"; # a.txtに書き出し
#  print FILE $a;
#  close FILE;

#
#  更新履歴：
#   2006/3/14  Version 0.01 オリジナル作成（デバッグ不十分です・・・） Sato-Si
#   2006/3/20  Version 0.02 %u3042のデコーダ２つを追加 Sato-Si
#   2006/12/25  Version 0.03 sjis2utf8のShift-JIS半角カナ系の文字をちゃんと対応させる Sato-Si
#



	# 技術メモ
	#  引用： http://www.asahi-net.or.jp/~DP8T-ASM/java/tips/UTF8.html
	#UTF-8のエンコーディング フォーマット Unicode Unicodeビット列 UTFビット列 備考 
	#1バイトコード \u0～\u7F 		0000 0000 0aaa bbbb 			0aaa bbbb  
	#2バイトコード \u80～\u7FF		 0000 0aaa bbbb cccc 			110a aabb 10bb cccc  
	#3バイトコード \u800～\uFFFF		 aaaa bbbb cccc dddd 		1110 aaaa 10bb bbcc 10cc dddd  




#
#  sjis2utf8 の使い方
#
#  &sjis2utf8(*str);

# BOMをつけたい場合，&sjis2utf8(*str, 1);
#  BOMっていうのは，バイトオーダーマークらしい。　
#  仕組みは，ファイルの先頭に　"\xEF\xBB\xBF" の３バイトをつけるだけです。 例： print FILE "\xEF\xBB\xBF";

sub sjis2utf8
{
	local(*str, $need_bom) = @_;	# パラメータは入力データとBOMをつけるかどうか
	my($i, @strArray, $index);

	if($sjs2utf8_x_x_init == 0)	# 変換テーブル初期化がまだ？
	{
		my($s2u_line);
		my($comment);
		my($sjiscode);
		my($unicode);
		my($zero);

		open(CP932, $sjis2unicode_table_filename) || die "cannot open $sjis2unicode_table_filename";
		while(<CP932>) {
			chop;
			($s2u_line,$comment) = split('#');			# コメントを切り取る	0x01	0x0001	#START OF HEADING
			($sjiscode,$unicode) = split('\t',$s2u_line);	# ２つの数字を分ける  0x01	0x0001	
			($zero,$sjiscode) = split('x',$sjiscode);	# Shift-JISの方の 0x01 の xで分けることで，0と01に分ける

			if($zero eq '0')	# 文字列が 0x で始まるときのみ，数値があると認識
			{
				($zero,$unicode) = split('x',$unicode);
				if($zero eq '0') {		# UNICODEの数値が 0xで始まらない場合（対応するものがない場合）変換表に登録しない
					my($work) = hex($unicode);
					my($sjiscodenum) = hex($sjiscode);

					# コードの衝突を検出（CP932.TXTには，Shift-JISコードの重複はありません）
				#	if($_sjis2utf8_table[$sjiscodenum] ne '') {
				#		print "conflict Shift-JIS CODE! : $s2u_line#$comment\n";
				#	}

					if($work <= 0x7F) {
						$_sjis2utf8_table[$sjiscodenum] = pack("C1", $work);
					} elsif($work <= 0x7FF) {
						$_sjis2utf8_table[$sjiscodenum] = pack("C2", 0xc0|($work >> 6), 0x80|($work & 0x3f ) );
					} else {
						$_sjis2utf8_table[$sjiscodenum] = pack("C3", 0xe0|($work  >> 12), 0x80|(($work >> 6) & 0x3f), 0x80|($work & 0x3f ) );
					}
				}
			}
		}
		close(CP932);

		$sjs2utf8_x_x_init = 1;	# 変換テーブル初期化済み
	}

	@strArray = unpack("C*",$str);	# 文字コード化

	$str = '';
	if($need_bom != 0) {
		# BOMコードを追加
		$str = "\xEF\xBB\xBF";
	}

	for($i = 0; $i < @strArray; $i++) {
		if(($strArray[$i] >= 0x80 && $strArray[$i] < 0xA0) || $strArray[$i] > 0xDF) {	# 2バイト文字 2006/12/25  Version 0.03 sjis2utf8のShift-JIS半角カナ系の文字をちゃんと対応させる
			$index = $strArray[$i] * 0x100 + $strArray[$i+1];
			$i++;
		} else {
			$index = $strArray[$i];
		}
		$str .= $_sjis2utf8_table[$index];
	}
	
	$str;
}


sub loadutf82sjistable
{
		my($s2u_line);
		my($comment);
		my($sjiscode);
		my($unicode);
		my($zero);

		open(CP932, $sjis2unicode_table_filename) || die "cannot open $sjis2unicode_table_filename";
		while(<CP932>) {
			chop;
			($s2u_line,$comment) = split('#');
			($sjiscode,$unicode) = split('\t',$s2u_line);
			($zero,$sjiscode) = split('x',$sjiscode);

			if($zero eq '0')	#文字列が 0x で始まるときのみ，有効
			{
				($zero,$unicode) = split('x',$unicode);
				if($zero eq '0') {
					my($unicodenum) = hex($unicode);
					# コードの衝突を検出（CP932.TXTは衝突するデータが存在します・・・）
				#	if($_unicode2sjis_table[$unicodenum] ne '') {
				#		print "conflict UNICODE CODE! : $s2u_line#$comment\n";
				#	}
					$_unicode2sjis_table[$unicodenum] = pack("H*", $sjiscode);
				}
			}
		}
		close(CP932);

		$utf82sjs_x_x_init = 1;	# 変換テーブル初期化済み
}


# 上の反対 UTF-8から Shift-JISに変換する

#  &utf82sjis(*str);


sub utf82sjis
{
	local(*str) = @_;
	my($i, @strArray, $index, $pre);

	if($utf82sjs_x_x_init == 0)	# 変換テーブル初期化がまだ？
	{
		&loadutf82sjistable;
	}

	@strArray = unpack("C*",$str);	# 文字コード化
	$str = '';
	$pre = 0;
	# BOMコードがあればスキップする。
	if(@strArray > 3)
	{
		if($strArray[0] == 0xEF && $strArray[1] == 0xBB && $strArray[2] == 0xBF) {
			$pre = 3;
		}
	}

	for($i = $pre; $i < @strArray; $i++) {
		if(($strArray[$i] & 0x80) == 0 ) {	# 1byte
			$index = $strArray[$i];
		} elsif(($strArray[$i] & (0xe0)) == (0xc0)) {	# 2bytes
			$index = ($strArray[$i] & 0x1f) <<  6;
			$index |= $strArray[$i+1] & 0x3f;
			$i++;
		} else {	# 3bytes
			$index = ($strArray[$i] & 0x0f) <<  12;
			$index |= ($strArray[$i+1] & 0x3f) <<  6;
			$index |= ($strArray[$i+2] & 0x3f);
			$i+=2;
		}
		$str .= $_unicode2sjis_table[$index];
	}
	
	$str;
}

# UNICODEで escapeされたものを シフトJISに変換（例：%u3042なら あ に変換する）
#   2006/3/20  Version 0.02 %u3042のデコーダ２つを追加 Sato-Si
sub unicode_esc2sjis
{
	local(*str) = @_;
	my($i, $index, $work);

	if($utf82sjs_x_x_init == 0)	# 変換テーブル初期化がまだ？
	{
		&loadutf82sjistable;
	}

	for($i = 0; $i >= 0 && $i < length($str); ) {
		;
		$i = index($str,'%u', $i);

		if($i >= 0)
		{
			$work = hex(substr($str, $i+2,4));
			substr($str,$i,6)=$_unicode2sjis_table[$work];
		}

	}
	
	$str;
}


# UNICODEで escapeされたものを UTF-8に変換（例：%u3042なら あ に変換する）
#   2006/3/20  Version 0.02 %u3042のデコーダ２つを追加 Sato-Si
sub unicode_esc2utf8
{
	local(*str, $need_bom) = @_;
	my($i, $index, $work);

	for($i = 0; $i >= 0 && $i < length($str); ) {
		;
		$i = index($str,'%u', $i);

		if($i >= 0)
		{
			$work = hex(substr($str, $i+2,4));

			if($work <= 0x7F) {
				substr($str,$i,6)= pack("C1", $work);
			} elsif($work <= 0x7FF) {
				substr($str,$i,6) = pack("C2", 0xc0|($work >> 6), 0x80|($work & 0x3f ) );
				$i++;
			} else {
				substr($str,$i,6) = pack("C3", 0xe0|($work  >> 12), 0x80|(($work >> 6) & 0x3f), 0x80|($work & 0x3f ) );
				$i+=2;
			}

		}

	}

	if($need_bom != 0) {
		# BOMコードを追加
		$str = "\xEF\xBB\xBF$str";
	}
	$str;
}


1;
