@extends('dashboard')

@section('content')



    <li class="sidebar-title">Forms &amp; Tables</li>

    <li class="sidebar-item  has-sub">
        <ul class="submenu">
            <li class="submenu-item">
                <a href="{{ route('form/view/detail') }}">View Detail</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="{{ route('logout') }}" class='sidebar-link'>
            <i class="bi bi-box-arrow-right"></i>
            <span>Log Out</span>
        </a>
    </li>
    </ul>

@endsection
