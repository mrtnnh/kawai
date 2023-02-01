@vite(['public/css/ses.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('ses_top')}}">事業について</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">事業概要</h1>
        </div>

        <div class="ses_wrap">
            <div class="ses_text">
                <p class="animationDown">業界を問わず、ウェブサイトの設計・作成・リニューアル、システム開発などを承ります。</p>
                <p class="animationDown">開発後のアフターフォローも行いますので、エンジニアが不在の企業様でもお気軽にお問い合わせください。</p>
                <p class="animationDown"><a href="{{route('ses')}}" class="viewmore">View more→</a></p>      
            </div>
            <div class="ses_img"> 
                <img src="/img/ses_top.jpg">
            </div>
        </div>

        <div id="vision_wrap">
            <div class="sub_title_wrap">
                <h1 class="sub_title">Vision</h1>
            </div>

            <div class="vision_text">
                <div class="vision_left animationDown">
                    <p>Vision</p>
                    <p>働く喜びを</p>
                    <p>感じる人を創る</p>
                </div>
            <div class="vision_right animationDown">
                <p>多くの若い世代が手に職をつけて夢を実現するのを支援して、実際に夢を叶えていくのを見てきました。</p>
                <p>今日も同じように共感して、弊社で一緒に働いていける仲間が、一人でも多く増えてくれると嬉しいと思っています。</p>
            </div>
        </div>

        <div id="mission_wrap">
            <div class="sub_title_wrap">
                <h1 class="sub_title">Mission</h1>
            </div>

            <div class="mission_text">
                <p>私たちのミッションは</p>
                <h2 class="animationSlide">NEXT GENERATION</h2>
                <p>多くの人材が集い、夢を叶えるIT✖人材企業へ。</p>
            </div>

        </div>

    </div>    
</div>


@endsection