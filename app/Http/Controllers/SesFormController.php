<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SesFormRequest;
use \Symfony\Component\HttpFoundation\Response;
use App\Models\SesForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\SesMail;

class SesFormController extends Controller
{
    public function store(SesFormRequest $request)
    {
        $input = $request->all();
        $sesmail= SesForm::create([
            'company' =>$request['company'],
            'name' => $request['name'],
            'email' => $request['email'],
            'tell' =>$request['tell'],
            'massage' =>$request['message']
        ]);

        $to = [
            [
                'email' => 'mrtnnh78@gmail.com',
            ]
        ];

        if($sesmail){
        Mail::to($to)->send(new SesMail($input));

        return view('complete'); 
        }
    }
    

}
