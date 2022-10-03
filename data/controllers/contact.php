
<?php

header("Content-Type: text/html; charset=UTF-8");

use CustomLib\CsvFileWriter;
use CustomLib\EmailSender;
use CustomLib\Validator;
use App\Models\SubmittedContact;

$validator = new Validator();

$prefecture_list = array(
	'' => '【選択して下さい】',
	array(
		'北海道・東北' => array(
			'北海道',
			'青森県',
			'岩手県',
			'秋田県',
			'宮城県',
			'山形県',
			'福島県',
		)
	),
	array(
		'関東' => array(
			'栃木県',
			'群馬県',
			'茨城県',
			'埼玉県',
			'東京都',
			'千葉県',
			'神奈川県',
		)
	),
	array(
		'中部' => array(
			'山梨県',
			'長野県',
			'新潟県',
			'富山県',
			'石川県',
			'福井県',
			'静岡県',
			'岐阜県',
			'愛知県',
		)
	),
	array(
		'近畿' => array(
			'三重県',
			'滋賀県',
			'京都府',
			'大阪府',
			'兵庫県',
			'奈良県',
			'和歌山県',
		)
	),
	array(
		'四国' => array(
			'徳島県',
			'香川県',
			'愛媛県',
			'高知県',
		)
	),
	array(
		'中国' => array(
			'鳥取県',
			'島根県',
			'岡山県',
			'広島県',
			'山口県',
		)
	),
	array(
		'九州・沖縄' => array(
			'福岡県',
			'佐賀県',
			'長崎県',
			'大分県',
			'熊本県',
			'宮崎県',
			'鹿児島県',
			'沖縄県',
		)
	),
);

if ($_POST) {
	$timestamp = time();
	$input = $_POST;

	$validator->input($input);
	$validator->setRule(array(
		'required' => 'kanji_first_name, kanji_last_name, furigana_first_name, furigana_last_name, email, confirm_email, telephone_number',
		'checked' => 'confirm_sending',
		// 'email' => array('email'),
		'none1' => array('prefecture', $prefecture_list),
		'pattern1' => array('telephone_number', '/^[0-9][0-9-]+$/'),
		'pattern2' => array('postal_number', '/^[0-9]{3,3}-[0-9]{4,4}$/')
	));
	if ($validator->validate()) {
		// Write a CSV file
		$filename = $timestamp . '.csv';
		$dir = 'uploaded' . DIRECTORY_SEPARATOR . 'contact' . DIRECTORY_SEPARATOR;
		// $filename = '11111.csv';
		$csv = new CsvFileWriter($dir . $filename);
		$csv->addRowData('姓', $input['kanji_first_name']);
		$csv->addRowData('名', $input['kanji_last_name']);
		$csv->addRowData('姓カナ', $input['furigana_first_name']);
		$csv->addRowData('名カナ', $input['furigana_last_name']);
		$csv->addRowData('会社名', $input['company_name']);
		$csv->addRowData('電話番号', $input['telephone_number']);
		$csv->addRowData('郵便番号', $input['postal_number']);
		$csv->addRowData('都道府県', $input['prefecture']);
		$csv->addRowData('市区町村', $input['city']);
		$csv->addRowData('丁目番地', $input['avenue']);
		$csv->addRowData('備考欄', $input['body']);
		$csv->close();

		//　Save CSV file to database
		$submitted_contact = new SubmittedContact();
		$data = array(
			'name' => $input['kanji_first_name'] . ' ' . $input['kanji_first_name'],
			'filename' => $filename,
			'created_at' => $timestamp,
		);
		$submitted_contact->input($data);
		$submitted_contact->save();

		// Send the email
		$sender = $input['email'];
		$recipient = 'admin@localhost';
		$subject = $input['subject'];
		$body = $input['body'];
		$email = new EmailSender();
		$email->setSender($sender);
		$email->setRecipient($recipient);
		$email->setSubject($subject);
		$email->setBody($body);
		$email->send();
	}
}