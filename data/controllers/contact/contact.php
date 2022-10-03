<?php

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
		'required' => 'kanji_first_name, kanji_last_name, furigana_first_name, furigana_last_name, email, confirm_email, telephone_number, subject, body',
		'checked' => 'confirm_sending',
		// 'email' => array('email'),
		'none1' => array('prefecture', $prefecture_list),
		'pattern1' => array('telephone_number', '/^[0-9][0-9-]+$/'),
		'pattern2' => array('postal_number', '/^[0-9]{3,3}-[0-9]{4,4}$/')
	));
	if ($validator->getData('email') != $validator->getData('confirm_email')) {
		$validator->setError('confirm_email', 'メールアドレスが違います');
	}
	if ($validator->validate()) {
		$year = date('Y', $timestamp);
		// $year = 2020;
		// Write a CSV file
		$filename = 'contact_log' . $year . '.csv';
		$dir = 'data' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR;
		$uploaded_path = $dir . $filename;
		if (!file_exists($uploaded_path)) {
			$csv = new CsvFileWriter($uploaded_path);
			$csv_data = array(
				'日付', '時間', '名前', 'フリガナ', '会社名', 'メールアドレス', '電話番号', '郵便番号', 'ご住所', '件名', 'メッセージ'
			);
			$csv->addRowData($csv_data);
			$csv->close();
		}
		$csv = new CsvFileWriter($uploaded_path);
		$csv_data = array(
			$year . '年' . date('m', $timestamp) . '月' . date('d', $timestamp) . '日',
			date('H:i', $timestamp),
			$input['kanji_last_name'] . ' ' . $input['kanji_first_name'],
			$input['furigana_last_name'] . ' ' . $input['furigana_first_name'],
			$input['company_name'],
			$input['email'],
			$input['telephone_number'],
			$input['postal_number'],
			$input['prefecture'] . ' ' . $input['city'] . ' ' . $input['avenue'],
			$input['subject'],
			$input['body']
		);
		$csv->addRowData($csv_data);
		$csv->close();

		//　Save CSV file to database
		$submitted_contact = new SubmittedContactModel();
		$data = array(
			'name' => $input['kanji_last_name'] . ' ' . $input['kanji_first_name'],
			'filename' => $filename,
			'created_at' => $timestamp,
		);
		$submitted_contact->input($data);
		$submitted_contact->save();

		// Send the email
		$sender = $input['email'];
		$recipient = 'info-grow@growup59.jp';
		// $recipient = 'ahmadsidrap@gmail.com';
		$subject = $input['subject'];
		$body = $input['body'];
		$email = new EmailSender();
		$email->setSender($sender);
		$email->setRecipient($recipient);
		$email->setSubject($subject);
		$email->setBody($body);
		$email->addAttachment(array(
			'alias' => $filename,
			'path' => $uploaded_path,
			'mime_type' => 'text/csv'
		));
		if ($email->send()) {
			$validator->clearData();
			$validator->setSuccessMessage('お問い合わせをお送りいたしました。');
		}
	}
}
