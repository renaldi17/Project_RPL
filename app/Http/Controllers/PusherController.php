<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

class PusherController extends Controller
{
    public function broadcast(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'message' => 'required',
            'diskusi_id' => 'required'
        ]);

        $chat = new Chat;
        $chat->diskusi_id = $request->get('diskusi_id');
        $chat->message = $request->get('message');
        $chat->created_by = $user->id;
        $chat->created_by_name = $user->name;
        $chat->save();
        broadcast(new PusherBroadcast($chat))->toOthers();
        return view('broadcast', ['message' => $chat]);
    }

    public function receive(Request $request)
    {
        return view('broadcast', ['message' => (object)$request->get('message')]);
    }
}
