<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Print Cars Info.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script type="text/javascript" src="{{asset('js/jquery.min.2.2.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.printPage.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../../../js/jquery.printPage.js"></script>


</head>

<body dir="rtl">
<center>
    <br><br>
    <a href="{{ url('print-cars') }}" class="btnprn btn">Print Preview</a></center>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btnprn').printPage();
    });
</script>

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


