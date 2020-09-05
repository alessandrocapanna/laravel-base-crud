<h1>sono il Movies views</h1>

@foreach ($movies as $movie)
  <p>{{ $movie->titolo }}</p>
  <ul>
    <li>Titolo: {{ $movie->titolo }}</li>
    <li>Description: {{ $movie->description }}</li>
    <li>Voto: {{ $movie->voto }}</li>
    <li>Anno: {{ $movie->anno }}</li>
    <li>Id: {{ $movie->id}}</li>

    <li>
      <a href="{{ route('movies.show' , $movie->id) }}">ddettagli</a>
      <a href="{{ route('movies.edit' , $movie->id) }}">modifica</a>
      <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
         @csrf
         @method('DELETE')
         <input type="submit" value="Elimina">
      </form>
    </li>
  </ul>


@endforeach
<a href="{{ route('movies.create' , $movie->id) }}">crea nuovo</a>
