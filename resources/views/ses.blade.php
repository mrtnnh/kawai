@vite(['public/css/ses.css'])
@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('ses')}}">SES事業</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">SES事業開始</h1>
        </div>

        <div class="ses_start">
            <div class="ses2_img">
                <img src="/img/businessman.jpg">
            </div>

            <div class="ses_start_text animationDown">
                <p>今までは物流・製造系中心の人材事業を行ってきました。
                    人材育成に注力し、社内スクールの運営、非正規から正規社員への転換を推進してきました。
                    現在は未来に向けた事業を創造しており、IT人材を育成し、若手人材が夢を叶えられる会社を目指してプロジェクトを始動しました。</p>
            </div>
        </div>

        <div id="it_wrap">
            <div class="sub_title_wrap">
                <h1 class="sub_title">日本のIT業界</h1>
            </div>
            <div class="it_text animationDown">
                <p>日本の情報サービス売上高は2018年の時点で約43兆円です。近年ITの需要は益々高まっています。しかし、生産年齢人口率は2030年に6700万人まで減少に向かい、IT人材も同年には約80万人不足すると言われています。ITの需要は高まっているのに、生産する人材が不足しており需給バランスが崩壊しています。その穴を埋めるために海外からの人材が増加しています。アメリカ・中国にはそれぞれ500万人以上のエンジニア人口がいる一方で、日本のIT人口は150万人ほどと言われており、世界とのエンジニア人口の差は開くばかりです。</p>
            </div>
            <div class="it_deco">
                <p class="animationSlide">上記の課題を解決すべく、</p>
                <p class="animationSlide">当社では多くのクライアントに正当な価値提供をして参ります。</p>
            </div>
        </div>

        <div class="feature">
            <div class="sub_title_wrap">
                <h1 class="sub_title">特徴</h1>
            </div>
            <p class="animationDown">社会のIT化が進み、これからますますエンジニアの需要が伸びてくる中で、未経験からでもエンジニアになれる弊社のSES事業部。研修制度がしっかり整っているので、様々な経験をしてスキルを身に着けていただき、IT業界で活躍できるエンジニアを育成いたします。</p>
        </div>
    </div>
</div>
@endsection