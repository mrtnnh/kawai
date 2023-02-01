<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        @vite(['public/css/style.css','resources/js/app.js'])

        <title>川相商事株式会社</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="nav_wrap">
                    <div class="company_name">
                        <a href="{{route('top')}}">川相商事株式会社</a>
                    </div>

                    <div class="right_navbar">
                        <div class="nav_content">
                            <a class="nav_ses" href="{{route('ses_top')}}">Business</a>
                        </div>   
                        <div class="nav_content">
                            <a class="nav_work" href="{{route('work_top')}}">Work</a>
                        </div>  
                        <div class="nav_content">
                            <a class="nav_environmment" href="{{route('environmment')}}">Environmment</a>
                        </div>  
                        <div class="nav_content">
                            <a class="nav_entry" href="{{route('recruit')}}">Recruit</a>
                        </div>  

                    </div>
                </div>
            </nav>   
        </header>
        <main>
            @yield('content')
        </main>

       <div class="inquiry">
            <div class="footer_title">
                <h1>お問い合わせ</h1>
            </div>

            <div class="footer_btn">
                <div class="btn_wrap">
                    <button class="btn" type="button" onclick="location.href='{{ route('entry') }}' ">エントリー</button>
                </div>

                <div class="btn_wrap">
                <button class="btn" type="button" onclick="location.href='{{ route('ses_form') }}' ">SESご依頼</button>
                </div>
            </div>
        </div>

            <footer>
                <div class="info_wrap">
                    <div class="info_title">
                        <h2><a href="{{route('top')}}">川相商事株式会社</a></h2>
                    </div>
        
                    <div class="address">
                        <div class="address_content">
                            <p>【大阪本社】</p>
                            <p>〒571-0015</p>
                            <p>大阪府門真市三ツ島5丁目6番24号</p>
                            <p></p>
                        </div>

                        <div class="address_content">
                            <p>【滋賀支社】</p>
                            <p>〒525-0058</p>
                            <p>滋賀県草津市野路東五丁目26番35号</p>
                            <p></p>
                        </div>
                    </div>

                    <div class="sitemap">
                        <div class="sitemap_box">
                            <h3><a href="{{route('ses_top')}}">事業について</a></h3>
                            <p><a href="{{route('ses_top')}}">▷事業概要</a></p>
                            <p><a href="{{route('ses_top')}}#vision_wrap">▷Vision</a></p>
                            <p><a href="{{route('ses_top')}}#mission_wrap">▷Mission</a></p>
                            <h3><a href="{{route('ses')}}">SES事業</a></h3>
                            <p><a href="{{route('ses_top')}}#mission_wrap">▷Mission</a></p>
                            <p><a href="{{route('ses')}}#it_wrap">▷日本のIT業界</a></p>
                            <p><a href="{{route('ses_form')}}">▷ご依頼はこちら</a></p>
                        </div>

                        <div class="sitemap_box">
                            <h3><a href="{{route('work_top')}}">仕事について</a></h3>
                            <p><a href="{{route('work')}}">▷▷仕事について詳細</a></p>
                            <p><a href="{{route('work_top')}}#training">▷研修について</a></p>
                            <p><a href="{{route('training')}}">▷▷研修について詳細</a></p>
                            <p><a href="{{route('work_top')}}#interview_wrap">▷インタビュー</a></p>
                        </div>

                        <div class="sitemap_box">
                            <h3><a href="{{route('environmment')}}">環境について</a></h3>
                                <p><a href="{{route('environmment')}}">▷職場風景</a></p>
                                <p><a href="{{route('environmment')}}#welfare">▷福利厚生</a></p>
                        </div>

                        <div class="sitemap_box">
                            <h3><a href="{{route('recruit')}}">採用について</a></h3>
                            <p><a href="{{route('recruit')}}">▷募集要項</a></p>
                            <p><a href="{{route('entry')}}">▷エントリー</a></p>
                        </div>
                    </div>
                </div>   
            </footer>
    </body>
</html>

