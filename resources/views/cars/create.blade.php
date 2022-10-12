<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>استمارة المواطن</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js"
            async defer></script>
</head>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

<body class='snippet-body'>
    <div class="container register">
        <div class="row">
            <!-- side bar -->
            <div class="col-md-3 register-left">
                <img src="{{asset('logo.png')}}" alt="" />
                <br>
                <br>
                <h2>أهلا بك</h2>
                <br>
                <p>يرجى ملئ الاستمارة  </p>
                {{-- <input type="submit" name="" value="تسجيل دخول" /><br /> --}}
            </div>
            <!-- whole form  -->
            <div class="col-md-9 register-right">
                {{-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">المواطن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">الموظف</a>
                    </li>
                </ul> --}}
                <div class="tab-content" id="myTabContent">
                    <!-- here is the first form -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h1 class="register-heading">استمارة المواطن</h1>
                        <!-- <div class="row register-form"> -->

                       <form class="row register-form"  action="{{route('cars.store')}}" method="post" enctype="multipart/form-data" dir="rtl">
                            @csrf
                            @method('POST')
                            <!-- here is the column one on the lift -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="owner_name" id="owner_name" placeholder="اسم المالك *" value="{{ old('owner-name') }}" />
                                    @error('owner_name')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="government_name" id="government_name" placeholder="المحافظة *" value="{{old("government_name")}}" />
                                    @error('government_name')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="car_number" id="car_number" placeholder="رقم السيارة *" value="{{old("car_number")}}" />
                                    @error('car_number')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="car_letter" id="car_letter" placeholder="الحرف التابع لرقم السيارة *" value="{{old("car_letter")}}" />
                                    @error('car_letter')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="document_number" id="document_number" placeholder="رقم السنوية *" value="{{old("document_number")}}" />
                                    @error('car_letter')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="id_card_photo" id="id_card_photo" placeholder="صورة الهوية او البطاقة الموحدة *" value="{{old("id_card_photo")}}" />
                                    @error('id_card_photo')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="car_photo" id="car_photo" placeholder="صورة المركبة *" value="{{old('car_photo')}}" />
                                    @error('car_photo')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="resident_card_photo" id="resident_card_photo" placeholder="صورة بطاقة السكن *" value="" />
                                    @error('resident_card_photo')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="btn_form">
                                    <input type="submit" class="btnRegister4" value="عرض البيانات" />
                                </div>
                            </div>
                            <!-- here is the second colunm on the right -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="family_number" id="family_number" placeholder="رقم البطاقةالتموينية *" value="{{old("family_number")}}" />
                                    @error('family_number')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="11" name="mobile" id="mobile" class="form-control" placeholder="رقم الهاتف *" value="{{old("mobile")}}" />
                                    @error('mobile')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="number_type" id="number_type" value="{{old('number_type')}}">
                                        <option class="hidden" selected disabled>أختر نوع الرقم</option>
                                        <option>خصوصي 1</option>
                                        <option>أجرة 2</option>
                                        <option>حمل 3</option>
                                        <option>حكومي 4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="car_type" id="car_type" placeholder="نوع السيارة *" value="{{old('car_type')}}" />
                                    @error('car_type')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="id_card_number" id="id_card_number" placeholder="رقم الهوية او الموحدة *" value="{{old("id_card_number")}}" />
                                    @error('id_card_number')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="resident_number" id="resident_number" placeholder="رقم بطاقة السكن *" value="{{old("resident_number")}}" />
                                    @error('resident_number')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="document_front_photo" id="document_front_photo" placeholder="صورة وجه السنوية *" value="{{old("document_front_photo")}}" />
                                    @error('document_front_photo')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>

                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="document_back_photo" id="document_back_photo" placeholder="صورة ظهر السنوية *" value="{{old("document_back_photo")}}" />
                                    @error('document_back_photo')
                                    <div class="form-error">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                               <div class="form-group">
                                   <script src="https://www.google.com/recaptcha/api.js"
                                           async defer></script>
                                   <div class="g-recaptcha" style="text-align: center;" id="feedback-recaptcha"
                                        data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                                   </div>
                               </div>

                                <div class="btn_form">
                                <input type="submit" class="btnRegister5" value="تسجيل البيانات" />
                            </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <!-- ///////////////////end of the first form ////////////////////////////////////////////////////////////////////////////-->

                    <!-- the seconf form of the employee -->
                    {{-- <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab"> --}}
                        {{-- <h3 class="register-heading">أدارة الموقع</h3> --}}



            <!-- here is the second form -->
            {{-- <div class="row register-form">
                <div class="col-md-6">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="البريد الالكتروني*" value="" name="owner-name"/>
                        @error('owner-name')
                        <div class="form-error">
                            {{$message}}
                        </div>

                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="الرمز السري*" value="" name="government_name"/>
                        @error('government_name')
                        <div class="form-error">
                            {{$message}}
                        </div>

                        @enderror
                    </div>


                </div>
                <div class="col-md-6">

                    <input type="submit" class="btnRegister" value="Register" />
                </div>
            </div> --}}



                    {{-- </div> --}}



                </div>
            </div>
        </div>

    </div>
</body>
</html>
