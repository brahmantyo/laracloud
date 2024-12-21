<?php

namespace App;

class Whatsapp
{
    protected String $destination;

    protected String $message;

    public function sendSingleMessage(String $destination, String $message):void
    {
	$this->destination = $destination;
	$this->message = $message;
        return $this->send();
    }

    public function sendMassMessage(Message $messages): void
    {
        
    }
}
