<h1>sono edit</h1>
<p>stai modificando il film: {{ $movie->titolo }}</p>
<form action="{{route('movies.update' , $movie->id)}}" method="post">
  @csrf
  @method('PUT')
  <label>titolo</label>
  <input type="text" name="titolo" placeholder="titolo" value="{{$movie->titolo}}"><br>

  <label>description</label>
  <textarea name="description" rows="8" cols="80" value="{{$movie->description}}"></textarea>

  <label>voto</label>
  <input type="number" name="voto" placeholder="voto" value="{{$movie->voto}}"><br>

  <label>anno</label>
  <input type="number" name="anno" placeholder="anno" value="{{$movie->anno}}"><br>

  <input type="submit" value="Invia">
</form>
<a href="{{ route('movies.index') }}">Torna a index</a>
