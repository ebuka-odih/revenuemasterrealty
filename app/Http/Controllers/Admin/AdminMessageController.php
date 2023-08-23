<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MessageMail;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $users = User::where('admin', 0)->get();
        return view('admin.others.message', compact('messages', 'users'));
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->message = $request->message;
        $message->save();
        Mail::to($message->user->email)->send(new MessageMail($message));
        return redirect()->back()->with('success', "Message Sent Successfully");
    }

    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('admin.others.edit-message', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->update(['message' => $request->message]);
        return redirect()->route('admin.message.index')->with('success', "Message Updated");
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('success', "Message Deleted");
    }
}
