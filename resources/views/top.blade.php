@vite(['public/css/top.css'])
@extends('layouts.layouts')
@section('content')
<div class="container">
    
        <div class="top">
            <div class="top_img">
                <img src="/img/top_image.jpg" alt="top_image">
            </div>
            <div class="img_text">
                <h1 class="animationUP">challenge  ✖ IT</h1>
            </div>
        </div> 
    
        <div class="message_section">
            <div class="message_wrap">
                <h1 class="message animationDown">Message</h1>
            </div>

            <div class="message_text animationDown">
                <p>川相商事は、エンジニアになりたいという夢を持つ若者を応援しています！
                当社のSES事業は2021年秋に始動し、未経験からプロフェッショナルのエンジニアを目指せる事業を立ち上げ、働きながら学べる環境を提供しています。
                現在は、エンジニアという目標を持つ若手人材と一緒に走りだしています。 
                あなたも川相商事の一員となって、エンジニアとして活躍しませんか？</p>
            </div>    
        </div>  
        <div>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
</div>
        <div class="main_contents">
       
            <div class="main_section_wrap">
                <div class="main_content1">
                    <div class="circle1">
                        <div class="box_text">
                            <p>SES事業について</p>
                            <h2 class="circle_title">BUSINESS</h2>
                            <a href="{{route('ses_top')}}" class="viewmore">View more→</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="/img/top_work.jpg" alt="ses_top_image">
                    </div>
                </div>

                <div class="main_content2">
                    <div class="circle2">
                        <div class="box_text">
                            <p>仕事について</p>
                            <h2 class="circle_title">WORK</h2>
                            <a href="{{route('work_top')}}" class="viewmore">View more→</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="/img/top_work2.jpg" alt="work_top_image">
                    </div>
                </div>

                <div class="main_content1">
                    <div class="circle3">
                        <div class="box_text">
                            <p>環境について</p>
                            <h2 class="circle_title">ENVIRONMMENT</h2>
                            <a href="{{route('environmment')}}" class="viewmore">View more→</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="/img/coffee.jpg" alt="ses_top_image">
                    </div>
                </div>

                <div class="main_content2">
                    <div class="circle4">
                        <div class="box_text">
                            <p>採用について</p>
                            <h2 class="circle_title">RECRUIT</h2>
                            <a href="{{route('recruit')}}" class="viewmore">View more→</a>
                        </div>
                    </div>
                    <div class="img">
                        <img src="/img/recruit.jpg" alt="ses_top_image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection