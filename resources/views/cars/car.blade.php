<br>
{{$car->owner_name}}
<br>
{{$car->car_name}}
<br>
{{$car->mobile}}
<br>
<img src="{{DNS2D::getBarcodePNGPath($car->car_number, 'PDF417')}}" alt="">
