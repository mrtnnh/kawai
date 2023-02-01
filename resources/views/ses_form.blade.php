@vite(['public/css/form.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title_ses">
        <h1><a href="{{route('ses_form')}}">SESのご依頼</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title_ses">SESご依頼フォーム</h1>
        </div>
        <form action="{{route('ses.store')}}" method="post">
            @csrf
            <div class="form_wrap">
                <div class="inputs">
                    @error('company')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <label for="company">企業名</label><br>
                    <input type="text" name="company" placeholder="川相商事株式会社" value="{{old('company')}}" required>
                </div>

                <div class="inputs">
                    @error('name')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <label for="manager">企業担当者様氏名</label><br>
                    <input type="text" name="name" placeholder="山田太郎" value="{{old('name')}}" required>
                </div>

                <div class="inputs">
                    @error('email')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <label for="email">メールアドレス</label><br>
                    <input type="text" name="email" placeholder="example@gmail.com" value="{{old('email')}}" required>
                </div>

                <div class="inputs">
                    @error('tell')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <label for="tell">電話番号</label><br>
                    <input type="text" name="tell" placeholder="09012345678" value="{{old('tell')}}" required>
                </div>

                <div class="inputs">
                    @error('message')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    <label for="message">ご質問等をご記入ください</label><br>
                    <textarea type="text" name="message">{{old('message')}}</textarea>
                    <input type="hidden" value="{{old('message')}}">
                </div>

                <div class="form_btn">
                    <input class="ses_btn" type="submit"> 
                </div>
            </div>
        </form>
    </div>
</div>
@endsection