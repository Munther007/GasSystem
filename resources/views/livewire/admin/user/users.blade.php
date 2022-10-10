@extends('livewire.admin.user.my')
@section('title')
    print
    @endsection
@section('content')
    <div style="text-align: center;">
        <br><br>
        <a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>

    <div style="text-align: center;">
        <h1>Users Information List </h1>
        <br>
        <br>
        <table class="table mt-3" >
            <tr><th>ت</th><th>الأسم المستعار</th><th>الأسم الثلاثي</th><th>البريد الالكتروني</th><th>أخر دخول</th></tr>
            @foreach($users as $user)
                <tr><td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->last_seen }}</td>
                </tr>
        @endforeach
    </div>
@endsection
