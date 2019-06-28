<!--Установленные окна от «Steklopaket5»-->
<style>
    .b-carousel-gallery__nav1 .buttonDesktop {
        display: none;
    }

    .buttonDesktop {
        width: 225px;
        height: 50px;
        position: absolute;
        top: 170px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        left: 520px;
        right: 0;
        margin: 0 auto;
        z-index: 100;
        text-transform: uppercase;
        cursor: pointer;
        font-weight: 700;
        background: linear-gradient(to bottom, #FFEA63, #FED736 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#FFFFEA63, endColorstr=#FFFED736, GradientType=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFEA63', endColorstr='#FFFED736', GradientType=0)";
        border-style: solid;
        border-color: #e3ba1f;
        border-radius: 5px;
        border-width: 0 0 5px;
    }

    .buttonDesktop:hover {
        background: -webkit-gradient(linear, center top, center bottom, from(#f9e357), color-stop(100%, #FED736));
        background: -webkit-linear-gradient(top, #f9e357, #FED736 100%);
        background: linear-gradient(to bottom, #f9e357, #FED736 100%);
        filter: alpha(opacity=90) progid:DXImageTransform.Microsoft.gradient(startColorstr=#f9e357, endColorstr=#FFFED736, GradientType=0);
        -ms-filter: "alpha(opacity=90) progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFEA63', endColorstr='#FFFED736', GradientType=0)";
    }

    .buttonMobile {
        font-size: 12px;
        width: 120px;
        height: 45px;
        position: absolute;
        bottom: 70px;
        color: black;
        display: flex;
        justify-content: center;
        border: solid #00000069 2px;
        align-items: center;
        left: 75px;
        right: 0;
        margin: 0 auto;
        z-index: 100;
        border-radius: 5px;
        text-transform: uppercase;
        cursor: pointer;
        font-weight: 700;
        background-color: #ffe954;
        /* background: linear-gradient(to bottom, #ffec67, #ffd816 100%); */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#FFFFEA63, endColorstr=#FFFED736, GradientType=0);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFEA63', endColorstr='#FFFED736', GradientType=0)";
        /* border-style: solid; */
        /* border-color: #E03B3C; */
        /* border-radius: 5px; */
        /* border-width: 0 0 5px; */
        -webkit-box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.25);
        box-shadow: 1px 2px 4px 0 rgba(0, 0, 0, 0.25);
    }

    /*.buttonMobile:hover{*/
    /*    background: -webkit-gradient(linear, center top, center bottom, from(#f9e357), color-stop(100%, #FED736));*/
    /*    background: -webkit-linear-gradient(top, #f9e357, #FED736 100%);*/
    /*    background: linear-gradient(to bottom, #f9e357, #FED736 100%);*/
    /*    filter: alpha(opacity=90) progid:DXImageTransform.Microsoft.gradient(startColorstr=#f9e357, endColorstr=#FFFED736, GradientType=0);*/
    /*    -ms-filter: "alpha(opacity=90) progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFEA63', endColorstr='#FFFED736', GradientType=0)";*/
    /*}*/

</style>


<!--Дэсктопная версия-->
<section class="b-gallery desktopCalculator installedWindows">
    <div class="b-gallery__header">
        <div style="font-family: BlissB; font-size: 44px; padding: 10px 0 30px; text-align: center; text-shadow: 0 2px 0 rgba(255, 255, 255, 0.75); color: #006599;">
            <? if($title != ''){ echo $title; }else{echo "Выгодные акции на окна";} ?>
        </div>
    </div>
    <div class="b-gallery__carousels">
        <div class="b-carousel-gallery1" data-start="4">
            <ul class="b-carousel__items">





                <li class="b-carousel__item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-1-d-min.png">
                    <div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>
                </li>
                <li class="b-carousel__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-2-d-min.png">
                    <div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>
                </li>
                <li class="b-carousel__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-3-d-min.png">
                    <div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>
                </li>
                <li class="b-carousel__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-4-d-min.png">
                    <div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>
                </li>
                <!--                <li class="b-carousel__item"><img src="--><?php //echo get_template_directory_uri() ?>
                <!--/assets/images/windowStocks/offer-5-d-min.png"><div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div></li>-->
                <!--<li class="b-carousel__item"><img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-6-d-min.png"><div class="buttonDesktop js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div></li>-->


            </ul>
            <div class="b-carousel__controls">
                <div class="b-carousel__prev1 icon-prev"></div>
                <div class="b-carousel__next1 icon-next"></div>
            </div>
        </div>
        <div class="b-carousel-gallery__nav1">
            <ul class="b-carousel__items"></ul>
            <div class="clear"></div>
        </div>
    </div>
</section>
<!--Дэсктопная версия-->

<!--Мобильная версия-->
<div class="cf containerCor mobileCalculator ">
    <div>
        <div class="b-profiles__header">Выгодные акции на окна</div>
        <!--<div class="b-profiles__desc">Более 100 видов материалов на выбор</div>-->
    </div>
    <div id="main" role="main">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides gallery  revisionMobile">
                    <li>
                        <div class="b-tabs__block__item">
                            <div class="b-tabs__block__item__img icon-rehau">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-1-m-min.png">
                                    <div class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>


                                    <!--									<div class="b-svyaz__countdown countdown-slider">-->
                                    <!--            <div class="b-countdown countdownHolder">-->
                                    <!--                <div class="b-countdown__date">-->
                                    <!--                    <ul>-->
                                    <!--                        <li class="b-countdown__item  b-countdown__colon">-->
                                    <!--                            <div class="b-countdown__item__bg">-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="b-countdown__input b-countdown-hours">08</div>-->
                                    <!--                            <div class="b-countdown__item__title">Часов</div>-->
                                    <!--                        </li>-->
                                    <!--                        <li class="b-countdown__item  b-countdown__colon">-->
                                    <!--                            <div class="b-countdown__item__bg">-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="b-countdown__input b-countdown-minutes">43</div>-->
                                    <!--                            <div class="b-countdown__item__title">Минут</div>-->
                                    <!--                        </li>-->
                                    <!--                        <li class="b-countdown__item">-->
                                    <!--                            <div class="b-countdown__item__bg">-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                                <div class="b-countdown__item__bg__digit"></div>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="b-countdown__input b-countdown-seconds">06</div>-->
                                    <!--                            <div class="b-countdown__item__title">Секунд</div>-->
                                    <!--                        </li>-->
                                    <!--                    </ul>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="b-tabs__block__item">
                            <div class="b-tabs__block__item__img icon-rehau">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-2-m-min.png">
                                    <div class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="b-tabs__block__item">
                            <div class="b-tabs__block__item__img icon-rehau">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-3-m-min.png">
                                    <div class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>

                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="b-tabs__block__item">
                            <div class="b-tabs__block__item__img icon-rehau">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-4-m-min.png">
                                    <div class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>

                                </a>
                            </div>
                        </div>
                    </li>

                    <!--                    <li>-->
                    <!--                        <div class="b-tabs__block__item">-->
                    <!--                            <div class="b-tabs__block__item__img icon-rehau">-->
                    <!--                                <a href="#">-->
                    <!--                                    <img src="--><?php //echo get_template_directory_uri() ?>
                    <!--/assets/images/windowStocks/offer-5-m-min.png">-->
                    <!--                                    <div class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>-->
                    <!---->
                    <!--                                </a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </li>-->

                    <!--<li>
                        <div class="b-tabs__block__item">
                            <div class="b-tabs__block__item__img icon-rehau">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/windowStocks/offer-6-m-min.png">
                                    <div style="bottom: 85px" class="buttonMobile js-fancy-form" data-header="Заказать расчет" data-target1="okna_podklu4_open" data-target2="okna_podklu4_send" data-callformname="Рассчет стоимости">Заказать по акции</div>

                                </a>
                            </div>
                        </div>
                    </li>-->

                </ul>
            </div>
        </section>
    </div>

</div>
<!--Мобильная версия-->

<!--Установленные окна от «Steklopaket5»-->



<!--  <style>

      .blockBanner {
          position: relative;
          overflow: hidden;
          max-width: 750px;
          width: 80%;
          display: block;
          margin: 0 auto;
      }

      .blockBanner > .flexslider {
          margin: 0 0 40px;
          background: none;
          border: none;
          position: relative;
          -webkit-border-radius: 4px;
          -moz-border-radius: 4px;
          -o-border-radius: 4px;
          border-radius: 4px;
          box-shadow: none;
          -webkit-box-shadow: none;
          -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, .2);
          -o-box-shadow: 0 1px 4px rgba(0, 0, 0, .2);
          zoom: 1;
      }

      .blockBanner > .flexslider > .flex-control-nav {
          bottom: -25px;
      }

      .blockBanner > .flexslider .slides img {
          width: 90%;
          /*max-width: 750px;*/
      }

      .blockBanner > .flexslider .banner {
          position: relative;
          background-image: url(http://ecoplastika.ru/img/b-akciya/1.png);
          display: block;
          /*max-width: 700px;*/
          width: 650px;
          height: 280px;
          background-position: center;
          background-size: contain;
          background-repeat: no-repeat;
          margin: 0 auto;
      }

      .blockBanner > .flexslider .banner .bannerContent {
          position: absolute;
          width: 100%;
          height: 100%;
          /* background-color: red; */
          top: 0;
          left: 0;
      }

      .blockBanner > .flexslider .banner .bannerBottom {
          background-color: #ea172a;
          position: absolute;
          right: 25px;
          top: 140px;
          color: white;
          text-transform: uppercase;
          padding: 10px;
          font-family: roboto;
          text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.33);
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
          cursor: pointer;
          border-bottom: solid #a91220 2px;
          transition: 200ms;
      }

      .blockBanner > .flexslider .banner .bannerBottom:hover {
          border-bottom: solid #a91220 0px;
          transition: 200ms;
      }

      .blockBanner > .flexslider .banner .bannerContent > div:last-child{
          width: 145px;
          background-color: red;
          height: 45px;
          display: block;
          position: absolute;
          right: 0;
          margin: 0 auto;
          left: 20px;
          bottom: 30px;
      }
  </style>


  <section class="blockBanner">
  <div class="flexslider">
      <ul class="slides">
          <li>
              <a class="banner" id="banner_1">
                  <div class="bannerContent">
                      <div>
                          <span class="bannerBottom">Заказать по акции</span>
                      </div>
                      <div>2</div>
                  </div>
              </a>
          </li>

          <li>
              <a class="banner" id="banner_2">

              </a>
          </li>
          <li>
              <a class="banner" id="banner_3">

              </a>
          </li>
          <li>
              <a class="banner" id="banner_4">

              </a>
          </li>
          <li>
              <a class="banner" id="banner_5">

              </a>
          </li>
      </ul>
  </div>
</section>

<script type="text/javascript">
  // Can also be used with $(document).ready()
  $(document).ready(function () {
      $('.blockBanner > .flexslider').flexslider({
          animation: "slide",
          animationLoop: false,
          itemMargin: 5,
          minItems: 1,
          maxItems: 2
      });
  });
</script>-->
