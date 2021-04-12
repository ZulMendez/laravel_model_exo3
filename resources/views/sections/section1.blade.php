<section class="mt-3">
    <h1 class="text-info">Membres</h1>
    <ul>
        @foreach ($membres as $membre)
            <li>{{$membre->nom}} || {{$membre->age}}ans</li>
        @endforeach
    </ul>
</section>