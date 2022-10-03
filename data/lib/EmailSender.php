<?php

class EmailSender
{
	private $sender;
	private $recipient;
	private $subject;
	private $body;
	private $is_html = false;
	private $attachment = array();
	private $headers = array();

	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	public function setBody($body)
	{
		$this->body = $body;
	}

	public function addAttachment($attachment)
	{
		$this->attachment = $attachment;
	}

	public function setSender($sender)
	{
		$this->sender = $sender;
	}

	public function setIsHtml($is_html)
	{
		$this->is_html = $is_html;
	}

	public function setRecipient($recipient)
	{
		$this->recipient = $recipient;
	}

	private function addHeader($name, $value)
	{
		$this->headers[] = $name . ': ' . $value;
	}

	public function send()
	{
		$this->addHeader('From', $this->sender);
		$this->addHeader('MIME-Version', '1.0');

	    if ($this->attachment) {
			$separator = md5(time());
			$this->addHeader('Content-Type', 'multipart/mixed; boundary="' . $separator . '"');
			// Message
		    $body = '--' . $separator . PHP_EOL;
		    $body .= 'Content-Type: text/plain; charset=utf-8' . PHP_EOL;
		    $body .= 'Content-Transfer-Encoding: 8bit' . PHP_EOL . PHP_EOL;
		    $body .= $this->body . PHP_EOL . PHP_EOL;
		    // Attachment
		    if (!file_exists($this->attachment['path'])) {
		    	throw new Exception('Attached file is not found: ' . $this->attachment['path'], 500);
		    }
		    $file_data = chunk_split(base64_encode(file_get_contents($this->attachment['path'])));
		    if (!isset($this->attachment['mime_type'])) {
		    	$this->attachment['mime_type'] = mime_content_type($this->attachment['path']);
		    }
		    $body .= '--' . $separator . PHP_EOL;
		    $body .= 'Content-Type: ' . $this->attachment['mime_type'] . '; name="' . 
		    	$this->attachment['alias'] . '"' . PHP_EOL;
		    $body .= 'Content-Transfer-Encoding: base64' . PHP_EOL;
		    $body .= 'Content-Disposition: attachment' . PHP_EOL . PHP_EOL;
		    $body .= $file_data . PHP_EOL;
		    $body .= '--' . $separator . '--';
		} else {
			$body = $this->body;
			if ($this->is_html) {
				$this->addHeader('Content-type', 'text/html; charset=utf-8');
			} else {
				$this->addHeader('Content-type', 'text/plain; charset=utf-8');
			}
		}
		// echo $body;exit;
		
		$headers = null;
		foreach ($this->headers as $header) {
			$headers .= $header . PHP_EOL;
		}

		return mail($this->recipient, $this->subject, $body, $headers);
	}
}