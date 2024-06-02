<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JanjiTemu;
use Illuminate\Support\Facades\Auth;

class MeetController extends Controller
{
    public function list_janji(Request $req){
        $janji = JanjiTemu::all();
        return view('myappointment', ['janji' => $janji]);
    }

    public function add_janji(Request $req){
      $user = Auth::user();
      $req->validate([
          'name' => 'required',
          'email' => 'required',
          'nomor' => 'required',
          'status' => 'required',
          'pesan' => 'required',
          'tanggal' => 'required|date',
      ]);
      $janji = new JanjiTemu;
      $janji->name = $req->name;
      $janji->email = $req->email;
      $janji->tanggal = $req->tanggal;
      $janji->nomor = $req->nomor;
      $janji->status = $req->status;
      $janji->pesan = $req->pesan;
      $janji->created_by = $user->id;
      $janji->created_by_name = $user->name;
      $janji->save();

      $janjitemu = JanjiTemu::all();
      return redirect()->route('my_app');
    }

    public function change_status(Request $req, string $id, string $status){
      $item = JanjiTemu::find ($id); 
      $item->status = $status;
      $item->save();
      return redirect()->route('my_app');
    }
}