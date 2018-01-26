<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Request $request)
    {


        return $request;
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Message $message)
    {
        return "show all";
    }

    public function edit(Message $message)
    {
        //
    }

    public function update(Request $request, Message $message)
    {
        //
    }

    public function destroy(Message $message)
    {
        //
    }
}
