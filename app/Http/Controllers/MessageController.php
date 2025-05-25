<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function requestLeavePage()
    {
        $title = 'Message | HRIS';
        $header = 'Message';
        return view('message.request_leave', compact('title', 'header'));
    }
}
