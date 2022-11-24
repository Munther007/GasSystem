
    <!DOCTYPE html>
    <html >
    <head>
        <meta charset="UTF-8">
        <title>Responsive Table + Detail View</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


        <link rel="stylesheet" href="{{asset('css/style9.css')}}">


    </head>

    <body dir="rtl">

    <div class="container">
        <div class="row">
        </div>
    </div>
    <div class="container mt-2">
        <div class="row mt-2 justify">
            <div class="col-6">
                <button class="btnRegister33">
                    <a href="/cars/export"> تصدير كملف</a>
                </button>
                <button class="btnRegister33 btn_rigester">
                    <a href="/print-cars">طباعة الملف</a>
                </button>
            </div>

            <div class="col-3">
                <form class="search-box d-flex " role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> <space></space>
                    <button class="btn btn-outline-success" type="submit">بحث</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="title_table">  سجل نشاطات تسجيل الدخول </h1> <br> <br>
    <table>
        <thead>
        <tr>
            <th>
                التسلسل
            </th>
            <th>
                اسم المستخدم
            </th>
            <th>
                الايميل
            </th>
            <th>
               أخر وقت ظهور
            </th>
            <th>
                الملاحظات
            </th>

        </tr>
        </thead>

        <tbody>
{{--        @foreach ($cars as $car)--}}
            <tr>
                <td data-title='Provider Name'>
{{--                    {{$car->id}}--}}
                </td>
                <td data-title='Provider Name'>
{{--                    {{$car->owner_name}}--}}
                </td>
                <td data-title='Provider Name'>
{{--                    {{$car->car_type}}--}}
                </td>
                <td data-title='Provider Name'>
{{--                    {{$car->car_number}} <space></space>  {{$car->car_letter}}--}}
                </td>
                <td data-title='Provider Name'>
{{--                    {{$car->number_type}}--}}
                </td>


            </tr>

{{--        @endforeach--}}

        </tbody>
    </table>

    </main>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <footer>
        <div class="footer clearfix mb-0 text-muted ">
            <div class="float-start">
                <p>2021 &copy; Munther Amer</p>
            </div>
            <div class="float-end">
                <p>Programming <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="https://opdc.oil.gov.iq">Athraa Farag & Munther Amer</a></p>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
