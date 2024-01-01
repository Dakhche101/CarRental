<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();
        return response()->json([
            'message'=>'Form Sented successfully',
            'data'=>$request->name
        ]);
    }

    public function Show(){
        $contacts=Contact::all();
        return response()->json([
            'contacts'=>$contacts
        ]);
    }
}
