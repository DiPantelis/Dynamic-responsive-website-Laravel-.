<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userInfoMessage;
use  App\Mail\ContactMessage;
use Mail;

class UserInfoMessageController extends Controller
{
    
    public function index(){

        //render a list of a resource
        $useriMessages= userInfoMessage::latest()->get();
       

    }

    public function show(){

        //Show a single resource
      

    }

    public function create(){

        //Shows a view to create a new resource
    }

    public function store(){

        //Persist the new resource

        request()->validate([
            'name'=>['required', 'min:5', 'max:30','regex:/^[\p{Greek}\s a-zA-Z]+$/u'],
            'phone'=>['required', 'digits:10'],
            'email'=>['required', 'min:10', 'max:30','email'],
            'message'=>['required', 'regex:/^[\p{Greek}\s\d a-zA-Z\-\_\&\%\!\,\.\΄\'\"\:\(\)\?]+$/u']
        ]);

        
        $userIM= new userInfoMessage;
        $userIM->name=request('name');
        $userIM->phone=request('phone');
        $userIM->email=request('email');
        $userIM->message=request('message');
        
        $userIM->save();

        Mail::to('dipantelis@example.com')
            ->send(new ContactMessage($userIM->name, $userIM->phone, $userIM->email, $userIM->message));

        return redirect('/')
            ->with('notification', 'The message was sent.');

    }

    public function edit(){
        //Show a view to edit an existing resource
    }

    public function update(){
        //Persist the edited resource
    }

    public function destroy(){
        //Delete the resource
    }
    
}
