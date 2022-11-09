<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- <link rel="stylesheet" href="sidebar.css">  -->
<!-- <link rel="stylesheet" href="{{ url('css/sidebar.css')}}"> -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<title>Admin Dashboard Panel</title>-->
</head>
<body>
<nav>
    <div class="logo-name">
        <span class="logo_name ">OPDC</span>
        <div class="logo-image">
            <img src="logo.png" alt="">
        </div>


    </div>

    <div class="menu-items">
        <ul class="nav-links">
            <li><a href="/dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">الصفحة الرئيسية</span>
                </a></li>
            <li><a href="/admin/user">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">المستخدمين</span>
                </a></li>
            <li><a href="/admin/role">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">الصلاحيات</span>
                </a></li>
            <li><a href="{{route('cars.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">جميع البطاقات</span>
                </a></li>
            <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">البطاقات المفعلة</span>
                </a></li>
            <!-- <li><a href="#">
                <i class="uil uil-comments"></i>
                <span class="link-name">Comment</span>
            </a></li>
            <li><a href="#">
                <i class="uil uil-share"></i>
                <span class="link-name">Share</span>
            </a></li> -->
        </ul>

        <ul class="logout-mode">
            <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">تسجيل خروج</span>
                </a></li>

            <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">الوضع المظلم </span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>

<section class="dashboard" >
    <div class="top">
        <!-- <i class="uil uil-bars sidebar-toggle"></i> -->
        <i class="fa-solid fa-arrow-right sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="أبحث هنا...">
        </div>

        <!--<img src="images/profile.jpg" alt="">-->
    </div>
<!-- @yield('content') -->
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">لوحة القيادة</span>
            </div>

            <div class="boxes">
                <div class="box box1">
                    <!-- <i class="uil uil-thumbs-up"></i> -->
                    <i class="fa-solid fa-address-card"></i>
                    <span class="text">عدد البطائق المفعلة </span>
                    <span class="number">0</span>
                </div>
                <div class="box box2">
                    <!-- <i class="uil uil-comments"></i> -->
                    <i class="fa-solid fa-address-card"></i>
                    <span class="text">عدد البطائق غير المفعلة</span>
                    <span class="number">0</span>
                </div>
                <div class="box box3">
                    <!-- <i class="uil uil-share"></i> -->
                    <i class="fa-solid fa-users-rectangle"></i>
                    <span class="text">عدد الزائرين </span>
                    <span class="number">0</span>
                </div>
                <div class="box box4">
                    <!-- <i class="uil uil-share"></i> -->
                    <i class="fa-solid fa-users"></i>
                    <span class="text">عدد المستخدمين </span>
                    <span class="number">0</span>
                </div>
            </div>
        </div>

        <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">النشاطات الاخيرة</span>
            </div>
            <div class="content-data">
                <div class="chart">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- <script src="sidebar.js"> --}} -->

<script>


    // APEXCHART
    var options = {
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 350,
            type: 'area',
            width: '50%'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    const body = document.querySelector("body"),
        modeToggle = body.querySelector(".mode-toggle");
    sidebar = body.querySelector("nav");
    sidebarToggle = body.querySelector(".sidebar-toggle");

    let getMode = localStorage.getItem("mode");
    if(getMode && getMode ==="dark"){
        body.classList.toggle("dark");
    }

    let getStatus = localStorage.getItem("status");
    if(getStatus && getStatus ==="close"){
        sidebar.classList.toggle("close");
    }

    modeToggle.addEventListener("click", () =>{
        body.classList.toggle("dark");
        if(body.classList.contains("dark")){
            localStorage.setItem("mode", "dark");
        }else{
            localStorage.setItem("mode", "light");
        }
    });

    sidebarToggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        if(sidebar.classList.contains("close")){
            localStorage.setItem("status", "close");
        }else{
            localStorage.setItem("status", "open");
        }
    })

</script>
</body>
</html>

{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

