<section>
    <h1 class="text-primary">Hommes avec des Conditions</h1>
    <ul>
        @foreach ($hommesCondit as $item)
            <li>{{$item->nom}} || {{$item->age}}ans</li>
        @endforeach
    </ul>
</section>