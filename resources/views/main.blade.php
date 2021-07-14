<main>
    <div class="container-cards">
        @foreach ($movies as $movie)
            <div class="card">
                <h3>Title : {{ $movie -> title }} </h3>
                <h4>Original title: {{ $movie -> original_title }}</h4>
                <h5>Nationality : {{ $movie -> nationality }}</h5>
                <h6>Date : {{ $movie -> date }}</h6>
                <h6>Vote : {{ $movie -> vote }}</h6>
            </div>
        @endforeach
    </div>
</main>
