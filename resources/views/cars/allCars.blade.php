

    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                {{$car->owner_name}}
                <br>
                {{$car->mobile}}
            @endforeach
                <br>
                <br>
        </div>
    </div>

