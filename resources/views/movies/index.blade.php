<h1>sono il Movies views</h1>

@foreach ($movies as $movie)
  <p>{{ $movie->titolo }}</p>
  <ul>
    <li>{{ $movie->titolo }}</li>
    <li>{{ $movie->description }}</li>
    <li>{{ $movie->voto }}</li>
    <li>{{ $movie->anno }}</li>
    <li>{{ $movie->id}}</li>

    <li><a href="{{ route('movies.show' , $movie->id) }}">ddettagli</a> </li>
    <li><a href="{{ route('movies.edit' , $movie->id) }}">modifica</a> </li>
  </ul>

@endforeach
<a href="{{ route('movies.create' , $movie->id) }}">crea nuovo</a> 
