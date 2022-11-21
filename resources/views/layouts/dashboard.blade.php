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
            <li><a href="/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">الصفحة الرئيسية</span>
                </a></li>
            <li><a href="/admin/user">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">المستخدمين</span>
                </a></li>
            <li><a href="/admin/role">
                    <i class="fas fa-user-cog"></i>
                    <span class="link-name">الصلاحيات</span>
                </a></li>
            {{--            @if (Auth::user()->role_name=='Administrator')--}}
            <li>
                <ul>
                    <a href="">
                        <i class="fa-sharp fa-solid fa-chart-line"></i>
                        <span class="link-name">سجل النشاطات</span>
                    </a>
                    <li class="submenu-item">
                        <a href="{{ route('userManagement') }}">لوحة تحكم المستخدم</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('activity/log') }}">سجل نشاط المستخدم</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('activity/login/logout') }}">سجل النشاطات</a>
                    </li>
                </ul>

            </li>
            {{--            @endif--}}



            <li><a href="{{route('cars.index')}}">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">جميع البطاقات</span>
                </a></li>
            <li><a href="">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">البطاقات المفعلة</span>
                </a>
            </li>
            <li><a href="{{route('scan')}}">
                    <i class="fa-regular fa-address-card"></i>
                    <span class="link-name">تفعيل بطاقة جديدة</span>
                </a>
            </li>
        </ul>

        <ul class="logout-mode">
            <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">
                        <!-- Authentication -->
                         <form class="link-name" method="POST" action="{{ route('logout') }}">
                          @csrf
                           <x-jet-dropdown-link
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               this.closest('form').submit();" role="button">
                            تسجيل خروج
                            </x-jet-dropdown-link>
                           </form>
                        </span>
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
@yield('content')
<section class="dashboard" >
    <div class="top">
        <!-- <i class="uil uil-bars sidebar-toggle"></i> -->
        <i class="fa-solid fa-arrow-right sidebar-toggle"></i>

        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="أبحث هنا...">
        </div>

        {{--        <img src="images/profile.jpg" alt="">--}}
    </div>

 @yield('content')




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

