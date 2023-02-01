@vite(['public/css/work.css'])
@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('training')}}">研修内容</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">研修内容</h1>
        </div>

        <div class="training_text animationDown">
            <p>研修は3つのプログラムから自身が適当だと思うものを選んでいただき、プログラミングについて学んでいただきます。カリキュラムを終えた方は100%ITエンジニアとして実務に入ることができます。</p><br>
            <p class="bold">【1】プログラミング学習カリキュラムでスキル習得コース</p>
            <p> 倉庫の作業スタッフ、コールセンタースタッフ、製造スタッフなど、当社の提携先企業にて昼間は働きながらスキルを身に付けていくコースです。「こんなエンジニアになりたい」と明確な目標があり、自分のタイミングでコツコツと学んでいきたい方にオススメです。</p><br>

            <p class="bold">【2】スキル習得＆専任コンサルタントのサポート付きコース</p>
            <p>上記と同じように昼間は働きながらスキルを習得しつつ、専任コンサルタントのサポートを受けられるコース。「いきなり1人は不安」「自分の明確なキャリアが決まっていない」といった方にオススメです。</p><br>

            <p class="bold">【3】プログラミング学習カリキュラムに3ヶ月間集中コース</p>
            <p>働かずに、3ヶ月間でスキルを身に付ける短期集中型コース。「早期でのエンジニアデビューを叶えたい」「いち早くスキルを習得したい」といった方にオススメです。</p>
        </div>

        <div class="sub_title_wrap">
            <h1 class="sub_title">スケジュールイメージ</h1>
        </div>

        <div class="schedule_intro animationDown">最短6か月で研修を終える場合のスケジュールイメージは以下の図です。エンジニアとして働くには、就業先企業との面談で採用してもらう必要があります。そのため、カリキュラム終盤に差し掛かってくると、面談練習も数回行います。</div>

        <div class="schedule">
            <div class="schedule_img">
                <img src="/img/schedule.jpg">
            </div>

            <div class="schedule_list">
                <p class="bold animationDown">具体的な研修内容</p>
                <ul>
                    <li>1章：フロントエンドの基礎（言語／HLML、CSS）</li>
                    <li>2章：フロントエンドの基礎（言語／Javascript、jQuery）</li>
                    <li>3章：環境構築（サイト環境の整備 ＋ バックエンドの基礎（言語／PHP）</li>
                    <li>4章：バックエンドの実務（実装の練習 ＋ フレームワーク）</li>
                    <li>5～6章：バックエンドの応用（データの更新・機能追加など）（言語／PHP）</li>
                    <li>7章：自作（サイト作り ＋ 発表（パートナー企業の講師に発表・FB）</li>
                    <li>8章：機能追加（講師のアドバイスのもと自作したものへ機能追加 ＋ Linuxの基礎/フレームワーク</li>
                </ul>
            </div>
        </div>

        <div class="sub_title_wrap">
            <h1 class="sub_title">キャリアステップ</h1>
        </div>

        <div>
            <p class="animationDown">研修を終了してからは、弊社の正社員SESとして他社の案件ごとに働くようになります。様々な経験を積み、スキルを磨いて、将来は、弊社内エンジニアとして社内開発をする道に進んでもいいですし、
                フリーランスとして働いていくという選択もあります。どんな道も会社として応援します。
            </p>
        </div>

        <div class="career">
            <div class="career_img">
                <img src="/img/career.jpg">
            </div>
        </div>
    </div>
</div>
@endsection
