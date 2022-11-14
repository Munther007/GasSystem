<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الماسح الضوئي</title>

    <style>
        .barcode {
            align-items: center;
            text-align: center;
            width: 35%;
            height: 300px;
            margin: 0% auto;
            margin-bottom: 2rem;
            /* background-color: #ffb9cf; */
            /* width: calc(100% / 4 - 16px); */
            /* background: #fff; */
            /* transition: var(--tran-05); */
            /* box-shadow: 6px 5px 12px #aaaaaa; */
            /* box-shadow: 4px 4px 16px rgb(0 0 0 / 10%); */
        }
        .barcode2 {
            align-items: center;
            text-align: center;
            width: 35%;

            margin: 5% auto;


        }
        .barcode .barcode_img {
            width: 100%;
        }
        .scan {
            margin-top: 2rem;
            margin-bottom: 2rem;
            /* margin-top: 10%; */
            border: none;
            border-radius: 1.5rem;
            padding: 20px 60px;
            background: #6F50FF;
            color: #fff;
            font-weight: 600;
            /* width: 20%; */
            cursor: pointer;
            border: 1px solid #6F50FF;
            /* margin-left: 100px; */
        }
        .scan_title {
            margin-top: 70px;
            margin-left: 500px;
            color: #6F50FF;
            width: 100%;
            text-align: center;
        }
        .scan_form {
            margin-left: 100px;
        }
        .scanner_ul {
            color: rgb(116 116 116);
            list-style: none;
            font-size: 1rem;
            padding: 10px;
        }
        .scanner_ul li {
            padding: 2px;
        }
        .scanner_container {
            width: 80%;
            margin: 0 auto;
        }
        #last-barcode {
            display: none;
        }
        .scanner_print {
            font-size: 1rem;
            color: rgb(116 116 116);

        }
        #scanner_add {
            /* text-decoration: none; */
            color: #6F50FF;
            font-size: 1.2rem;
            cursor: pointer;
        }
    </style>

</head>
<body>
<div class="scanner_container" dir="rtl">


    <div class="scan_title">
        <h2> الماسح الضــوئي</h2>
        <ul class="scanner_ul">
            <li> بأمكانك مسح الكود على الاستمارة لمقارنة جميع البيانات الخاصة بالمواطن</li>
            <li>بعد التأكد من البيانات يرجى تفعيل البطاقة</li>
        </ul>

        <!-- <strong>اخر رمز للماسح الضوئي </strong> -->
    </div>
    <div class="barcode">
        <img src="barcode.png" alt="" class="barcode_img">

    </div>
    <div class="barcode2">
        <p class="scanner_print"> لأتـمام عملية الماسح الضوئي يرجى الضغط على الزر ادناه</p>
        <button class="scan" id="scan"> المــاسح الضــوئي</button>
        <p class="scanner_print">بعد أتمام عملية الماسح الضوئي يرجى الضغط على الزر ادناه لمقارنة بيانات المواطن مع المستمسكات</p>
    </div>
    <form action="{{route('check')}}" method="post" style="text-align: center;">
        @csrf
        @method('POST')
        <input type="text" name="barcode" value="" id="last-barcode">

            <button type="submit" id="scanner_add">
                مطابقة المعلومات
            </button>
    </form>
{{--    <div id="last-barcode"></div>--}}
</div>
<script>
    var barcode='';
    var interval;
    var m=document.querySelector("#scan")
    m.addEventListener("click", vv)
    function vv() {
        document.body.style.backgroundColor="#EAEAEA"
        document.addEventListener('keydown', function(evt){
            if (interval)
                clearInterval(interval);
            if (evt.code == 'Enter'){
                if (barcode)
                    handleBarcode(barcode);
                barcode='';
                return;
            }
            if (evt.key != 'Shift')
                barcode += evt.key;
            interval = setInterval( ()=> barcode='', 20);
        } );
        function handleBarcode(scanned_barcode){
            document.querySelector('#last-barcode').value = barcode;
        }
    }

</script>
</body>

</html>
