<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diskusi;
use App\Models\Chat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class ChatController extends Controller
{
    public function make_room(Request $req){
        $user = Auth::user();
        $req->validate([
            'judul' => 'required|string|max:250',
        ]);
        $diskusi = new Diskusi;
        $diskusi->judul = $req->judul;
        $diskusi->created_by = $user->id;
        $diskusi->created_by_name = $user->name;
        $diskusi->save();
        return redirect()->back()
          ->withSuccess('You have successfully create room!');
    }

    public function list_diskusi(Request $req){
        $rooms = Diskusi::all();
        return view('diskusi', ['rooms' => $rooms]);
    }

    public function forum(Request $req, string $diskusi_id){
        $messages = Chat::where('diskusi_id', $diskusi_id)->orderBy('created_at', 'ASC')->get();
        $diskusi = Diskusi::where('id', $diskusi_id)->first();
        return view('forum_diskusi', ['messages' => $messages, 'diskusi' => $diskusi]);
    }
}