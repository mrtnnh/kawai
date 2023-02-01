@vite(['public/css/environmment.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('environmment')}}">環境について</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">会社・勉強会の様子</h1>
        </div>
        
        <div class="img_wrap">
            <img src="/img/company_building.jpeg">
            <img src="/img/image4.jpeg">
            <img src="/img/image3.jpeg">
        </div>

    <div class="Welfare_wrap">    
        <div class="sub_title_wrap">
            <h1 class="sub_title">福利厚生</h1>
        </div>

        <div id="welfare">
            <div class="welfare_text">
                <ul class="welfare_list">
                <h2>年間休日：123日以上</h2>
                <li>・完全週休二日制（土・日・祝）</li>
                <li>・年末年始休暇</li>
                <li>・GW休暇</li>
                <li>・夏季休暇</li>
                <li>・慶弔休暇</li>
                <li>・有給休暇</li>
                <li>・産前・産後休暇</li>
                <li>・育児休暇</li>
                <li>・介護休暇</li>
                </ul>

                <ul class="welfare_list">
                    <h2>待遇・福利厚生</h2>
                    <li>・社会保険完備</li>
                    <li>・定期健康診断</li>
                    <li>・交通費支給</li>
                    <li>・PC・スマホ貸与(規定有り)</li>
                    <li>・役職・資格手当</li>
                    <li>・引っ越し手当</li>
                    <li>・住宅手当(月1万5000円まで)</li>
                    <li>・副業OK</li>
                    <li>・退職金制度</li>
                </ul>

                <ul class="welfare_list">
                    <h2>各種制度</h2>    
                    <li>・ビジネス書籍購入サポート</li>
                    <li>・資格取得支援制度</li>
                    <li>・各種研修制度<br>(自社オンライン、外部受講支援）</li>
                    <li>・スキル取得支援制度<br>→新たなプログラムの言語取得支援、キャリアコンサルタント相談支援</li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection