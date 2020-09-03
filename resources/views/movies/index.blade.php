<div>
  <h1>Lista film</h1>
  <ul>
  @foreach ($movies as $movie)
  <li>Titolo: {{$movie->titolo}} <a href="{{route('movies.show', $movie->id)}}">Dettagli</a> </li>
  @endforeach
  </ul>
</div>
