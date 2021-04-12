<section>
    <h1 class="text-primary">Hommes</h1>
    <ul>
        @foreach ($hommes as $homme)
            <li>{{$homme->nom}} || {{$homme->age}}ans</li>
        @endforeach
    </ul>
</section>