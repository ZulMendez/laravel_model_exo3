<section>
    <h1 class="text-danger">Femmes</h1>
    <ul>
        @foreach ($femmes as $femme)
            <li>{{$femme->nom}} || {{$femme->age}}ans</li>
        @endforeach
    </ul>
</section>