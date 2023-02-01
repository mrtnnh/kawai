@vite(['public/css/work.css'])
@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('work_top')}}">仕事内容</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">仕事内容</h1>
        </div>
        <div class="work2_text animationDown">
            <p>物流業界やメーカーなど、当社と取引のあるお客様先に常駐し、企業HPの制作や社内のインフラ整備などを承ります。業界を問わず、
                「企業HPが古いので刷新したい」「自社の販売サイトを構築したい」など様々なニーズにお応えします。
                お客様のニーズ・要求をヒアリングし、最適なサービスを提供いたします。</p>
        </div>

        <div class="sub_title_wrap">
            <h1 class="sub_title">サービス内容</h1>
        </div>

        <div class="service_wrap">
            <div class="service_box_wrap">
                <div class="service_box">
                    <h3>Webシステム開発</h3>
                    <p class="animationDown">Webシステム、ECサイト、Webシステムの企画、設計、構築、運用を行います。</p>
                </div>

                <div class="service_box">
                    <h3>アプリケーション開発</h3>
                    <p class="animationDown">アプリケーション分野の、システム業務分析、要件定義、設計、開発を行います。</p>
                </div>
            </div>

                <div class="work_case_wrap">
                    <div class="work_case">
                        <h3>業務事例</h3>
                        <ul class="animationDown">
                            <li>・飲食店向け予約管理プラットフォームの開発・運用</li>
                            <li>・エンタメサイトのシステム開発</li>
                            <li>・広告受発注システム開発</li>
                            <li>・物流会社のHP開発・運用</li>
                        </ul>
                    </div>

                        <div class="work2_img">
                            <img src="/img/work2.jpg">
                        </div>
                </div>
            <div class="process">
                <h3>工程</h3>
                <p class="animationDown">ご依頼を受けてからの流れは以下を想定しております。</p>
                <div class="process_img">
                    <img src="/img/process.jpg">
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection