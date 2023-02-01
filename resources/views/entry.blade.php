@vite(['public/css/entry.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('entry')}}">エントリー</a></h1>
    </div>

    <div class="contents">
    <div class="sub_title_wrap">
            <h1 class="sub_title">エントリーフォーム</h1>
        </div>
        <form action="{{route('entry.store')}}" method="post">
            @csrf
            <div class="form_wrap">
                <div class="inputs">

                    <label for="name">氏名</label><br>
                    @error('name')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                    <input type="text" name="name" placeholder="山田太郎" value="{{old('name')}}">
                </div>

                <div class="inputs">
                    <label for="email">メールアドレス</label><br>
                    @error('email')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                    <input type="text" name="email" placeholder="example@gmail.com" value="{{old('email')}}">
                </div>

                <div class="inputs">
                    <label for="tell">電話番号</label><br>
                    @error('tel')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                    <input type="text" name="tell" placeholder="09012345678" value="{{old('tell')}}">
                </div>

                <div class="inputs">
                    <label for="message">ご質問や応募理由などをご記入ください</label><br>
                    @error('message')
                    <p style="color:red">{{$message}}</p>
                    @enderror
                    <textarea type="text" name="message">{{old('message')}}</textarea>
                </div>

                <div class="form_btn">
                    <input class="entry_btn" type="submit"> 
                </div>
            </div>
        </form>
    </div>
</div>
@endsection