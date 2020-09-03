<h1>sono edit</h1>
<p>{{ $movie->titolo }}</p>
<input type="text" name="name" value="{{ $movie->anno }}">
<ul>
  <li>{{ $movie->description }}</li>
  <li>{{ $movie->anno }}</li>
  <li>{{ $movie->voto }}</li>
</ul>
<a href="{{ route('movies.index') }}">Torna a index</a>
