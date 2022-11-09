<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معلومات المواطن</title>
    <link rel="stylesheet" href="{{ asset('css/style111.css') }}">
    {{-- <link rel="stylesheet" href="style111.css"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body dir="rtl">
    <div class="home_intro">
        <div class="container_info">
        <div class="form_application">
                        <h2 id="title">بيـــانات المــواطن</h2>
{{--            <img src="{{DNS2D::getBarcodePNGPath($car->car_number, 'PDF417')}}" alt="">--}}

            <div class="container_table">
                              <table>
                                <thead>
                                  <tr>
                                    <th>
                                        المعلومات
                                    </th>
                                      <th>
                                          البيانات
                                      </th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td data-title='Provider Name'>
                                      أسم المالك
                                    </td>
                                    <td data-title='Provider Name'>
                                     {{$car->owner_name}}
                                    </td>
                                  </tr>
                                  <tr>
                                    <td data-title='Provider Name'>
                                       نوع السيارة
                                    </td>
                                    <td data-title='Provider Name'>
                                     {{$car->car_type}}
                                    </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                          رقم السيارة والحرف والمحافظة ونوع الرقم
                                      </td>
                                      <td data-title='Provider Name'>
                                          {{$car->car_number}} <space></space> {{$car->car_letter}} <space></space>{{$car->government_name}} <space></space>{{$car->number_type}}
                                      </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                          رقم السنوية
                                      </td>
                                      <td data-title='Provider Name'>
                                        {{$car->document_number}}
                                      </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                          رقم البطاقة التموينية
                                      </td>
                                      <td data-title='Provider Name'>
                                          {{$car->family_number}}
                                      </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                          رقم الجنسية او البطاقة الموحدة
                                      </td>
                                      <td data-title='Provider Name'>
                                          {{$car->id_card_number}}
                                      </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                        رقم بطاقة السكن
                                      </td>
                                      <td data-title='Provider Name'>
                                          {{$car->resident_number}}
                                      </td>
                                  </tr>
                                  <tr>
                                      <td data-title='Provider Name'>
                                          رقم الهاتف
                                      </td>
                                      <td data-title='Provider Name'>
                                          {{$car->mobile}}
                                      </td>
                                  </tr>

                                </tbody>
                              </table>
                <br><br>

                <div class="slider_img">
                    <div class="content">
                        <div class="images">
                            <img src="{{asset('storage/'. $car->id_card_photo)}}" alt="..">
                            <img src={{asset('storage/'. $car->car_photo)}} alt="" alt="">
                            <img src={{asset('storage/'. $car->resident_card_photo)}} alt="" alt="">
                            <img src={{asset('storage/'. $car->document_front_photo)}} alt="" alt="">
                            <img src={{asset('storage/'. $car->document_back_photo)}} alt="" alt="">

                        </div>
                        <div class="btm-slides">
                            <span onclick="btm_slide(1)"></span>
                            <span onclick="btm_slide(2)"></span>
                            <span onclick="btm_slide(3)"></span>
                            <span onclick="btm_slide(4)"></span>
                            <span onclick="btm_slide(5)"></span>
                        </div>
                        <div class="sliders left" onclick="side_slide(-1)">
                            <span class="fas fa-angle-left"></span>
                        </div>
                        <div class="sliders right" onclick="side_slide(1)">
                            <span class="fas fa-angle-right"></span>
                        </div>
                    </div>
                </div>

                <div>
                    <br><br>
                    <form action="" method="post" style="text-align: center;">
                        @csrf
                        @method('POST')
                        <button class="btn-success" type="submit">تفعيل</button>
                    </form>

            </div>

        </div>
        </div>
    </div>
</div>

<script>
    var indexValue = 1;
    showImg(indexValue);
    function btm_slide(e){showImg(indexValue = e);}
    function side_slide(e){showImg(indexValue += e);}
    function showImg(e){
      var i;
      const img = document.querySelectorAll('img');
      const slider = document.querySelectorAll('.btm-slides span');
      if(e > img.length){indexValue = 1}
      if(e < 1){indexValue = img.length}
      for(i = 0; i < img.length; i++){
        img[i].style.display = "none";
      }
      for(i = 0; i < slider.length; i++){
        slider[i].style.background = "#6F50FF";
      }
      img[indexValue-1].style.display = "block";
      slider[indexValue-1].style.background = "#edebf1";
    }
  </script>
</body>
</html>
