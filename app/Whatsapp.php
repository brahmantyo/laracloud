<?php

namespace App;

class Whatsapp
{
    protected string $destination;

    protected string $message;

    public function sendSingleMessage(string $destination, string $message): void
    {
        $this->destination = $destination;
        $this->message = $message;

        return $this->send();
    }

    public function sendMassMessage(Message $messages): void {}
}
