<div>
  <h1>Lista film</h1>
  <ul>
  @foreach ($movies as $movie)
  <li>Titolo: {{$movie->titolo}}
    <a href="{{route('movies.show', $movie->id)}}">Dettagli</a>
    <a href="{{ route('movies.edit', $movie->id) }}">Modifica</a>
    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
			@csrf
			@method('DELETE')

			<input type="submit" value="Elimina">
		</form>
		
  </li>

  @endforeach
  </ul>

  <a href="{{ route('movies.create') }}">Create new movie</a>

</div>
