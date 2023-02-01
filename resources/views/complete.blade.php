@vite(['public/css/style.css', 'public/css/form.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="contents">
        <div class="complete_message">
        <h2>送信完了しました。</h2>
        </div>

      
        <div class="form_btn">
            <a href="{{route('top')}}"><input class="complete_btn" type="button" value="TOPへ"></a> 
        </div>
       
        </div>
    </div>
</div>

@endsection