<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showtop()
    {
        return view('top');
    }

    public function show_ses_top()
    {
        return view('ses_top');
    }

    public function show_work_top()
    {
        return view('work_top');
    }

    public function show_work()
    {
        return view('work');
    }

    public function show_training()
    {
        return view('training');
    }

    public function showenvironmment()
    {
        return view('environmment');
    }

    public function showrecruit()
    {
        return view('recruit');
    }

    public function showentry()
    {
        return view('entry');
    }

    public function show_ses_form()
    {
        return view('ses_form');
    }

    public function show_ses()
    {
        return view('ses');
    }

    public function showcomplete()
    {
        return view('complete');
    }

    public function showinterview1()
    {
        return view('interview');
    }


}
