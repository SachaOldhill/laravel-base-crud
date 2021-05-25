<?php

namespace App\Http\Controllers;
use App\Ospiti;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function home() {
    $ospiti = Ospiti::all();
    return view('pages.home', compact(
        'ospiti'
    ));
  }
  public function ospite($id) {
    $ospite = Ospiti::findOrFail($id);
    return view('pages.ospite', compact(
        'ospite'
    ));
  }
  public function create(){

    return view('pages.create');
  }

  public function store(Request $request){

    $validate = $request -> validate([
      'name' => 'nullable|max:255',
      'lastname' => 'nullable|max:255',
      'document_type' => 'nullable|max:1024',
      'document_number' => 'nullable|max:1024',
      'date_of_birth' => 'nullable|date',
    ]);
    $ospite = Ospiti::create($validate);
    // return redirect() -> route('home');
    return redirect() -> route('ospite', $ospite -> id);
  }

}
