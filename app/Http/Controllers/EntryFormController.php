<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Entry;
use Illuminate\Support\Facades\Mail;
use App\Mail\EntryMail;

class EntryFormController extends Controller
{
    public function store(EntryRequest $request)
    {
        $input = $request->all();
        $subscriber=Entry::create([
	        'name' => $request['name'],
            'email' => $request['email'],
            'tell' =>$request['tell'],
            'message' =>$request['message']
        ]);

        $to = 
        [
            [
                'email' => 'mrtnnh78@gmail.com',
            ]
        ];

        if($subscriber){
        Mail::to($to)->send(new EntryMail($input));

        return view('complete'); 
        }
    }
}
