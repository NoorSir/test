<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function indexform(){
        return view('index');
      }
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required'
        ]);

        contact::create($request->all());
        return redirect()->back()
        ->with(['success'=>' created successfully.']);
    }
}
