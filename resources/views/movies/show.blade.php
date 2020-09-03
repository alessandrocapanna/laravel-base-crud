<h1>sono lo show </h1>
<p>{{ $movie->titolo }}</p>
<ul>
  <li>{{ $movie->description }}</li>
  <li>{{ $movie->anno }}</li>
  <li>{{ $movie->voto }}</li>
</ul>
<a href="{{ route('movies.index') }}">Torna a index</a>
