<?php

namespace App\Http\Controllers;

use App\Interfaces\MessageDriverInterface as Chat;
use Illuminate\Http\Request;

// use App\Http\Requests\SendMessageRequest as Request;

class MessageController extends Controller
{
    private $chat;

    public function __construct(Chat $chat)
    {
        $this->chat = $chat;
    }

    public function sendMessage(Request $request)
    {
        $receiver = $request->input('receiver');

        $content = $request->input('content');

        $this->chat->sendMessage($receiver, $content);

        \Log::info(sprintf('Send To:[ %s ] Message:[ %s ]', $receiver, $content));

        return response()->json(['message' => 'Pesan terkirim']);
    }
}
