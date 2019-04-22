@extends('layout')
@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>Q & A</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <div class="accordion-content-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <!-- Start Accordion Element #01 -->
                    <div class="accordion-element-1">
                        <div class="restaurant-why-us-accordion" id="accordionOne">
                            <!-- Start Accordion item #01 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                        <span>01.</span> 藝術作品碼是做什麼用的?
                                    </h3>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>做為藝術作品在應用與網路世界的共有可追溯具有指向性之通用代碼，並將其紀錄於區塊鏈上讓藝術創作者與大眾可以透過在區塊鏈交易記錄不可竄改之特性，追本溯源查詢到關於創作者、作品、創作年代等資訊，「藝術作品資源識別碼」能協助藝術相關產業鏈上不同角色清晰地辨認出所指向的作品。</p>

<p>「透過對藝術作品建立「作品碼 ARI 」為未來與應用有更多想像之前提供了墊腳基石」</p>

<p>這個實驗專案透過在讓藝術家申請藝術作品碼ARI的過程，讓作品在市場與網際網路中有對其作品的指向性，並同時保有各種詮釋的可能。<br>
同時能在一個去中心化架構下能讓大家「信任」其作品名冊（帳本），透過第三方服務示範應用於藝術交易，同時也對其作品名冊也保有開放性與延展性，讓未來第三方服務與單位能延續與持續研究與表述的可能。
</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #02 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 data-toggle="collapse" data-target="#collapseTwo">
                                        <span>02.</span>誰需要申請?
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>作者的特質（藝術家）、學術的詮釋（藝術相關研究討論者）、公共的參與（收藏、藝術資料多元提供者）透過API串接，建立第三方應用的藝術生態圈。<br>目前實踐計劃為邀請制，系統存放資料會產生相對費用，本專案以實驗為目的，目前規劃屬於非盈利，由官方吸收存入乙太網的費用。</p>
                                        <p><ul><li> <strong>藝術電商 Artsozaii Art Gallery</strong></li>
                                            <p>建立消費者對線上電商信任的可能性
藝術作品 內容資料，作品只需透過 ARI的登錄指向，進一步在藝術品物流上面，也以此唯一碼做為辨識的依據，建立消費者對線上電商的信任關係。</p>

                                            <li><strong>美術博物館組織</strong></li>
                                            <p>更容易了解作品與藝術家的脈絡，多元應用於不同傳播體驗的可能性
不同類型的美術館，專題或典藏之策展內容，引用 藝術家或創作者，與作品的ARI，條目編冊！網站內容作品或是導覽，更方便策展者可以進一步朔源作品與創作者藝術家的脈絡，延伸不同數位應用上。
</p>
                                            <li><strong>藝廊</strong></li>
                                            <p>面對藝術品膺品的另一種詮釋的可能性
藏家與藝術作品 內容資料都還是保存在 自己的Server上面; 藏家資料可有選擇性 做ARI的登錄指向。
</p>
                                            <li><strong>藝術媒體與評論研究機構</strong></li>
                                            <p>建立藝術年史資料庫的可能性
藝術作品 內容資料，作品只需透過 ARI的登錄指向，藝術家與作品各時間點的脈絡，藝文研究上更容易取得。
實驗計畫進行方式：
</p></p>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <!-- Start Accordion item #03 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 data-toggle="collapse" data-target="#collapseThree">
                                        <span>03.</span> 什麼是作品帳冊
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>「作品名冊建立規則」參考以現有地政事務所對於地產物業管理的架構為雛形發展，建立作品名冊。<br>
現有地政模式參考其標示部：指其財產的基本資料，例如座落地點，地號，面積大小。所有權部：指其地產的所有權歸屬。其他項權利部：指其財產的抵押權設定等等 <br>
參考土地登記規則：https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=D0060003<br><br></p>

<p>傳統財產以地籍圖因應真偽辨識等問題，但他具有不易變動等特性，而藝術創作作品有真偽，冒名，等可能性；我們特別預留一個欄位＃查核，設計上因應未來官方或職業收藏，典藏計畫，第三方專業鑑別做註記（這次不會啟用）邏輯上我們設計為四層，請參見如下<br></p>
<p>
<ul>
<li>A 標示：申請文件＋對應備存原始檔案指紋碼 (Hash)</li>
<li>B 所有權：所有人標記，交易紀錄，合約＋對應備存原始檔案指紋碼 (Hash)</li>
<li>C 查核認證（本次未啟用）：未來提供官方或職業收藏，典藏計畫，第三方專業鑑別做註記＋對應備存原始檔案指紋碼 (Hush)</li>
<li>D 其他 （本次未啟用）：未來各類第三方服務， 研究論述，論文，評論，表述等等應用...........＋對應備存原始檔案指紋碼 (Hash)</li>
</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #04 -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">
                                        <span> 04.</span> 作品帳冊放在那邊？
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>作品名冊存放於開放的乙太鏈中，所有人可直接於乙太鏈上對區塊鏈帳本做查詢詳細可直接見連結 https://www.etherchain.org/ ，系統存放資料會產生相對費用，本專案以實驗為目的，目前規劃屬於非盈利，由官方吸收存入乙太網的費用。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion Element #01 -->

                    <!--
                    <div class="accordion-element-2 mt-80 mt-sm-40">
                        <div class="event-about-accordion" id="accordionTwo">

                            <div class="card">
                                <div class="card-header" id="headingOne2">
                                    <h3 data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true">
                                        General Information
                                        <span class="icons">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    </h3>
                                </div>

                                <div id="collapseOne2" class="collapse show" data-parent="#accordionTwo">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem. Ad his suavitate com plectitur ruis dicant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
@endpush
