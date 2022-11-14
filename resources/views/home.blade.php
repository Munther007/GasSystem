<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>شركة توزيع المنتجات النفطية</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
<link rel="stylesheet" href="css/style-home.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
<!-- jquery cdn link  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Demo styles -->

    <!-- video cdn library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>


      body {
        /* background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000; */
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
        font-size: 14px;
        position: relative;

      }

      /* .swiper-slide { */
        /* text-align: center; */
        /* font-size: 18px;
        background: #fff; */

        /* Center slide text vertically */
        /* display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      } */

    </style>
  </head>

  <body >
    <!-- Swiper -->
    <header id="header" dir="rtl">

        <a href="#header" class="logo"><img src="logo.png" alt="" class="img_logo"></a>
        <p id="title_logo">شركة توزيع المنتجات النفطية</p>
        <div id="menu" class="fas fa-bars"></div>

        <nav class="nav_container">
            <a href="#home" class="nav_link">الصفحة الرئيسية</a>
            <a href="#home" class="nav_link"> أستمارة تسجيل البطاقات</a>
            <a href="#scanner_id" class="nav_link">المحطات</a>
            <a href="#contact_wrapper" class="nav_link">أتصل بنا</a>

            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">لوحة التحكم</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">تسجيل دخول</a>
                    @endauth
            @endif

            <a href="">تسجيل خروج</a>
{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}
{{--                    <x-jet-dropdown-link--}}
{{--                        href="{{ route('logout') }}"--}}
{{--                        onclick="event.preventDefault(); this.closest('form').submit();" role="button"--}}
{{--                    >--}}
{{--                        {{ __('app.Log Out') }}--}}
{{--                    </x-jet-dropdown-link>--}}
{{--                </form>--}}
        </nav>

      </header>


    <div class="swiper mySwiper bg-slider" dir="rtl">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="images/wholesale-hero.jpg" alt="">
            <div class="text-content">
              <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
              <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>
              <button class="read-btn">
			  <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
			  <i class="uil uil-arrow-right"></i></button>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/1.jpg" alt="">
          <div class="text-content">
              <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
            <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

              <button class="read-btn">
                  <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
                  <i class="uil uil-arrow-right"></i></button>          </div>
        </div>
        <div class="swiper-slide">
            <img src="images/369.jpg" alt="">
          <div class="text-content">
              <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
            <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

              <button class="read-btn">
                  <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
                  <i class="uil uil-arrow-right"></i></button>          </div>
        </div>
        <div class="swiper-slide">
            <img src="images/4.jpg" alt="">
          <div class="text-content">
              <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
            <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

              <button class="read-btn">
                  <a href="https://opdc.oil.gov.iq/"  class="site">أقــرأ المــزيد </a>
                  <i class="uil uil-arrow-right"></i></button>          </div>
        </div>

        <!-- <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div> -->
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

<!-- <div class="image">
   <div class="image-overlay">

</div></div> -->


<!-- =============video section============== -->
<br>
<br>
<br>

<div class="video_container">
  <div class="title_video">
    <h1> يمكنك مشاهدة الفديو </h1>
    <h2>كيـــفية ملئ استمارة تفــعيل بطــاقات أصحاب المركــبات التي تعمل على الوقود</h2>
  </div>
  <div class="container show-controls">
      <div class="wrapper">
          <div class="video-timeline">
              <div class="progress-area">
                  <span>00:00</span>
                  <div class="progress-bar"></div>
              </div>
          </div>
          <ul class="video-controls">
              <li class="options left">
                  <button class="volume"><i class="fa-solid fa-volume-high"></i></button>
                  <input type="range" min="0" max="1" step="any">
                  <div class="video-timer">
                      <p class="current-time">00:00</p>
                      <p class="separator"> / </p>
                      <p class="video-duration">00:00</p>
                  </div>
              </li>
              <li class="options center">
                  <button class="skip-backward"><i class="fas fa-backward"></i></button>
                  <button class="play-pause"><i class="fas fa-play"></i></button>
                  <button class="skip-forward"><i class="fas fa-forward"></i></button>
              </li>
              <li class="options right">
                  <div class="playback-content">
                      <button class="playback-speed"><span class="material-symbols-rounded">slow_motion_video</span></button>
                      <ul class="speed-options">
                          <li data-speed="2">2x</li>
                          <li data-speed="1.5">1.5x</li>
                          <li data-speed="1" class="active">عادي</li>
                          <li data-speed="0.75">0.75x</li>
                          <li data-speed="0.5">0.5x</li>
                      </ul>
                  </div>
                  <button class="pic-in-pic"><span class="material-icons">picture_in_picture_alt</span></button>
                  <button class="fullscreen"><i class="fa-solid fa-expand"></i></button>
              </li>
          </ul>
      </div>
      <video src="2.mp4"></video>
  </div>
</div>
<!-- ===================end video section================== -->


<!-- ==============application section start============= -->

        <!-- =========HOME ============= -->
        <section class="section_home" id="home" dir="rtl">
          <div class="section_wrap1">
            <h1>استمارة التسجيل بطاقات ذوي المركبات التي تعمل على الوقود</h1>
            <p>اضغط على الرابط لملئ الاستمارة</p>
            <a href="/cars/create" class="fill_app">استمارة التسجيل</a>
              <!-- <br> -->
            </div>
      <!-- <div class="section_wrap2">
              <img src="scanner.jpg" alt="" id="img_home">
      </div> -->
    </section>

    <!-- ====END SECTION HOME -->
<!-- <div class="app_container" dir="rtl">
  <h1>استمارة التسجيل لأصحاب المركبات التي تعمل على الوقود</h1>

  <p>اضغط على الرابط لملئ الاستمارة</p>
  <a href="#" class="fill_app">استمارة التسجيل</a>
</div> -->
<!-- ============== applicationend section================== -->


 <!-- contact section starts -->

 <div class="contact_wrapper" id="contact_wrapper">
  <div class="container_contact" dir="rtl">
      <div class="text">أتــــصل بنا </div>
      <form action="#">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">الاسم الاول</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">الاسم الثاني</label>
            </div>
         </div>
         <!-- <div class="form-row">
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">العنوان</label>
            </div>
            <div class="input-data">
               <input type="text" required>
               <div class="underline"></div>
               <label for="">الاسم</label>
            </div>
         </div> -->
         <div class="form-row">
            <div class="input-data textarea">
               <textarea rows="8" cols="80" required></textarea>
               <br />
               <div class="underline"></div>
               <label for="">أكتب رسالتك هنا او أستفسارك</label>
               <br />
               <div class="form-row submit-btn">
                  <div class="input-data">
                     <div class="inner"></div>
                     <input type="submit" value="اتــــصل بنا">
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
  </div>

<!-- =============end contact======== -->


 <!-- ========================= map-section end ========================= -->
 <section class="map-section map-style-9">
  <div class="map-container">
      <object id="map" style="border:0; height: 500px; width: 100%;"
      data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
  </div>
</section>
<!-- ========================= map-section end ========================= -->

<!-- =============start footer============= -->

<footer class="footer" id="footer" dir="rtl">

    <div class="footer__container">

        <div class="box">
            <img src="logo.png" alt="" >
            <p>شــركة توزيــع المنتجات النفطية <br> هيــأة توزيــع بغــداد</p>
        </div>

        <div class="box">
            <h4>أتــصل بنا</h4>
            <p> <i class="fas fa-phone"></i> +9640077000000 </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> بغداد- مصفى الدورة </p>
            <p> <i class="fas fa-map-marker-alt"></i> بغداد- الكيلاني </p>
        </div>



        <div class="box">
          <h4> مواقع مهمة</h4>
          <ul class="footer_list">
              <li class="footer_item"><a href="https://oil.gov.iq/" class="footer_link">وزارة النفط</a></li>
              <li class="footer_item"><a href="https://opdc.oil.gov.iq/" class="footer_link">شركة توزيع المنتجات النفطية </a></li>
              <li class="footer_item"><a href="#" class="footer_link">هيأة توزيع بغداد</a></li>


          </ul>
      </div>


      <div class="box">
        <h4> مواقع التواصل الاجتماعي</h4>
        <a href="#" class="fab fa-youtube"></a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
    </div>

{{--    <div class="team">--}}
{{--       <h3 class="team2">أعــداد وتــقديم :</h3>--}}
{{--       <p class="team1"> م. </p>--}}
{{--       <p class="team1">م. </p>--}}
{{--    </div>--}}
    <div class="copy_right">
        <p><span id="add">جميع الحقوق محفوظة لشركة توزيع المنتجات النفطية. </span>&copy; 2022 <span id="add2">&reg;</span>
           مـنذر عامر & عذراء فرج </p>
    </div>
    <!-- <h1 class="credit"> created by <span>mr. web designer</span> | all rights reserved! </h1> -->

  </footer>
<!-- =============== end FOOTER============== -->

    <!-- scroll top  -->
    <a href="#header" class="fas fa-arrow-up" id="scroll-top"></a>
    <!-- Swiper JS -->
    <!-- this is for slider side img -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EG
         async defer"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


      //////////// script video/////////////
      const container = document.querySelector(".container"),
mainVideo = container.querySelector("video"),
videoTimeline = container.querySelector(".video-timeline"),
progressBar = container.querySelector(".progress-bar"),
volumeBtn = container.querySelector(".volume i"),
volumeSlider = container.querySelector(".left input");
currentVidTime = container.querySelector(".current-time"),
videoDuration = container.querySelector(".video-duration"),
skipBackward = container.querySelector(".skip-backward i"),
skipForward = container.querySelector(".skip-forward i"),
playPauseBtn = container.querySelector(".play-pause i"),
speedBtn = container.querySelector(".playback-speed span"),
speedOptions = container.querySelector(".speed-options"),
pipBtn = container.querySelector(".pic-in-pic span"),
fullScreenBtn = container.querySelector(".fullscreen i");
let timer;

const hideControls = () => {
    if(mainVideo.paused) return;
    timer = setTimeout(() => {
        container.classList.remove("show-controls");
    }, 3000);
}
hideControls();

container.addEventListener("mousemove", () => {
    container.classList.add("show-controls");
    clearTimeout(timer);
    hideControls();
});

const formatTime = time => {
    let seconds = Math.floor(time % 60),
    minutes = Math.floor(time / 60) % 60,
    hours = Math.floor(time / 3600);

    seconds = seconds < 10 ? `0${seconds}` : seconds;
    minutes = minutes < 10 ? `0${minutes}` : minutes;
    hours = hours < 10 ? `0${hours}` : hours;

    if(hours == 0) {
        return `${minutes}:${seconds}`
    }
    return `${hours}:${minutes}:${seconds}`;
}

videoTimeline.addEventListener("mousemove", e => {
    let timelineWidth = videoTimeline.clientWidth;
    let offsetX = e.offsetX;
    let percent = Math.floor((offsetX / timelineWidth) * mainVideo.duration);
    const progressTime = videoTimeline.querySelector("span");
    offsetX = offsetX < 20 ? 20 : (offsetX > timelineWidth - 20) ? timelineWidth - 20 : offsetX;
    progressTime.style.left = `${offsetX}px`;
    progressTime.innerText = formatTime(percent);
});

videoTimeline.addEventListener("click", e => {
    let timelineWidth = videoTimeline.clientWidth;
    mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
});

mainVideo.addEventListener("timeupdate", e => {
    let {currentTime, duration} = e.target;
    let percent = (currentTime / duration) * 100;
    progressBar.style.width = `${percent}%`;
    currentVidTime.innerText = formatTime(currentTime);
});

mainVideo.addEventListener("loadeddata", () => {
    videoDuration.innerText = formatTime(mainVideo.duration);
});

const draggableProgressBar = e => {
    let timelineWidth = videoTimeline.clientWidth;
    progressBar.style.width = `${e.offsetX}px`;
    mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration;
    currentVidTime.innerText = formatTime(mainVideo.currentTime);
}

volumeBtn.addEventListener("click", () => {
    if(!volumeBtn.classList.contains("fa-volume-high")) {
        mainVideo.volume = 0.5;
        volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
    } else {
        mainVideo.volume = 0.0;
        volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
    }
    volumeSlider.value = mainVideo.volume;
});

volumeSlider.addEventListener("input", e => {
    mainVideo.volume = e.target.value;
    if(e.target.value == 0) {
        return volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark");
    }
    volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high");
});

speedOptions.querySelectorAll("li").forEach(option => {
    option.addEventListener("click", () => {
        mainVideo.playbackRate = option.dataset.speed;
        speedOptions.querySelector(".active").classList.remove("active");
        option.classList.add("active");
    });
});

document.addEventListener("click", e => {
    if(e.target.tagName !== "SPAN" || e.target.className !== "material-symbols-rounded") {
        speedOptions.classList.remove("show");
    }
});

fullScreenBtn.addEventListener("click", () => {
    container.classList.toggle("fullscreen");
    if(document.fullscreenElement) {
        fullScreenBtn.classList.replace("fa-compress", "fa-expand");
        return document.exitFullscreen();
    }
    fullScreenBtn.classList.replace("fa-expand", "fa-compress");
    container.requestFullscreen();
});

speedBtn.addEventListener("click", () => speedOptions.classList.toggle("show"));
pipBtn.addEventListener("click", () => mainVideo.requestPictureInPicture());
skipBackward.addEventListener("click", () => mainVideo.currentTime -= 5);
skipForward.addEventListener("click", () => mainVideo.currentTime += 5);
mainVideo.addEventListener("play", () => playPauseBtn.classList.replace("fa-play", "fa-pause"));
mainVideo.addEventListener("pause", () => playPauseBtn.classList.replace("fa-pause", "fa-play"));
playPauseBtn.addEventListener("click", () => mainVideo.paused ? mainVideo.play() : mainVideo.pause());
videoTimeline.addEventListener("mousedown", () => videoTimeline.addEventListener("mousemove", draggableProgressBar));
document.addEventListener("mouseup", () => videoTimeline.removeEventListener("mousemove", draggableProgressBar));
// end script vedio//////////////
    </script>

     <!-- custom js file link  -->
     <script src="js/script9.js"></script>

  </body>
</html>
