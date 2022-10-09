<!DOCTYPE html>
<!-- saved from url=(0049)https://alkhor-club.com/ar/media-news-details/219 -->
<html xmlns="" xml:lang="ar-aa" lang="ar-aa" class="uk-notouch"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>العراق - نادي الكرخ الرياضي</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta property="og:title" content="AL KHOR SPORTS CLUB">
      <meta property="og:url" content="/">
      <meta property="og:image" content="{{URL::asset('./post.png')}}">
      <link href="https://alkhor-club.com/assets/home/en/images/favicon.png" rel="shortcut icon" type="https://alkhor-club.com/assets/home/en/images/favicon.png">




      <link href="{{ url('/css/akslider.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ url('/css/donate.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ url('/css/style.css') }}" rel="stylesheet" type="text/css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="https://use.fontawesome.com/09e782e0cb.js" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="{{url('/js/mootools-yui-compressed.js') }}"></script>
      <!-- GRT Youtube Plugin CSS -->
      <link rel="stylesheet" href="{{ url('/css/grt-youtube-popup.css') }}">
      <script src="{{ url('/js/js.js') }}"></script>
      <!--  This code for share to social media -->
      <link href="{{ url('/css/ninja-slider.css') }}" rel="stylesheet" type="text/css">
      <script src="{{ url('/js/ninja-slider.js') }}" type="text/javascript"></script><style></style>
      <script>
         function lightbox(idx) {
             //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
             var ninjaSldr = document.getElementById("ninja-slider");
             ninjaSldr.parentNode.style.display = "block";
             nslider.init(idx);
             var fsBtn = document.getElementById("fsBtn");
             fsBtn.click();
         }
         function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
             if (isFullscreen) {
                 var ninjaSldr = document.getElementById("ninja-slider");
                 ninjaSldr.parentNode.style.display = "none";
            }
         }
      </script>
   <script type="text/javascript" charset="UTF-8" src="{{ url('/js/common.js') }}"></script><script type="text/javascript" charset="UTF-8" src="./نادي قطر_files/util.js.download"></script></head>

  <style>
    /* Visit http://www.menucool.com/responsive-slider for instructions */
  2
  3#ninja-slider
  4{
  5    width:100%;
  6    margin:0 auto; /*center aligned*/
  7    background:#222;
  8}
  9#ninja-slider > ul
 10{
 11    padding:0;
 12    margin:0;
 13}
 14
 15/* slide */
 16#ninja-slider li > div, #ninja-slider li > a
 17{
 18    /*max-width:960px;*/
 19    margin:0 auto; /* center each slide */
 20    /*border-radius:6px;
 21    background:#333;*/
 22    position: relative;
 23    display:block;
 24    box-shadow: 0 1px 5px rgba(0,0,0,.8),inset 0 0 1px rgba(255,255,255,.4);
 25    transition:none!important;
 26}
 27
 28/* loading image indicator */
 29#ninja-slider div.preload
 30{
 31    background: black url(loading.gif) no-repeat center 25%;
 32}
 33
 34/*----- video -----*/
 35#ninja-slider a.video
 36{
 37	position:absolute;
 38    border:0;top:0;left:0;
 39	width:100%;height:100%;
 40	background:transparent url(video.png) no-repeat 50% 50%;
 41    transition:none!important;
 42}
 43
 44/*------ pager ------*/
 45/* The pager id should be: slider id + "-pager" */
 46#ninja-slider-pager
 47{
 48    display:none;
 49}
 50
 51/* --------- navigation controls ------- */
 52/* The nav id should be: slider id + ("-prev", "-next", and "-pause-play") */
 53#ninja-slider-prev, #ninja-slider-next
 54{
 55    position: absolute;
 56    width:70px;
 57    height:140px;
 58    line-height:140px;
 59    top: 50%;
 60    margin-top:-70px;
 61    display:inline-block;
 62    background-image: url(navs.png);
 63    background-repeat:no-repeat;
 64    background-color:rgba(0,0,0,0.0);
 65    transition:width 0.5s, background-color 1s;
 66    color:white;
 67    overflow:hidden;
 68    opacity:0.4;
 69    font-size:14px;
 70}
 71#ninja-slider-prev {
 72    left: 0;
 73    border-radius:0 5px 5px 0;
 74    background-position:0 0;
 75}
 76
 77#ninja-slider-next {
 78    right: 0;
 79    border-radius:5px 0 0 5px;
 80    background-position:100% -140px;
 81}
 82
 83#ninja-slider-prev:hover, #ninja-slider-next:hover {width:110px;background-color:rgba(0,0,0,0.5);cursor:pointer;}
 84
 85/*pagination within the prev/next buttons*/
 86#ninja-slider-prev div {margin-left:74px;white-space:nowrap;}
 87#ninja-slider-next div {float:right;margin-right:74px;white-space:nowrap;}
 88
 89
 90#ninja-slider-pause-play { display:none;}
 91
 92/* Other settings
 93-------------------------------------------- */
 94#ninja-slider h2 {
 95    position:absolute;font-size:100px;width:100%;font-family:"Helvetica Neue", Helvetica, Arial;font-weight:bold;top:20%;text-align:center;color:#FFF;
 96}
 97
 98#ninja-slider h3 {
 99    position:absolute;font-size:50px;width:100%;font-family:"Helvetica Neue", Helvetica, Arial;font-weight:lighter;top:20%;text-align:center;color:#FFF;padding-top:140px;
100}
101
102/*styles for mobile*/
103@media only screen and (max-width: 900px) {
104    #ninja-slider h2 {
105        top:22%;
106        font-size:40px;
107    }
108
109    #ninja-slider h3 {
110        top:22%;
111        font-size:20px;
112        padding-top:60px;
113    }
114}
115
116/* Usually you don't need to change the following settings
117---------------------------------------------------------- */
118#ninja-slider > ul
119{
120    -webkit-backface-visibility: hidden;
121    -webkit-perspective: 1000px;
122    backface-visibility: hidden;
123    perspective: 1000px;
124    -webkit-tap-highlight-color: transparent;
125}
126
127#ninja-slider-pager, #ninja-slider-prev, #ninja-slider-next, #ninja-slider-pause-play
128{
129    -webkit-touch-callout: none;
130    -webkit-user-select: none;
131    -moz-user-select: none;
132    -ms-user-select: none;
133}
134
135#ninja-slider
136{
137    position: relative;
138    overflow: hidden;
139    /*visibility: hidden;*/
140    padding:0;
141}
142#ninja-slider > ul
143{
144    overflow: hidden;
145    position: relative;
146    list-style:none;
147    margin:0;
148}
149
150#ninja-slider > ul > li
151{
152    float: left;
153    width: 100%;
154    position: relative;
155    list-style:none;
156    padding:0;
157    height: 20%;
158    margin:0;
159}
  </style>
   <body class="tm-isblog" cz-shortcut-listen="true">
            <div class="over-wrap">
      <!-- Top bar section -->
      <div class="toolbar-wrap topposition">
         <div class="uk-container uk-container-center">
            <div class="tm-toolbar uk-clearfix uk-hidden-small">
               <div class="uk-float-right">
                  <div class="uk-panel">
                     <ul class="languagepicker">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">
                           <li><img src="./نادي قطر_files/qatar.png"> عربي   </li>
                        </a>
                        <a href="https://alkhor-club.com/en/media-news-details">
                           <li><img src="./نادي قطر_files/us.png"> English</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Top bar section -->
      <!-- Webpage top menu section start -->
      <div class="tm-menu-box">
         <div style="height: 70px;" class="uk-sticky-placeholder">
            <div class="uk-sticky-placeholder" style="height: 80px; margin: 0px;"><nav style="position: fixed; top: 0px; width: 743px;" class="tm-navbar uk-navbar uk-active" data-uk-sticky="">
               <div class="uk-container uk-container-center">
                  <a class="tm-logo uk-float-left" href="https://alkhor-club.com/ar/Home" dir="rtl">
                  <span class="topalls">نادي الخور الرياضي  <br>
                  <span class="fontstile">نستمد انتصاراتنا المستقبلية من تاريخنا!
                  </span></span>
                  <img src="./نادي قطر_files/logo.png" alt="logo" title="logo">
                  </a>
                  <ul class="uk-navbar-nav uk-hidden-small" dir="rtl">
                     <li><a href="https://alkhor-club.com/ar/home">الصفحة الرئيسية</a></li>
                     <li data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false" class="">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">حول</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/about-us">معلومات عنا</a></li>
                                    <li><a href="https://alkhor-club.com/ar/founders">  المؤسسون  </a></li>
                                    <li><a href="https://alkhor-club.com/ar/administration">الادارة</a></li>
                                    <li><a href="https://alkhor-club.com/ar/mission-vision-values">  الرسالة، الرؤية، القيم، شعارنا   </a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">كرة القدم</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/first-team">الفريق الأول</a></li>
                                    <li><a href="https://alkhor-club.com/ar/other-teams"> الفئات السنية  </a></li>
                                                                        <li><a href="https://alkhor-club.com/ar/matches-and-results">المباريات والنتائج</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false" class="">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#"> اللجنة الثقافية الأجتماعية </a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/sports-day">اليوم الرياضي</a></li>
                                    <li><a href="https://alkhor-club.com/ar/summer-program">البرنامج الصيفي</a></li>
                                 <li><a href="https://alkhor-club.com/ar/alkhor-ramadan-knights">  بطولة فرسان الخور الرمضانية  </a></li>
                                 <!-- <li><a href="https://alkhor-club.com/ar/championship">بطولة</a></li> -->
                                    <li><a href="https://alkhor-club.com/ar/cultural-events">أحداث</a></li>
                                    <li><a href="https://alkhor-club.com/ar/cultural-image-gallery"> معرض الصور </a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="uk-active uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#"> المركز الإعلامي </a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <!-- <li><a href="https://alkhor-club.com/ar/media-committee">لجنة الاعلام</a></li> -->
                                    <!-- <li><a href="https://alkhor-club.com/ar/press-release">خبر صحفى</a></li> -->
                                    <li><a href="https://alkhor-club.com/ar/media-news">أخبار</a></li>
                                    <li><a href="https://alkhor-club.com/ar/media-image-gallery"> معرض الصور </a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">رياضات اخرى</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/sports-athletics"> ألعاب القوى  </a></li>
                                    <li><a href="https://alkhor-club.com/ar/handball"> كرة اليد</a></li>
                                    <li><a href="https://alkhor-club.com/ar/table-tennis">تنس طاولة</a></li>
                                    <li><a href="https://alkhor-club.com/ar/basketball">كرة السلة</a></li>
                                    <li><a href="https://alkhor-club.com/ar/swimming">سباحة</a></li>
                                    <li><a href="https://alkhor-club.com/ar/volleyball">الكرة الطائرة</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <!-- <li  class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
                        <a href="#">الرياضة والترفيه</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/interactive-map">الخريطة التفاعلية</a></li>
                                    <li><a href="https://alkhor-club.com/ar/swimming-pool-gym">حمام سباحة وصالة رياضية</a></li>
                                    <li><a href="https://alkhor-club.com/ar/sport-facilities">المنشآت الرياضية</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li> -->
                     <!-- <li  ><a href="https://alkhor-club.com/ar/contact-us">اتصل بنا</a></li> -->
                     <li class="uk-parent" data-uk-dropdown="{&#39;preventflip&#39;:&#39;y&#39;}" aria-haspopup="true" aria-expanded="false">
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">للتواصل</a>
                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1 uk-dropdown-bottom" style="top: 80px; left: 0px;">
                           <div class="uk-grid uk-dropdown-grid">
                              <div class="uk-width-1-1">
                                 <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="https://alkhor-club.com/ar/contact-us">اتصل بنا</a></li>
                                    <li><a href="https://alkhor-club.com/ar/booking-and-registration">الحجز والتسجيل</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <a href="https://alkhor-club.com/ar/media-news-details/219#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
               </div>
            </nav></div>
         </div>
      </div>
      <!-- End Webpage top menu section start -->
      <!-- THIS MENU FOR MOBILE VERSION -->
      <div id="offcanvas" class="uk-offcanvas">
         <div class="uk-offcanvas-bar">
            <script src="./نادي قطر_files/jquery-2.1.4.min.js.download"></script>
            <script type="text/javascript" src="./نادي قطر_files/script.js.download"></script>
            <script type="text/javascript">
               jQuery(document).ready(function($) {
                 $("#menu").accordion();
                 $(".colors a").click(function() {
                   if ($(this).attr("class") != "default") {
                     $("#menu").removeClass();
                     $("#menu").addClass("menu").addClass($(this).attr("class"));
                   } else {
                     $("#menu").removeClass();
                     $("#menu").addClass("menu");
                   }
                 });
               });
            </script>
            <div id="mobilemenu">
               <div class="mobilemnulogo">
                  <a href="https://alkhor-club.com/ar/media-news-details/index.php"><img src="./نادي قطر_files/footer-logo.png" class="lazy" alt=""></a>
               </div>
               <div class="content">
                  <nav>
                     <div class="mobileselect" dir="rtl">
                        <div class="tm-toolbar uk-clearfix">
                           <div class="uk-panel">
                              <span class="whiter">اختار اللغة :</span>
                              <ul class="languagepicker fleft">
                                 <a href="https://alkhor-club.com/ar/media-news-details/219#">
                                    <li><img src="./نادي قطر_files/qatar.png"> عربي   </li>
                                 </a>
                                 <a href="https://alkhor-club.com/en/media-news-details">
                                    <li><img src="./نادي قطر_files/us.png"> English</li>
                                 </a>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div id="menu" class="menu" dir="rtl">
                        <ul>
                           <li class="active"><a href="https://alkhor-club.com/ar/home"><i class="fa fa-home"></i>الصفحة الرئيسية</a></li>
                           <li>
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-users"> </i>حول<span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/about-us">معلومات عنا</a></li>
                                 <li><a href="https://alkhor-club.com/ar/founders">  المؤسسون  </a></li>
                                 <li><a href="https://alkhor-club.com/ar/administration">الادارة</a></li>
                                 <li><a href="https://alkhor-club.com/ar/mission-vision-values">  الرسالة، الرؤية، القيم، شعارنا   </a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-futbol-o"> </i>كرة القدم  <span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/first-team">الفريق الأول</a></li>
                                 <li><a href="https://alkhor-club.com/ar/other-teams"> الفئات السنية  </a></li>
                                                                  <li><a href="https://alkhor-club.com/ar/mathches-and-results">المباريات والنتائج</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-file-text-o"> </i>اللجنة الثقافية<span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/sports-day">   اليوم الرياضي    </a></li>
                                 <li><a href="https://alkhor-club.com/ar/summer-program">البرنامج الصيفي</a></li>
                                 <li><a href="https://alkhor-club.com/ar/alkhor-ramadan-knights"> بطولة فرسان الخور الرمضانية  </a></li>
                                 <!-- <li><a href="https://alkhor-club.com/ar/championship">بطولة</a></li> -->
                                 <li><a href="https://alkhor-club.com/ar/cultural-events">أحداث</a></li>
                                 <li><a href="https://alkhor-club.com/ar/cultural-image-gallery"> معرض الصور </a></li>
                              </ul>
                           </li>
                           <li class="active">
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-newspaper-o"> </i>  المركز الاعلامي   <span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <!-- <li><a href="https://alkhor-club.com/ar/media-committee">لجنة الاعلام</a></li> -->
                                 <!-- <li><a href="https://alkhor-club.com/ar/press-release">خبر صحفى</a></li> -->
                                 <li><a href="https://alkhor-club.com/ar/media-news">أخبار</a></li>
                                 <li><a href="https://alkhor-club.com/ar/media-image-gallery"> معرض الصور </a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-file-image-o"> </i>رياضات اخرى<span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/sports-athletics"> ألعاب القوى  </a></li>
                                 <li><a href="https://alkhor-club.com/ar/handball">كرة اليد</a></li>
                                 <li><a href="https://alkhor-club.com/ar/table-tennis">تنس طاولة</a></li>
                                 <li><a href="https://alkhor-club.com/ar/basketball">كرة سلة</a></li>
                                 <li><a href="https://alkhor-club.com/ar/swimming">سباحة</a></li>
                                 <li><a href="https://alkhor-club.com/ar/volleyball">الكرة الطائرة</a></li>
                              </ul>
                           </li>
                           <!-- <li  >
                              <a href="#"><i class="fa fa-area-chart"> </i>الرياضة والترفيه</a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/interactive-map">الخريطة التفاعلية</a></li>
                                 <li><a href="https://alkhor-club.com/ar/swimming-pool-gym">حمام سباحة وصالة رياضية</a></li>
                                 <li><a href="https://alkhor-club.com/ar/sport-facilities">المنشآت الرياضية</a></li>
                              </ul>
                           </li> -->
                           <!-- <li ><a href="https://alkhor-club.com/ar/contact-us"><i class="fa fa-envelope"> </i> اتصل بنا</a></li> -->
                           <li>
                              <a href="https://alkhor-club.com/ar/media-news-details/219#"><i class="fa fa-area-chart"> </i>للتواصل <span class="submenu-indicator">+</span></a>
                              <ul class="submenu">
                                 <li><a href="https://alkhor-club.com/ar/contact-us">اتصل بنا</a></li>
                                 <li><a href="https://alkhor-club.com/ar/booking-and-registration">الحجز والتسجيل</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div><div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
   <div class="uk-container uk-container-center">
      <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
         <div class="uk-width-1-1 uk-row-first">
            <div class="uk-panel">
               <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url(&#39;https://alkhor-club.com/assets/home/en/images/head-bg.jpg&#39;);">
                  <img class="uk-invisible lazy" src="./نادي قطر_files/head-bg.jpg" alt="" height="300" width="1920">
                  <div class="uk-position-cover uk-flex uk-flex-center head-title">
                     <h1 dir="rtl">أخبار</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<div class="uk-container uk-container-center alt">
   <ul class="uk-breadcrumb" dir="rtl">
      <li><a href="https://alkhor-club.com/ar/Home">الصفحة الرئيسية</a>
      </li>
      <li><a href="https://alkhor-club.com/ar/media-news-details/219#">المركز الاعلامي</a>
      </li>
      <li><a href="https://alkhor-club.com/ar/media-news">أخبار</a>
      </li>
      <li class="uk-active"><span> بطولة صيفي الخور للبادل 2022</span>
      </li>
   </ul>
</div>
<section class="mb40 gallery">
   <div class="container tabledis">
      <div class="row">
         <div class="col-md-12 col-xs-12">
            <div class="borderfull">
               <!-- Right side content div start -->
               <div id="contents" dir="rtl">
                  <div class="tab-content">
                     <!--News tab start -->
                     <div class="tab-pane fade in active">
                        <h3 class="uppercase mb30">أخبار</h3>
                        <div class="row">
                          <div class="tm-main col-md-12">
                    <main id="tm-content" class="tm-content">
                        <div class="contentpaneopen">
                           <article>
                                <div class="clearfix"></div>
                                <div class="article-slider">
                                    <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 450 }">
                                        <ul class="uk-slideshow" style="height: 450px;">
                                            <li aria-hidden="false" class="uk-active" style="height: 450px;">
                                                <div style="background-image: url(https://alkhor-club.com/uploads/web/f883410e5da03d0240cf717333f37cd2.jpg);" class="uk-cover-background uk-position-cover lazy"></div>
                                            </li>
                                            <li aria-hidden="true" style="height: 450px;"><div style="background-image: url(https://alkhor-club.com/uploads/web/b24ae99fed66371797b385ee4bc06ed3.jpg);" class="uk-cover-background uk-position-cover lazy"></div></li>                                        </ul>
                                        <div class="article-slider-btn">
                                            <a href="https://alkhor-club.com/ar/media-news-details/219" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                            <a href="https://alkhor-club.com/ar/media-news-details/219" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-param">
                                    <div class="date">
                                        <i class="uk-icon-calendar"></i> June 30, 2022                                    </div>
                                </div>
                                <div class="article-single-text">
                                    <h4 class="bloghead"> بطولة صيفي الخور للبادل 2022</h4>
                                    <p>ضمن فعاليات النشاط الصيفي ( صيفنا  إبداع ) بتنظيم من اللجنة الشبابية بنادي الخور الرياضي وقام السيد / ناصر ثامر الحميدي ، مدير عام النادي والسيد / سعد راشد المهندي نائب رئيس اللجنة الشبابية بتتويج اللاعبين.

المركز الاول : علي محمد - محمد المهندي

المركز الثاني : عبدالعزيز المهندي - عبدالله المهندي.</p>
                                </div>

                            </article>
                        </div>

                    </main>
                </div>


                        </div>
                     </div>
                     <!--News tab End -->
                  </div>
               </div>
               <!-- Right side content div END -->
            </div>
         </div>
      </div>
   </div>
</section>
<div class="bottom-wrapper">
   <div class="tm-bottom-f-box  ">
      <div class="uk-container uk-container-center">
         <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
               <div class="uk-panel">
                  <div class="footer-logo">
                     <a href="https://alkhor-club.com/ar/media-news-details/219#"><img src="./نادي قطر_files/footer-logo.png" alt=""></a>
                  </div>
                  <div class="footer-socials">
                     <ul class="h-social">
                        <li><a href="https://www.instagram.com/alkhor_club/" target="_blank"><img src="./نادي قطر_files/Insta.png" alt="" width="25" height="25"></a></li>
                        <li><a href="https://www.facebook.com/alkhorclub" target="_blank"><img src="./نادي قطر_files/soc-facebook.png" alt="" width="25" height="25"></a></li>
                        <li><a href="https://www.youtube.com/user/AlKhorSportsClub" target="_blank"><img src="./نادي قطر_files/soc-youtube.png" alt="" width="25" height="25"></a></li>
                        <li><a href="https://twitter.com/alkhor_club" target="_blank"><img src="./نادي قطر_files/soc-twitter.png" alt="" width="25" height="25"></a></li>
                        <li><a href="https://www.snapchat.com/add/alkhorsc" target="_blank"><img src="./نادي قطر_files/snapcode-300x300.png" alt="" width="25" height="25"></a></li>
                     </ul>
                  </div>
                  <div class="clear"></div><br><br>
                  <!--<p class="footer-about-text translate" dir="rtl">
                     استطاع أبناء منطقة الخور العاملين في قطاع النفط إدراك أهمية وجود نادي يوفر لهم المجال المناسب لاستثمار طاقاتهم, وهذا الإدراك جاء نتيجة المشاركة الفعلية في الأنشطة الترفيهية التي تمارس في شركة نفط قطر ولزيادة القناعة بأهمية وجود نادي رياضي تمت لقاءات بين أبناء المنطقة وشكلت الفترة بين 1957 الى 1959
                  </p>-->
               </div>
            </div>
         </section>
      </div>
   </div>
   <div class="tm-bottom-g-box  ">
      <div class="uk-container uk-container-center">
         <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:&#39;&gt; div &gt; .uk-panel&#39;}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-width-large-1-2 uk-row-first">
               <div class="uk-panel">
                  <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                     <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                        <form method="post">
                           <div class="acymailing_module_form">
                              <div class="mail-title">النشرات الإخبارية</div>
                              <div class="acymailing_introtext"></div>
                              <div class="clear"></div>
                              <div class="space"></div>
                              <table class="acymailing_form">
                                 <tbody>
                                    <tr>
                                       <td class="acysubbuttons">
                                          <span class="submit-wrap">
                                          <span class="submit-wrapper">
                                          <input class="button subbutton btn btn-primary" value="الاشتراك" name="submit_news_letter" onclick="" type="submit">
                                          </span>
                                          </span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="acyfield_email acy_requiredField">
                                          <span class="mail-wrap">
                                          <input id="user_email_formAcymailing54111" class="inputbox" name="email" style="width:80%" placeholder="أدخل بريدك الالكتروني" title="أدخل بريدك الالكتروني" type="text">
                                          </span>
                                       </td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
   <footer id="tm-footer" class="tm-footer">
      <div class="uk-panel">
         <div class="uk-container uk-container-center">
            <div class="uk-grid">
               <div class="uk-width-1-1">
                  <div class="footer-wrap">
                     <div class="foot-menu-wrap">
                        <ul class="nav menu">
                           <li class="item-165"><a href="https://alkhor-club.com/ar/about-us">حول</a>
                           </li>
                           <li class="item-166"><a href="https://alkhor-club.com/ar/first-team">الفريق</a>
                           </li>
                           <li class="item-167"><a href="https://alkhor-club.com/ar/matches-and-results">مباراة</a>
                           </li>
                           <li class="item-168"><a href="https://alkhor-club.com/ar/contact-us">اتصل</a>
                           </li>
                           <li class="item-169"><a href="https://alkhor-club.com/ar/media-news">أخبار</a>
                           </li>
                        </ul>
                     </div>
                     <div class="copyrights" dir="rtl">تصميم مجموعة اكستريت  . صمم بواسطة
                        <a href="https://alkhor-club.com/ar/media-news-details/219#">Qweb.qa</a>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>

<script type="text/javascript" src="{{url('/js/lazyload.js') }}"></script>
<script>
   $(function() {
       $("img.lazy").lazyload();
   });
</script>
<!-- Thsi lumos script for custom poupimage -->
<script type="text/javascript" src="{{url('/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{url('/js/lumos.js') }}"></script><div class="lumos-container"><div class="lumos-alt-text"></div><img class="lumos-img" src="https://alkhor-club.com/ar/media-news-details/219"><svg version="1.1" class="lumos-prev" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 306 306" xml:space="preserve"><g><g id="chevron-right"><polygon points="211.7,306 247.4,270.3 130.1,153 247.4,35.7 211.7,0 58.7,153"></polygon></g></g></svg><svg version="1.1" class="lumos-next" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 306 306" xml:space="preserve"><g><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon></g></g></svg><svg version="1.1" class="lumos-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><path d="M512,51.75L460.25,0L256,204.25L51.75,0L0,51.75L204.25,256L0,460.25L51.75,512L256,307.75L460.25,512L512,460.25 L307.75,256L512,51.75z"></path></svg><div class="lumos-name"></div><div class="spinner-container"><div class="spinner"></div></div></div>
<!-- Thsi lumos script for custom poupimage end -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.1/js/uikit.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"></script>
<script type="text/javascript" src="{{url('/js/grid.js') }}"></script>
<script type="text/javascript" src="{{url('/js/slider.js') }}"></script>
<script type="text/javascript" src="{{url('/js/slideshow.js') }}"></script>
<script type="text/javascript" src="{{url('/js/slideset.js') }}"></script>
<script type="text/javascript" src="{{url('/js/sticky.js') }}"></script>
<script type="text/javascript" src="{{url('/js/lightbox.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="{{url('/js/grt-youtube-popup.js') }}"></script>
<!-- Initialize GRT Youtube Popup plugin -->
<!-- this scripts for image filtering plugin -->
<script type="text/javascript" src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>$(window).load(function () {
   var $container = $('.portfolioContainer');
   $container.isotope({
       filter: '.current',
       animationOptions: {
           duration: 750,
           easing: 'linear',
           queue: false } });
   $('.portfolioFilter a').click(function () {
       $('.portfolioFilter .current').removeClass('current');
       $(this).addClass('current');

       var selector = $(this).attr('data-filter');
       $container.isotope({
           filter: selector,
           animationOptions: {
               duration: 750,
               easing: 'linear',
               queue: false } });
       return false;
   });
   $("document").ready(function() {
   $(".current").trigger('click');
   });

   });

</script>
<!-- this scripts for image filtering plugin end-->
<!-- This script for vido youtube popup  -->
      <script>
         $(".youtube-link").grtyoutube({
            autoPlay:true
         });
      </script>
      <script type="text/javascript">
   var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
   $('.translate').text(function(i, v) {
   var chars = v.split('');
    for (var i = 0; i < chars.length; i++) {
      if (/\d/.test(chars[i])) {
         chars[i] = arabicNumbers[chars[i]];
        }
    }
    return chars.join('');
   })

</script>




</body></html>
