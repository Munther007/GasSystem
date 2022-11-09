<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بيانات المواطن</title>
    <link rel="stylesheet" href="{{asset('style444.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.min.2.2.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.printPage.js')}}"></script>
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../../../js/jquery.printPage.js"></script>
</head>
<body>
<div class="container_header">
    <div class="barcode">
        <img src="{{DNS2D::getBarcodePNGPath($car->car_number, 'PDF417')}}" alt="">
    </div>
    <div class="logo_box">
        <img src="logo.png" alt="" class="logo">
    </div>
    <div class="text_box">
        <p id="text1">وزارة النفــط</p>
        <p id="text2">هيـــأة تـــوزيع بغـــداد </p>
        <p id="text3"> برمجيات التوزيع والطباعة الرقمية</p>
    </div>
</div>
<!-- <h1>أستــــمارة طلب تفعيل بيانات المواطني ذات المركبة ال </h1> -->
<div class="container_table" dir="rtl">
    <h3 id="title_header">البيـــــانات الشخصـــية :</h3>
    <!-- <div class="wrap_table"  dir="rtl"> -->
    <table>
        <tr>
            <td class="info">أسم المالك</td>
            <td class="data">{{$car->owner_name}}</td>
            <td class="info"> رقم الهوية او الموحدة</td>
            <td class="data">{{$car->id_card_number}} </td>
        </tr>
        <tr>
            <td>رقم الهاتف</td>
            <td>{{$car->mobile}} </td>
            <td>رقم بطاقة السكن</td>
            <td>   {{$car->resident_number}}</td>
        </tr>
        <tr>
            <td>رقم بطاقة التموينية</td>
            <td>  {{$car->family_number}}</td>
        </tr>
    </table>
</div>
<div class="container_table" dir="rtl">
    <h3 id="title_header">بيــــانات المـــركبــة :</h3>
    <!-- <div class="wrap_table"  dir="rtl"> -->
    <table>
        <tr>
            <td class="info"> رقم السيارة والحرف</td>
            <td class="data">{{$car->car_number}} <space></space> {{$car->car_letter}}

            </td>
            <td class="info"> نوع المــركبة   </td>
            <td class="data"> {{$car->car_type}} </td>
        </tr>
        <tr>
            <td>نوع الرقم </td>
            <td>{{$car->number_type}} </td>
            <td>المحــافظة   </td>
            <td>{{$car->government_name}}</td>
        </tr>
        <tr>
            <td>رقم الســـنوية </td>
            <td> {{$car->document_number}}</td>
        </tr>
    </table>
</div>
<!-- </div> -->

<div class="wrapper_notes"  dir="rtl">
    <h3 id="notes_title">ملاحظات</h3>
    <p>يرجى الاحتفاظ بهذه الاستمارة لأهميتها عند مراجعة الدائرة المعنية</p>
    <ul class="notes_print">
        <h3>المستمسكات المطلوبة </h3>

        <li>الهوية او البطاقة الموحدة</li>
        <li>بطاقة السكن</li>
        <li>البطاقة التموينية</li>
        <li>بطاقة السنوية</li>
    </ul>

</div>
<div class="footer_container"  dir="rtl">
    <p>توقــيع مقـــدم الاستمـــارة</p>
    <p>توقــيع المدقــق </p>
</div>

<div style="text-align: center;">
    <br><br>
    <a href="{{ url('/prnpriview3') }}" class="btnprn btn">طباعة</a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnprn').printPage();
    });
</script>
</body>
</html>
