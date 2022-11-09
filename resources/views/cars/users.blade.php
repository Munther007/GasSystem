@extends('livewire.admin.user.my')
@section('title')
    print
    @endsection
@section('content')
    <div style="text-align: center;">
        <br><br>
        <a href="{{ url('/prnpriview2') }}" class="btnprn btn">طباعة</a></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>



        <h1 class="title_table" style="text-align: center;">  معلومات المواطنين المدخلة في النظام </h1>
        <table class="table mt-5">
            <thead>
            <tr>
                <th>
                    ت
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
            </tr>
            </thead>

            <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>
                        {{$car->id}}
                    </td>
                    <td>
                        {{$car->owner_name}}
                    </td>
                    <td>
                        {{$car->car_type}}
                    </td>
                    <td>
                        {{$car->car_number}} <space></space>  {{$car->car_letter}}
                    </td>
                    <td>
                        {{$car->number_type}}
                    </td>
                    <td>
                        {{$car->government_name}}
                    </td>
                    <td>
                        {{$car->document_number}}
                    </td>
                    <td>
                        {{$car->mobile}}
                    </td>
                    <td>
                        {{$car->family_number}}
                    </td>
                    <td>
                        {{$car->id_card_number}}
                    </td>
                    <td>
                        {{$car->resident_number}}
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>



@endsection
