<section>
    <h1 class="text-success">Membres Hors Conditions</h1>
    <ul>
        @foreach ($horsCondit as $item)
            <li>{{$item->nom}} || {{$item->age}}ans</li>
        @endforeach
    </ul>
</section>