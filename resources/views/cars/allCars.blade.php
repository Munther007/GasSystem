<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Responsive Table + Detail View</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <link rel="stylesheet" href="{{asset('css/style2.css')}}">


</head>

<body dir="rtl">

<main>
    <div class="top">
        <!-- <i class="uil uil-bars sidebar-toggle"></i> -->

        <div class="search-box">

            <input type="text" placeholder="أبحث هنا...">
            <i class="uil uil-search"></i>
        </div>

        <!--<img src="images/profile.jpg" alt="">-->
    </div>
    <h1 class="title_table">  معلومات البطاقات </h1>
    <table>
        <thead>
        <tr>
            <th>
                التسلسل
            </th>
            <th>
                اسم المالك
            </th>
            <th>
                نوع السيارة
            </th>
            <th>
                رقم السيارة والحرف
            </th>
            <th>
               نوع رقم المركبة
            </th>
            <th>
                المحافظة
            </th>
            <th>
                رقم السنوية
            </th>

            <th>
                رقم الهاتف
            </th>
            <th>
                رقم البطاقة التموينية
            </th>
            <th>
                رقم الهوية/البطاقة الموحدة
            </th>
            <th>
                رقم بطاقة السكن
            </th>
            <th>
                الملاحظات
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach ($cars as $car)
        <tr>
            <td data-title='Provider Name'>
                {{$car->id}}
            </td>
            <td data-title='Provider Name'>
                {{$car->owner_name}}
            </td>
            <td data-title='Provider Name'>
                {{$car->car_type}}
            </td>
            <td data-title='Provider Name'>
                {{$car->car_number}} <space></space>  {{$car->car_letter}}
            </td>
            <td data-title='Provider Name'>
                {{$car->number_type}}
            </td>
            <td data-title='E-mail'>
                {{$car->government_name}}
            </td>
            <td data-title='Provider Name'>
                {{$car->document_number}}
            </td>
            <td data-title='Provider Name'>
                {{$car->mobile}}
            </td>
            <td data-title='Provider Name'>
                {{$car->family_number}}
            </td>
            <td data-title='Provider Name'>
                {{$car->id_card_number}}
            </td>
            <td data-title='Provider Name'>
                {{$car->resident_number}}
            </td>
            <td data-title='Provider Name'>
                {{$car->notes}}
            </td>
            <td class='select'>
                <a class='button' href='#'>
                    Select
                </a>
            </td>
        </tr>

            @endforeach

        </tbody>
    </table>

</main>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{asset('js/index.js')}}"></script>

</body>
</html>


