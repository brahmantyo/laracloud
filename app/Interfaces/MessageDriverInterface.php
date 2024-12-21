<?php

namespace App\Interfaces;

interface MessageDriverInterface
{
    public function sendMessage($receiver, $content);
}
