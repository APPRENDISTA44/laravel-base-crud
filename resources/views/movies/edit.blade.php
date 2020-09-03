<h1>Modifica {{$movie->titolo}}</h1>
<a href="{{route('movies.index')}}">torna alla index</a>
<div>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif
</div>

<form action="{{route('movies.update',$movie->id)}}" method="post">
  @csrf
  @method('PUT')

  <div>
    <label>Titolo</label>
    <input type="text" name="titolo" value="{{$movie->titolo}}">
  </div>

  <div>
    <label>Anno</label>
    <input type="number" name="year" value="{{$movie->year}}">
  </div>

  <div>
    <label>Descrizione</label>
    <textarea name="description" rows="8" cols="80">{{$movie->description}}</textarea>
  </div>

  <div>
    <label>Voto</label>
    <input type="text" name="rating" value="{{$movie->rating}}">
  </div>

  <div>
    <input type="submit" value="Save">
  </div>

</form>
