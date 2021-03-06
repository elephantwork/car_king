<?php
$webUrl = "https://events.storm.mg/campaign/vehicleking/";
$fbShareUrl = $webUrl;
$fbi = '';
if (isset($_GET['fbi'])){
	$fbi = $_GET["fbi"];
}
switch ($fbi){
	case '1':
	case '2':
	case '3':
	case '4':
		$fbShareUrl = $fbShareUrl . "assets/images/share_" . $fbi . ".png";
		break;
	default:
		$fbShareUrl = $fbShareUrl . "kv_share.png";
		break;
}
?>
<!DOCTYPE html>
<html lang="cmn-Hant">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
<meta http-equiv="Expires" content="Fri, 16 Feb 2021 23:00:00 GMT" />
<meta http-equiv="last-modified" content="Fri, 16 Feb 2021 23:00:00 GMT"/>
<title>汽車知識王 ｜檢視你與未來移動的距離 - 風傳媒</title>
<link rel="icon" href="https://www.storm.mg/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="./assets/vendors/swiper/swiper.min.css" media="all" />
<!-- Search Engine -->
<meta name="keywords" content="Kia、EV6、Sportage、電動車、未來移動、充電樁、移動啟發人心、移動服務、台灣森那美起亞、李昌益" />
<meta name="description" content="當車不再只是一台車，而是生活的啟發，該如何做個聰明的未來移動家？用一首歌的時間，檢視你與未來移動的距離，是一步之差還是一圈地球之差！" />
<meta name="keywords" content="Kia、EV6、Sportage、電動車、未來移動、充電樁、移動啟發人心、移動服務、台灣森那美起亞、李昌益"/>
<meta name="author" content="Storm.mg">
<!-- Schema.org for Google -->
<meta itemprop="name" content="汽車知識王 ｜檢視你與未來移動的距離">
<meta itemprop="description" content="當車不再只是一台車，而是生活的啟發，該如何做個聰明的未來移動家？用一首歌的時間，檢視你與未來移動的距離，是一步之差還是一圈地球之差！">
<meta itemprop="image" content="<?= $fbShareUrl ?>">
<!-- Open Graph general -->
<meta property="fb:app_id" content="917307478388825" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="風傳媒" />
<meta property="og:title" content="汽車知識王 ｜檢視你與未來移動的距離"/>
<meta property="og:description" content="當車不再只是一台車，而是生活的啟發，該如何做個聰明的未來移動家？用一首歌的時間，檢視你與未來移動的距離，是一步之差還是一圈地球之差！" />
<meta property="og:image" content="<?= $fbShareUrl ?>" />
<!--[if lt IE 9]>
    <script src="./assets/js/html5.js"></script>
    <script src="./assets/js/respond.js"></script>
    <script src="./assets/js/css3-mediaqueries.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58197782-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-58197782-2');
</script>
<script src='//www.storm.mg/js/core/tracking.js?_v=1'></script>
<script src='//www.storm.mg/js/core/smg.js?_v=1'></script>
<script src='//www.storm.mg/js/core/unidata.js?_v=1'></script></head>
<body id="top">
    <div class="outwrapper" id="wrapper">
        <header id="header" style="display: none">
            <div class="logo"><a href="https://www.storm.mg/" target="_blank"><img src="./assets/images/logo.svg" alt="風傳媒"></a></div>
        </header>
        <main class="maincontent">
            <div class="home">
                <section class="section is-intro" data-anchor="intro" id="intro">
                    <div class="container is-fullwidth">
                        <div class="mainbanner">
                            <h1><img class="mainbanner--img" src="./assets/images/kv@2x.png" width="686" height="496" alt="汽車知識王"></h1>
                        </div>
                        <div class="mainheader">
                            <header class="mainheader--headline">
                                <img src="./assets/images/star.svg" alt="汽車知識王-檢視你與未來移動的距離">
                                <h2>汽車革命時代來臨<small>你與未來移動的距離有多近</small></h2>
                            </header>
                            <div class="mainheader--description">
                                <p>當車不再只是交通工具，而是帶給生活的啟發，<br class="is-mobile"/>如何做個聰明的未來移動家？<br />檢視你與未來移動的距離<br class="is-mobile"/>是一步之差還是一圈地球之差！</p>
                            </div>
                            <div class="buttons is-centered action-buttons sbtn">
                                <a href="#section-qa" type="button" class="button is-rounded" id="start-btn">開始測驗</a>
                            </div>
                        </div>
                        <img src="./assets/photo/GlacialWhitePearl_swp_00048.png" class="nq5" width="" height="" alt="NQ5">
                        <img src="./assets/photo/kia-ev6-gtl-my22-du3yachtblue-20_0013.png" class="ev6" width="" height="" alt="EV6">
                    </div>
                </section>
                <section class="section is-qa" data-anchor="qa-game" id="section-qa">
                    <div class="container is-game scroll-style show-on-scroll active">
                        <div class="qa-game">
                            <div class="qa-tag" id="qa-topic"></div>
                            <div id="qa-content">
                                <h3 class="question qa-title"><strong class="num"></strong></h3>
                                <ul class="content options">
                                </ul>
                                <div class="qa-total">
                                    <p>第 <span id="tip-num">1</span> 題，<small>共 9 題</small></p>
                                </div>
                                <div class="title qa-tips-btn" id="btn-tips"><i class="icon-arrow-down"></i>點我看提示</div>
                            </div>
                            <div class="tips qa-tips" id="tips-wrap">
                                <div class="tips-content">
                                    <img src="./assets/images/MaterialSymbolsTipsAndUpdatesOutline.svg" width="32" alt="tips">
                                    <div id="tips-text"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 完成測驗出現填寫資料區 -->
                        <div class="qa-form">
                            <header class="section-headline">
                                <h2 class="section-title">闖關成功</h2>
                                <h3>填寫資料抽好禮 <small>（請確實填寫以利收到中獎資訊喔！）</small></h3>
                            </header>
                            <form action="" name="formresult" id="form-result" onsubmit="return chk();">
                                <input type="hidden" name="csn" value="0">
                                <div class="content">
                                    <div class="field">
                                        <label for="fullname" class="label is-small">姓名</label>
                                        <input type="text" class="input" id="fullname" name="names" placeholder="請填寫與身份證上相同姓名" required autofocus />
                                    </div>
                                    <div class="field">
                                        <label for="phone" class="label is-small">手機</label>
                                        <input type="tel" class="input" id="phone" name="tel" pattern="^09[0-9]{8}" inputmode="numeric" placeholder="請確認手機正確及有效" required />
                                    </div>
                                    <div class="field">
                                        <label for="email" class="label is-small">信箱</label>
                                        <input type="text" class="input" id="email" name="email" placeholder="請確認信箱正確及有效" inputmode="email" required />
                                    </div>
                                    <div class="fidle is-address">
                                        <label for="address" class="label is-small">收件地址</label>
                                        <div class="is-flexbox" id="twzipcode">
                                            <div data-role="county"></div>
                                            <div data-role="district"></div>
                                            <div data-role="zipcode"></div>
                                        </div>
                                        <input type="text" class="input" name="address" required />
                                    </div>
                                    <div class="field privacy">
                                        <label for="privacy" class="inside-label style-checkbox"><input type="checkbox" id="privacy" name="privacy" value="privacy" checked><span class="checkvalue">我已詳閱並同意</span><span class="checkmark"></span></label>
                                        <button type="button" class="button is-text privacyButton">活動辦法與相關規則</button>
                                    </div>
                                </div>
                                <input type="hidden" id="score" name="score" value="0">
                                <div class="buttons is-centered"><button type="submit" class="button is-link is-fullwidth">送出</button></div>
                            </form>
                        </div>
                        <script type="text/javascript">
                          var submintcount=0
                          function chk()
                          {
                                if($('input[name=names]').val()==''){alert("請輸入姓名");return false;}
                                if($('input[name=tel]').val()==''){alert("請輸入電話");return false;}
                                if($('input[name=email]').val()==''){alert("請輸入email");return false;}
                                if($('select[name=county]').val()==''){alert("請選擇縣市");return false;}
                                if($('input[name=address]').val()==''){alert("請輸入地址");return false;}
                                if ('privacy' == $('input[name=privacy]:checked').val()) {} else {alert('請同意個資蒐集前告知事項！');return false;}
                                if(submintcount==0)
                                {
                                    submintcount = 1;

                                    $.ajax({
                                        url: "https://vehicleking.somee.com/api/users",
                                        type: "post",
                                        data: JSON.stringify({
                                            name: $('input[name=names]').val(),
                                            phone: $('input[name=tel]').val(),
                                            email: $('input[name=email]').val(),
                                            county: $('select[name=county]').val(),
                                            district: $('select[name=district]').val(),
                                            zipcode: $('input[name=zipcode]').val(),
                                            address: $('input[name=address]').val(),
                                            score: $('input[name=score]').val()
                                        }),
                                        contentType: "application/json; charset=utf-8",
                                        dataType: "json",
                                        success: function (e) {
                                        },
                                        statusCode: {
                                            201: function (data) {
                                                submintcount = 0;
                                                showFinish();
                                            }
                                        },
                                        error: function () {
                                        }
                                    });
                                }
                            return false;
                          }
                        </script>
                    </div>
                    <!-- 送出抽獎資料後出現品牌介紹區 -->
                    <div class="brand" id="section-brand">
                        <div class="container is-fullwidth is-parallax">
                            <div class="content">
                                <h2>移動 ･ 啟發人心</h2>
                                <p>Kia 相信移動可以激發靈感。</p>
                                <p>當我們移動時，會看見世界不同的樣貌，會得到新體驗、遇到新朋友，得到新的觀點，進而受到啟發。</p>
                                <p>75 年來，Kia 致力於讓人們可以順利移動。</p>
                                <p>使人們自由往來各處、人與人之間能更容易的連結，也讓彼此的身心靈沒有距離。</p>
                                <p>所以為您打造了專屬於您的移動空間，讓您擁有更多時間獲得啟發，實現所想。</p>
                                <p>Kia 提供更有意義且便利的服務，讓您有時間從事能獲得靈感的活動，和家人或朋友一同出遊或是純粹放鬆。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 送出抽獎資料後出現測驗結果-->
                    <div class="container is-form scroll-style show-on-scroll">
                        <div class="qa-finish" id="qa-finish-wrap">
                            <header class="section-headline">
                                <h2 class="section-title">測驗結果</h2>
                            </header>
                            <div class="qa-result">
                                <div class="pic">
                                    <img src="./assets/images/qa-distance4.png" id="rpic" alt="" loading="lazy">
                                </div>
                                <div class="result">
                                    <div class="num" id="result-num">100<span>%</span></div>
                                    <div id="result-text"><p>恭喜你！你與未來移動只有一個紅綠燈的距離！</p></div>
                                    <p>不妨到門市預約試乘，親自感受未來移動的魅力！</p>
                                    <a href="https://www.kia.com/tw/shopping-tools/request-a-test-drive.html" target="_blank" class="kia-button">
                                        <svg width="310" height="60">
                                            <defs>
                                                <linearGradient id="grad1">
                                                    <stop offset="0%" stop-color="#05141F"/>
                                                    <stop offset="100%" stop-color="#380575" />
                                                </linearGradient>
                                            </defs>
                                         <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
                                        </svg>
                                        <span>立即試駕體驗</span>
                                    </a>
                                    <div class="share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $webUrl ?>" target="_blank" class="button is-rounded" id="sharefb">分享結果至FB</a>
                                        <a href="https://social-plugins.line.me/lineit/share?url=<?= $webUrl ?>" target="_blank" class="button is-rounded" id="shareline">分享結果至line</a>
                                    </div>
                                </div>
                                <button type="button" class="button is-rounded is-fullwidth" id="play-button">再玩一次</button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section is-award" data-anchor="award" id="award">
                    <div class="container scroll-style show-on-scroll">
                        <header class="section-headline">
                            <h2><strong>獎項資訊</strong></h2>
                        </header>
                        <div class="award-list">
                            <div class="swiper award-slide">
                                <div class="swiper-wrapper">
                                    <div class="award-list_item swiper-slide">
                                        <div class="award-list_thumb"><img src="./assets/photo/award_1.jpg" width="400" height="400" alt="" loading="lazy"></div>
                                        <div class="award-list_headline">
                                            <div class="brand">1獎 <small>價值 $32,900 元</small></div>
                                            <div class="award">Tumi 黑色旅行箱</div>
                                            <div class="count"><strong>1</strong>名</div>
                                        </div>
                                    </div>
                                    <div class="award-list_item swiper-slide">
                                        <div class="award-list_thumb"><img src="./assets/photo/award_2.jpg" width="400" height="400" alt="" loading="lazy"></div>
                                        <div class="award-list_headline">
                                            <div class="brand">2獎 <small>價值 $18,900 元</small></div>
                                            <div class="award">Tumi 黑色後背包</div>
                                            <div class="count"><strong>1</strong>名</div>
                                        </div>
                                    </div>
                                    <div class="award-list_item swiper-slide">
                                        <div class="award-list_thumb"><img src="./assets/photo/award_3.jpg" width="400" height="400" alt="" loading="lazy"></div>
                                        <div class="award-list_headline">
                                            <div class="brand">3獎 <small>價值 $12,990 元</small></div>
                                            <div class="award">Mio MiVue R850D 星光級 HDR 數位防眩 WIFI GPS 電子後視鏡</div>
                                            <div class="count"><strong>4</strong>名</div>
                                        </div>
                                    </div>
                                    <div class="award-list_item swiper-slide">
                                        <div class="award-list_thumb"><img src="./assets/photo/award_4.jpg" width="400" height="400" alt="" loading="lazy"></div>
                                        <div class="award-list_headline">
                                            <div class="brand">4獎</div>
                                            <div class="award">遠東SOGO $5,000 元禮券</div>
                                            <div class="count">共<strong>3</strong>名</div>
                                        </div>
                                    </div>
                                    <div class="award-list_item swiper-slide">
                                        <div class="award-list_thumb"><img src="./assets/photo/award_5.jpg" width="400" height="400" alt="" loading="lazy"></div>
                                        <div class="award-list_headline">
                                            <div class="brand">5獎</div>
                                            <div class="award">統一超商 $1,000 元虛擬商品卡</div>
                                            <div class="count">共<strong>5</strong>名</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <img src="./assets/images/gift.png" class="award-list--gift" alt="" loading="lazy">
                        </div>
                        <p>了解更多<button type="button" class="button is-text privacyButton">活動辦法與相關規範</button><br>主辦單位保有最終修改、變更、活動解釋及取消本活動之權利，若有相關異動將公布於網站，恕不另行通知</p>
                    </div>
                </section>
                <section class="section is-film" data-anchor="film" id="film">
                    <div class="container scroll-style show-on-scroll">
                        <header class="section-headline">
                            <h2>影音專區</h2>
                        </header>
                        <div class="film-list">
                            <div class="swiper film-slide">
                                <div class="swiper-wrapper">
                                    <div class="film-item swiper-slide">
                                        <div class="videocontainer">
                                            <video controls loading="lazy" poster="./assets/film/TheKiaEV6-TVC_1.jpg">
                                                <source src="./assets/film/TheKiaEV6-TVC_1.mp4" type="video/webm">
                                                <source src="./assets/film/TheKiaEV6-TVC_1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <p>Kia EV6</p>
                                    </div>
                                    <div class="film-item swiper-slide">
                                        <div class="videocontainer">
                                            <video controls loading="lazy" poster="./assets/film/TheKiaEV6-TVC-charging_1.jpg">
                                                <source src="./assets/film/TheKiaEV6-TVC-charging_1.webm" type="video/webm">
                                                <source src="./assets/film/TheKiaEV6-TVC-charging_1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <p>Kia EV6 charging</p>
                                    </div>
                                    <div class="film-item swiper-slide">
                                        <div class="videocontainer">
                                            <video controls loading="lazy" poster="./assets/film/TheSportage_1.jpg">
                                                <source src="./assets/film/TheSportage_1.webm" type="video/webm">
                                                <source src="./assets/film/TheSportage_1.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                        <p>Kia Sportage</p>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section is-article" data-anchor="article" id="article">
                    <div class="container scroll-style show-on-scroll">
                        <header class="section-headline">
                            <h2><span>相</span><span>關</span><span>新</span>聞</h2>
                        </header>
                        <div class="news-list">
                            <div class="swiper news-slide news-uxy" data-type=".uxy">
                                <div class="swiper-wrapper">
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/lifestyle/4378831" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20220614-024412_U8366_M769698_1c5c.jpeg" width="350" height="233" loading="lazy" alt="前瞻．創新格局 Kia Sportage"></div>
                                            <div class="title">前瞻．創新格局 Kia Sportage</div>
                                            <p>從流行音樂、電視劇、綜藝節目、流行時尚乃至於電影，「韓流」不僅在台灣持續風靡，同時也席捲國際。實際上，韓國汽車工業已達到全球汽車產業排名第五，品牌與產品實力已躋身國際車壇。Kia 於 2021 年宣布更換全新品牌識別，以品牌精神「Movement that inspires.移動．啟發人心」搭配極簡的 Logo 設計，透過前瞻創新的產品力帶給消費者耳目一新的感受。The Sportage身為 Kia 品牌在進口休旅級距的重要車款，以前瞻的全方位實力，突破既定進口休旅框架，開創自我新局。於上市首週接單便突破 800 台，顯見 The Sportage 獨到的產品魅力，勢將成為全面提升 Kia 品牌質與量的重要角色。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/stylish/4372161" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20220609-045910_U20895_M768905_2d98.jpeg" width="350" height="233" loading="lazy" alt="創Kia歷史銷售紀錄！進口極致休旅Kia The Sportage預售即破800台"></div>
                                            <div class="title">創 Kia 歷史銷售紀錄！進口極致休旅 Kia The Sportage 預售即破 800 台</div>
                                            <p>Kia台灣森那美起亞秉持全新品牌精神 「Movement that inspires移動．啟發人心」，持續導入新世代車款滿足國內消費者需求，而全新世代的 Kia The Sportage更以前所未見的「前瞻‧創新格局」的定位，在台灣競爭激烈的休旅市場中，全面開創休旅級距的嶄新視野。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/article/4098896" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20211214-062620_U8366_M733005_3387.jpeg" width="350" height="233" loading="lazy" alt="電動車的 50% 力學優勢和 75% 美學魅力 李昌益：車內功能像客廳"></div>
                                            <div class="title">電動車的 50% 力學優勢和 75% 美學魅力 李昌益：車內功能像客廳</div>
                                            <p>電動車的具像和功能愈來愈清晰。Kia 總代理森那美起亞汽車總裁李昌益說，電動車在力學、美學和哲學都是革命性的進展，例如能源成本減少 50%，零件減少 50%，人用空間增加 75%，大量數據和影音元素進駐，車內功能像客廳，在車上是生活，不再只是移動。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/stylish/4099590" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20211214-015017_U8366_M732818_aa04.jpeg" width="350" height="233" loading="lazy" alt="Movement that inspires 移動．啟發人心 Kia 全面革新，邁入品牌全新紀元"></div>
                                            <div class="title">Movement that inspires 移動．啟發人心 Kia 全面革新，邁入品牌全新紀元</div>
                                            <p>回顧 2021 年，Kia 在國內汽車市場繳出了一張亮眼的成績單，累計1-11月乘用車全車系銷售訂單，不僅已突破 4,000 台，更以年成長率近40%達成歷史新高的銷售紀錄！面對即將迎來的2022 年，Kia 總代理台灣森那美起亞在今日(13日)於台北流行音樂中心文化館，舉辦「Kia 品牌新紀元暨EV6全台首現」記者會，正式宣告 Kia 將以品牌為核心，從產品、通路、銷售、售後服務與消費者體驗等，全面革新，邁入品牌嶄新紀元！</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/article/3992457" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20211014-022047_U4040_M719018_572a.jpeg" width="350" height="233" loading="lazy" alt="風傳媒高峰論壇》「轉不過來就等著被淘汰」　Kia李昌益：電動車追上油車還要 10 到 15 年"></div>
                                            <div class="title">風傳媒高峰論壇》「轉不過來就等著被淘汰」　Kia 李昌益：電動車追上油車還要 10 到 15 年</div>
                                            <p>在全球減碳巨浪席捲下，各行各業都將進入全新賽局，宛如韓國影集《魷魚遊戲》的內容般，一旦被淘汰，恐怕就得「出局」了。Kia（起亞）總代理台灣森那美起亞總裁李昌益參加《風傳媒》所舉辦的「減碳未來式：趨勢與挑戰」高峰論壇時，借鑑當年智慧型手機崛起的經驗，直言汽車產業正面臨品牌轉型的關鍵期，「如果你轉不過來，那你就必須被淘汰。」</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/article/3983252" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20210930-012600_U18448_M716110_fe08.jpeg" width="350" height="233" loading="lazy" alt="「快充 5 分鐘跑 1 百公里，只有保時捷、特斯拉跟我們！」Kia 總裁：電動車非做不可"></div>
                                            <div class="title">「快充 5 分鐘跑 1 百公里，只有保時捷、特斯拉跟我們！」Kia 總裁：電動車非做不可</div>
                                            <p>全球氣候變遷議題持續升溫，環保大刀近期開始指向汽車產業。日前，德國環保團體大動作對 Mercedes-Benz（戴姆勒）、BMW 提告，認為兩大車廠在減碳作為上未盡全力，外傳福斯集團（Volkswagen）也面臨類似窘境；相關消息在業界宛如海平面底下的深水炸彈爆開，一股因「減碳」而起的暗潮逐漸洶湧。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/article/3819922" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20210716-043355_U4040_M701410_6fbf.jpeg" width="350" height="233" loading="lazy" alt="風傳媒線上論壇》電動車光靠硬體賺不了錢　李昌益：要把眼光放在移動「前中後需求」"></div>
                                            <div class="title">風傳媒線上論壇》電動車光靠硬體賺不了錢　李昌益：要把眼光放在移動「前中後需求」</div>
                                            <p>全球電動車大戰方興未艾，傳統車廠的轉型腳步不一，對此，Kia 總代理台灣森那美起亞總裁李昌益今天受邀擔任《風傳媒》線上論壇「電動車 2025 黃金交叉｜全面解密」講者，以自身超過 25 年的經驗，分享個中關鍵，以及未來因應之道。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/article/3804403" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20210709-034158_U22660_M699949_384d.png" width="350" height="233" loading="lazy" alt="專訪》電動車普及化「三大難題」　Kia李昌益點名關鍵角色"></div>
                                            <div class="title">專訪》電動車普及化「三大難題」　Kia 李昌益點名關鍵角色</div>
                                            <p>在全球減碳共識下，各國紛紛定出禁售燃油車時程，電動車因此崛起，有專家預估，未來十年內，電動車在先進國家的銷售占比可望與燃油車出現「黃金交叉」，2040 年全球產值更上看2.1兆美元，是智慧型手機的 2.3 倍，在如此不可逆的趨勢下，一波五十年一遇的產業革命正悄悄展開。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/lifestyle/3819216" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20210716-034625_U4040_M701329_e90d.jpeg" width="350" height="233" loading="lazy" alt="風傳媒線上論壇》前瞻趨勢、權威觀點，帶你看見2025電動車大未來"></div>
                                            <div class="title">風傳媒線上論壇》前瞻趨勢、權威觀點，帶你看見 2025 電動車大未來</div>
                                            <p>疫情後的新世界，將會長什麼模樣？在特斯拉掀起產業革命後，電動車不僅是全球各大車廠爭相投入的未來車種，在各國政府眼中，它也是未來經濟必不可缺少，甚至有機會讓相關產業翻轉再成長的關鍵字。</p>
                                        </a>
                                    </div>
                                    <div class="news-content swiper-slide">
                                        <a href="https://www.storm.mg/lifestyle/4112158" class="link" target="_blank">
                                            <div class="cover"><img src="./assets/photo/20210421-052933_U1085_M685435_b4f0.jpeg" width="350" height="233" loading="lazy" alt="未來 5 年市場成長將近5倍！全球商用電動車熱烘烘，台廠如何切入搶商機？"></div>
                                            <div class="title">未來 5 年市場成長將近5倍！全球商用電動車熱烘烘，台廠如何切入搶商機？</div>
                                            <p>近年電動車產業蓬勃發展，成為市場最熱門的話題，其中商機大有可為，商用電動車市場預計將在 2026 年成長至 2529.7 億美元，比起 2020 年高出將近 5 倍。勤業眾信聯合會計師事務所鼓勵台灣相關業者，著重於最後一哩路的綠色布局，掌握市場需求及關鍵技術，藉此跟上綠色轉型所帶來的商機。</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section is-partner" data-anchor="partner" id="partner">
                    <div class="container">
                        <div class="partner-wrapper">
                            <div class="partner-items">
                                <h3 class="headtitle">主辦單位</h3>
                                <ul class="partner-list">
                                    <li><a href="https://www.storm.mg/" target="_blank"><img src="./assets/images/logo.svg" alt="風傳媒"></a></li>
                                    <!--                                    <li><img class="setheight" src="./assets/images/logos_8.png" alt="下班經濟學"></li>-->
                                </ul>
                            </div>
                            <div class="partner-items">
                                <h3 class="headtitle">協辦單位</h3>
                                <ul class="partner-list">
                                    <li><a href="https://www.kia.com.tw/" target="_blank"><img src="./assets/images/kia.svg" alt="Kia"></a></li>
                                </ul>
                            </div>
                            <div class="partner-items">
                                <h3 class="headtitle">贊助單位</h3>
                                <ul class="partner-list">
                                    <li><a href="https://tumi-taiwan.tw/" target="_blank"><img src="./assets/images/tumi.svg" alt="Tumi"></a></li>
                                    <li><a href="https://www.mio.com/tw" target="_blank"><img class="setwidth" src="./assets/images/mio.svg" alt="Mio"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
<!--footer-->
<div id="footer">
	<div class="container">
		<div class="footer-slogan">
			<img src="./assets/images/slogan_ch.svg" alt="" class="slogans svg_content" id="slogan_cn" onerror="this.onerror=null; this.src='./assets/images/slogan_ch.png'" data-src="./assets/images/slogan_ch.png">
			<img src="./assets/images/slogan_en.svg" alt="" class="slogans svg_content" id="slogan_en" onerror="this.onerror=null; this.src='./assets/images/slogan_en.png'" data-src="./assets/images/slogan_en.png">
		</div>
		<div class="footer-info">
			<p class="footer-info_contents">地址：114 台北市內湖區瑞光路513巷37號4樓</p>
			<p class="footer-info_contents">電子郵件地址：<a href="mailto:service@storm.mg">service@storm.mg</a></p>
			<p class="footer-info_contents">Copyright © 2021 Storm Media Group All Rights Reserved. ◎未經授權．不得轉載</p>
		</div>
	</div>
</div>
<!--footer-->    </div>
    <div class="overlay modal" id="privacyModal" role="dialog">
        <div class="modal-lightbox" id="speakerone">
            <div class="modal-wrap">
                <div class="modal-content">
                    <button type="button" class="modal-closeButton">
                        <svg class="svgIcon closeButton-icon" viewBox="0 0 32 32" title="Dismiss">
                            <path d="M18.1,16l8.9-8.9c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L16,13.9L7.1,4.9c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l8.9,8.9l-8.9,8.9c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l8.9-8.9l8.9,8.9c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1L18.1,16z"></path>
                        </svg>
                    </button>
                    <div class="modal-body">
                        <h3>活動辦法</h3>
                        <ul>
                            <li>活動時間：即日起至 111 年 8 月 12 日（五）晚上12 點止</li>
                            <li>參加對象：具有中華民國身分證統一編號之自然人</li>
                        </ul>
                        <h3>抽獎說明：</h3>
                        <ol>
                            <li>只要參加汽車知識王測驗活動，完成所有測驗題目後將結果分享至Facebook，並完成資料填寫後成功送出，即可獲得抽獎機會。</li>
                            <li>得獎名單：統一於111年8月19日(五)下午4 點公佈於本網站，獎項於公佈後三周內寄送。</li>
                        </ol>
                        <h3>領獎須知：</h3>
                        <ol>
                            <li>得獎名單將於 111 年 8 月 19 日(五)下午 4 點公布於本網站，亦會透過 E-mail 通知，請務必填寫有效之電子信箱，以免無法收到得獎資訊。</li>
                            <li>若因電話、Ｅmail 更改或不全而導致未收到得獎通知、或獎項遭退回、冒領、遺失者，恕不另行補發。</li>
                            <li>得獎人應確實填寫與身分證上同樣之姓名資料，資料若有不實或違法情事，主辦單位有權取消參加及領獎資格。如有致損害於主辦單位或其他任何第三人，應自負法律責任。若提供資訊不完整，或以私訊方式提供者，恕不受理，亦不另行通知。</li>
                            <li>本活動獎項為機會中獎，得獎人須依我國稅法規定負擔稅額，若未能依法繳納應繳稅額，即視為喪失得獎資格。</li>
                            <li>依中華民國所得稅法第 14 條第 1 項第 8 類之競技、競賽及機會中獎之獎金或給與，依同法第 88 條規定，應由扣繳義務人於給付時按中獎人身分辦理扣繳。每人單次得獎獎項市價超過新台幣 1,000 元(含)以上者，活動執行單位依法申報得獎人所得，得獎人須依規定填寫並繳交相關中獎文件。中獎獎項金額超過新台幣 20,000 元(含)以上者，需依法負擔 10% 機會中獎所得稅，本公司將對得獎者製發扣繳憑單。</li>
                            <li>5 獎「統一超商 1,000 元虛擬商品卡」，及 4 獎「遠東SOGO 5,000 元禮券」將於 111 年9 月2日前透過 E-mail 寄送兌換序號至中獎者之信箱，收到後即可透過信件上之兌換連結進行兌換。</li>
                            <li>3 獎「Mio MiVue R850D 星光級 HDR 數位防眩 WIFI GPS 電子後視鏡 」、2 獎「Tumi黑色後背包」及 1 獎「Tumi黑色旅行箱」等獎項，會由專人聯絡確認得獎者之收件地址及相關資料，也會同步以電子信箱通知，如於111年8月31日中午12 點前未能聯繫到 1 獎、2 獎、3 獎之得獎者，將會再通知 1 次，若 111 年 9 月 7 日中午 12 點前還未能取得聯繫，視同得獎者放棄獎項。</li>
                            <li>1 獎「Tumi黑色旅行箱」需依規定填寫並繳交相關中獎文件，並依法負擔 10% 機會中獎所得稅，需預先扣繳新台幣 NT.2,690 元，匯款至國風傳媒有限公司之帳戶方能領獎。</li>
                            <li>本活動獎項數量、內容、規格與顏色以實物為準，獎項均不得轉換、轉讓或折換現金。主辦單位保留更換等値獎項之權利。</li>
                            <li>本活動獎品寄送地區僅限台澎金馬、蘭嶼、綠島，主辦單位不處理郵寄獎品至海外地區之事宜。所有獎品在郵寄貨運送過程中，非主辦單位過失所造成之毀壞、遲遞、錯遞或遺失，主辦單位恕不負責。</li>
                            <li>如未收到活動獎品， 請於 111 年 10 月 31 日前寄信至 emily.chang@storm.mg 信箱或致電客服電話 02-7711-3886 分機 1624 張小姐，信件主旨請註明：「汽車知識王活動領獎」，得獎人請提供活動時所填之姓名、電話、電子郵件。</li>
                        </ol>
                        <h3>注意事項：</h3>
                        <ol>
                            <li>本活動適用範圍限台灣、金門、馬祖、澎湖等地區。</li>
                            <li>參加者需確實填寫聯絡資料，若填寫不完整或不實，主辦單位有權取消中獎資格，不另行通知。若因得獎者資料填寫錯誤，導致獎項兌換碼寄送錯誤，主辦單位恕不補發。</li>
                            <li>得獎者應保證所提供的資料皆為真實，且並未冒用或盜用任何第三人之資料，如冒用或盜用任何第三人資料之法律責任，應自行負責，概與主辦單位無關。</li>
                            <li>同一人僅限以一組電話號碼參加本活動，經檢舉或查證參加者有直接或間接以不正常之手法進行影響本活動公正性或正常運作之行為，主辦單位有權取消抽獎資格，不得有異議。</li>
                            <li>嚴格禁止任何介入、侵入或損害網路系統或資源之行為。</li>
                            <li>嚴格禁止散布電腦病毒。</li>
                            <li>對本活動有任何疑問，可來信 emily.chang@storm.mg 詢問或致電客服電話 02-7711-3886 分機 1624 張小姐，服務時間：週一~週五 10:00~18:00 (中午12:00~13:30 休息)，例假日及國定假日恕不提供服務。</li>
                            <li>參加者必須遵守本活動相關規範，如有違反者，主辦單位得逕取消其抽獎或得獎資格，並不發給獎項，參加者與得獎者均不得異議。如因違反本活動相關規範造成主辦單位損害者，參加者應賠償主辦單位因此所生之一切損害與費用。</li>
                            <li>本活動如有任何因不可歸責於主辦單位之事由，而使參與本活動者之資料遺失、錯誤、無法辨識或毀損所導致資料無效之情況，主辦單位不負任何責任，參與本活動者或得獎者不得異議。</li>
                            <li>謹依個人資料保護法第 8 條規定告知以下事項:
                                <ol>
                                    <li>(1) 蒐集公司及目的:由國風傳媒處理網路報名、身分確認、客戶管理、聯絡及相關資訊提供。</li>
                                    <li>(2) 若已詳閱並同意活動辦法與相關規則，主辦單位及協辦單位將可使用mail、傳真、電話、簡訊、郵寄或其他公告方式使用您所提供之個人資料。</li>
                                    <li>(3) 個人資料類別:姓名、行動電話、電子郵件地址、收件地址。</li>
                                    <li>(4) 個人資料利用期間:國風傳媒有限公司營運期間。</li>
                                    <li>(5) 個人資料利用地區:台灣地區(含離島,即中華民國境內)。</li>
                                    <li>(6) 利用對象及方式:您的個人資料將由國風傳媒有限公司在 第 1 項所列範圍內予以利用。如您有依個資法第三條或其他需服務之處，得致電國風傳媒有限公司客服中心電話 (02) 7711-3886 請求協助，國風傳媒有限公司地址為台北市內湖區瑞光路 513 巷 37 號 4 樓，客服信箱 service@storm.mg。</li>
                                    <li>(7) 您享有個資法第 3 條之權利:查詢或請求閱覽、請求製給複製本、請求補充或更正、請求停止蒐集、處理或利用。</li>
                                    <li>(8) 若您未完整提供個人姓名與聯絡電話，將無法享有參與此次活動的服務。</li>
                                </ol>
                            </li>
                            <li>本活動相關注意事項，如有疑義或爭議，主辦單位有最終解釋權及決定權，且保留對本活動之參加資格、得獎資格等最後審核權。本活動注意事項如有未盡事宜，主辦單位得隨時補充、修正或更新之，且以官網最新公告為主，主辦單位得隨時取消、終止、修改或暫停本活動。</li>
                            <li>本活動相關規範均適用中華民國法令，參與本活動者與得獎者同意，倘若因本活動相關規範或參與本活動產生任何糾紛時，與主辦單位或本活動執行單位合意以台灣台北地方法院為第一審管轄法院。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script type="text/javascript" src="./assets/vendors/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/vendors/jquery.twzipcode.min.js"></script>
    <script type="text/javascript" src="./assets/js/Script.js"></script>
    <!-- Head ScrollUp fixed-->
    <script type="text/javascript" src="./assets/vendors/show-on-scroll.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.privacyButton').click(function() {
                $('#privacyModal').addClass('in').show();
                $('.modal-lightbox').addClass("active").show().animate({
                    "top": "0"
                }, 100);
            });

            $('.modal-closeButton').click(function() {
                $('#privacyModal').removeClass('in').hide();
                $('.modal-lightbox').removeClass("active").hide().animate({
                    "top": "400%"
                }, 100);
            });
            $('.modal-body, .button-next, .button-prev').click(function(event) {
                event.stopPropagation();
            });
        });
    </script>
    <!-- Swiper JS -->
    <script type="text/javascript" src="./assets/vendors/swiper/swiper.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper(".news-slide", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
            },
        });
    </script>
    <script type="text/javascript">
        var swiper = new Swiper(".award-slide", {
            slidesPerView: 2,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
            },
        });
    </script>
    <script type="text/javascript">
        var swiper = new Swiper(".film-slide", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!-- google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58197782-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-58197782-2');
    </script>
</body>
</html>