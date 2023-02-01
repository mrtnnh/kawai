@vite(['public/css/work.css'])
@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('work_top')}}">仕事について</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">仕事について</h1>
        </div>
    
        <div class="work">
            <div class="work_text animationDown">
                <p>当社はSES派遣ばかりの企業ではありません。
                    自社サービス開発も目指す企業です。</p>
                <p> そのため、将来はエンジニアを目指すたくさんの仲間とともに
                    自分たちで開発ができるようになっているはずです。</p>
                    <p class="work_viewmore"><a href="{{route('work')}}">View more→</a></p>      

            </div>
            <div class="work_image">
                <img src="/img/pc_image.jpg">
            </div>
        </div>
        <div id="training">
            <div class="sub_title_wrap">
                <h1 class="sub_title">研修について</h1>
            </div>
            <p class="animationDown">入社後半年から9ヵ月はプログラミングを学びます。研修生にはeducureというウェブスクールに登録していただきます。日本で唯一受講生から費用を取らず、むしろ給料をもらいながら質の高い学習をすることができます。
                カリキュラム卒業時にはECサイトやアプリケーションを1人で開発できるまで成長することができます。弊社も支援しますので、1人だけではありません。スケジュールや悩みなども相談しながらカリキュラムを進めていきます。
            </p>
            <p class="work_viewmore"><a href="{{route('training')}}">View more→</a></p>      
        </div>

        <div id="interview_wrap">
            <div class="sub_title_wrap">
                <h1 class="sub_title">インタビュー</h1>
            </div>
            <p class="animationDown">現在学習を進めているSESの研修生の皆さんにお話しを伺いました。</p>
            <div class="interview">
                <div class="int_img">
                   <a href="{{route('interview')}}"><img src="/img/interview.jpg" ></a>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection