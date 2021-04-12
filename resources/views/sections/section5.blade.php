<section>
    <h1 class="text-danger">Femmes avec des Conditions</h1>
    <ul>
        @foreach ($femmesCondit as $item)
            <li>{{$item->nom}} || {{$item->age}}ans</li>
        @endforeach
    </ul>
</section>