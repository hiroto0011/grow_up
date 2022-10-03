/********************************************************************************

	SYNCER ? 知識、感動をみんなと同期(Sync)するブログ

	* 配布場所
	https://syncer.jp/jquery-to-top-button

	* 最終更新日時
	2015/08/17 11:23

	* 作者
	あらゆ

	** 連絡先
	Twitter: https://twitter.com/arayutw
	Facebook: https://www.facebook.com/arayutw
	Google+: https://plus.google.com/114918692417332410369/
	E-mail: info@syncer.jp

	※ バグ、不具合の報告、提案、ご要望など、お待ちしております。
	※ 申し訳ありませんが、ご利用者様、個々の環境における問題はサポートしていません。

********************************************************************************/


// グローバル変数
var syncerTimeout = null ;

// 一連の処理
$( function()
{
	// スクロールイベントの設定
	$( window ).scroll( function()
	{
		// 1秒ごとに処理
		if( syncerTimeout == null )
		{
			// セットタイムアウトを設定
			syncerTimeout = setTimeout( function(){

				// 対象のエレメント
				var element = $( '#page-top' ) ;

				// 現在、表示されているか？
				var visible = element.is( ':visible' ) ;

				// 最上部から現在位置までの距離を取得して、変数[now]に格納
				var now = $( window ).scrollTop() ;

				// 最下部から現在位置までの距離を計算して、変数[under]に格納
				var under = $( 'body' ).height() - ( now + $(window).height() ) ;

				// 最上部から現在位置までの距離(now)が1500以上かつ
				// 最下部から現在位置までの距離(under)が200px以上かつ…
				if( now > 1500 && 200 < under )
				{
					// 非表示状態だったら
					if( !visible )
					{
						// [#page-top]をゆっくりフェードインする
						element.fadeIn( 'slow' ) ;
					}
				}

				// 1500px以下かつ
				// 表示状態だったら
			/*	else if( visible )
				{
					// [#page-top]をゆっくりフェードアウトする
					element.fadeOut( 'slow' ) ;
				}*/

				// フラグを削除
				syncerTimeout = null ;
			} , 1000 ) ;
		}
	} ) ;

	// クリックイベントを設定する
	$( '#move-page-top' ).click(
		function()
		{
			// スムーズにスクロールする
			$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
		}
	) ;
} ) ;