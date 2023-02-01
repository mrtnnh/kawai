@vite(['public/css/interview.css', 'public/css/work.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('interview')}}">インタビュー内容</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">インタビュー</h1>
        </div>

        <div class="interview_wrap">
            <div class="interview_q">Q.川相商事に入社しようと思った理由は何ですか？</div>
                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/A.png">Aさん
                    </div>
                    <div class="interview_a animationDown">
                    SES 企業の⾯接を弊社以外にも複数受けましたが、その中で最も⼈材育成に注⼒して
                    いると思ったからです。未経験から転職する上で、年齢や経験のディスア
                    ドバンテージを埋めるには成⻑⼒が重要だと感じていました。弊社
                    には⼈材のスキルアップへのこだわりに熱い思いを感じたからです。
                    </div>
                </div>

            <div class="interview_box">
                <div class="int_ses">
                    <img src="/img/B.png">Bさん
                </div>
                <div class="interview_b animationDown">
                前職ではプログラミングに全く関係ない仕事をしておりましたが、
                スマホを見ていてウェブサイトの仕組みが知りたいと思い、SEへの転職を決めました。
                特に弊社では未経験でも人材開発のサポート体制や
                プログラミングスクールの受講など、
                サポート体制がしっかりしていたので入社することを決めました。
                </div>
            </div>

            <div class="interview_q">Q.川相商事に入社してよかったことはありあますか？</div>
                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/C.png">Cさん
                    </div>
                    <div class="interview_c animationDown">
                    未経験からでも学習できる環境があることや、毎月一回は面談があり今後のキャリアアップや些細な悩みまで聞いてもらえるので、安心して仕事と学習に取り組むことができます。
                    そのおかげで、楽しくプログラミングを学習することができています。入社する前はこれほど楽しいものだと思いもしませんでした。特にプログラムが正常に動いた時の感動は言葉では表せません。               
                    </div>
                </div>

                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/D.png">Dさん
                    </div>
                    <div class="interview_d animationDown">
                    学習を進めていくうえで、わからないことがあり、なかなかカリキュラムを進めることができていない状況が何回かありました。
                    そんな時、親身に相談に乗っていただいて、どうすれば良いか一緒に考えて、乗り越えることができました。勉強は一人でする時間が長いですが、
                    私たちにとても配慮してくださっていて、入社して良かったと思いました。
                    </div>
                </div>
             </dic>

             <div class="interview_q">Q.勉強で大変なことは何ですか？</div>
                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/A.png ">Aさん
                    </div>
                    <div class="interview_a animationDown">
                    沢⼭ありますが、⼀番⼤変だと感じたのはスケジュール管理です。知らないことを学習している以上、想定外に⾏き詰まり、思いもよらない停滞
                    が発⽣する事が多々ありました。知識がない以上、とても簡単なエラーでも多くの時間を費やす可能性もあります。あらかじめ余裕を持ったスケジュールであらゆるトラブルに備える重要性を感じました。        
                    </div>
                </div>

                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/C.png">Cさん
                    </div>
                    <div class="interview_c animationDown">
                    基本的な IT 知識、プログラミング、データベースなど、とにかく覚えることが多いのが大変です。
                    また、仕事が終わって疲れた状態での学習は体力が必要だと感じています。
                    </div>
                </div>
             </dic>

             <div class="interview_q">Q.今はどんな仕事・学習をしていますか？</div>
                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/D.png">Dさん
                    </div>
                    <div class="interview_d animationDown">
                        お昼は、簡単な入力事務の仕事をしています。職場のみなさんがとても優しいので、ストレスなく働けています。
                        カリキュラムはもうすぐ終わりそうで、今は、laravelというフレームワークを使って、Todoリストのアプリを製作しています。
                    </div>
                </div>

                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/A.png">Aさん
                    </div>
                    <div class="interview_a animationDown">
                    今は全てのカリキュラムを修了し、SEとして働く案件が決まったところ
                    です。案件はライセンス管理システムの改修なので、それに向けて必要
                    な知識を学習し、テストしています。また、カリキュラムから派⽣して
                    より広く知識を深めています。
                    </div>
                </div>
             </dic>

             <div class="interview_q">Q.SEになったらどんな仕事をしてみいたいですか？</div>
                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/B.png">Bさん
                    </div>
                    <div class="interview_b animationDown">
                    痒いところに手が届くサービスを考え、実行してみたいです。そのためにSESお仕事の経験を積み、
                    今後自分で考えていく能力を育みたいと思います。
                    </div>
                </div>

                <div class="interview_box">
                    <div class="int_ses">
                        <img src="/img/C.png">Cさん
                    </div>
                    <div class="interview_c animationDown">
                    システム開発を通じて最先端の分野で活躍したいと考えており、多くの人々に喜んでもらえるような
                    サービスを作っていきたいと考えています。
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection