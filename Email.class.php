<?php

class Email{
	
	private $to;
	private $from;
	private $replyTo;
	private $message;
	private $subject;
	private $error;
	
	function Email(){}
	
	function setTo($var){
		if( is_array($var) ){
			implode(", ", $var);
		}
		$this->to = $var;
	}
	
	function setFrom($from, $reply=""){
		$this->from = $from;
		if( empty($replyTo) ){
			$this->replyTo = $from;
		} else {
			$this->replyTo = $reply;
		}
	}
	
	function setSubject($subject){
		$this->subject = $subject;
	}
	
	function setNewEmail($to, $from, $subject){
		$this->to = $to;
		$this->from = $from;
		$this->subject = $subject;
	}
	
	function setMessage($message){
		$this->message = $message;
	}
	
	function send(){

		if( empty($this->to) ){ $this->error="E-mail destination empty!"; return false; }
		if( empty($this->from) ){ $this->error="E-mail sender empty!"; return false; }
		if( empty($this->replyTo) ){ $this->replyTo = $this->from; }
		if( empty($this->subject) ){ $this->subject=""; }

		$headers = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
		$headers .= 'From: '.$this->from."\r\n";
		$headers .= 'Reply-To: '.$this->replyTo."\r\n";

		$mensagem = $this->message;
		
		if( mail($this->to,$this->subject,$mensagem,$headers) ){
			return true;
		} else {
			$this->error = "Error sending e-mail!";
			return false;
		}

	}


}


?>
