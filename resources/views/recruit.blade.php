@vite(['public/css/recruit.css'])

@extends('layouts.layouts')
@section('content')

<div class="container">
    <div class="page_title">
        <h1><a href="{{route('recruit')}}">採用について</a></h1>
    </div>

    <div class="contents">
        <div class="sub_title_wrap">
            <h1 class="sub_title">募集要項</h1>
        </div>

        <div class="recruit_table">
            <table>
                <tr>
                    <th>職種</th>
                        <td>
                            <ul>
                                <li>ITエンジニア</li>
                            </ul>
                        </td>
                    </ul>
                </tr>
                <tr>
                    <th>選考</th>
                    <td>
                        <ul>
                            <li>学歴不問・第二新卒歓迎、職種・業種未経験歓迎。</li>
                            <li>社会人経験、前職の雇用形態は不問です。ブランクのある方・フリーターの方も歓迎します。</li>
                            <li>入社時点で必要な経験・スキル・資格などはありません。どなたもご応募いただけます。</li>
                            <li>未経験から成長したいという意欲やポテンシャルを重視した選考です。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>雇用形態</th>
                    <td>
                        <ul>
                            <li>正社員</li>
                            <li>試用期間6カ月は契約社員（スキルやキャリアに応じて試用期間短縮あり）</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>勤務地</th>
                    <td>
                        <ul>
                        <li>大阪府内、もしくは近郊のプロジェクト先。</li>
                        <li>勤務地は希望を考慮のうえ決定いたします。</li>
                        <li>エンジニアデビュー後はテレワーク勤務が可能です。</li>
                        <li>エンジニア社員の初期期間は経験を積むために関東勤務のケースもあります。</li><br>
                        <li>【本社】</li>
                        <li>大阪府門真市三ツ島5-6-24川相商事ビル4F</li>
                        <li>OsakaMetro長堀鶴見緑地線「門真南駅」より徒歩11分</li>

                        <li>【心斎橋オフィス】</li>
                        <li>大阪市中央区南船場3-1-7日宝東心斎橋ビル3F</li><br>

                        <li>当社は全国より受け入れ可能です</li>
                        <li>地方から大阪へ来る場合は、「引っ越し手当」「住宅手当」を支給いたします。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>勤務時間</th>
                    <td>
                        <ul>
                            <li>8:30～17:30（実働8時間/休憩1時間）※プロジェクト先によって多少前後します。</li>
                            <li>残業は月20時間以内です。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>給与</th>
                    <td>
                        <ul>
                        <li>年俸制320万円＋賞与年2回＋各種手当</li>
                        <li>年俸の1／12を月々支給いたします。</li>
                        <li>固定残業代は、時間外労働の有無に関わらず30時間分を、月47,250円～支給します。</li>
                        <li>上記を超える時間外労働分は追加で支給。</li>
                        <li>※6ヶ月の試用期間中は「月給19万2000円以上」となります。</li><br>
                        
                        <li>年収例</li>
                        <li>336万円（22歳・入社2年）</li>
                        <li>462万円（25歳・入社3年）</li>
                        <li>812万円（40歳・入社8年）</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>休日休暇</th>
                    <td>
                        <ul>
                            <li>完全週休二日制（土日祝）</li>
                            <li>※その他の休暇制度や社会保険は福利厚生ページを参照ください。</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection