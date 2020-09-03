<h1>sono il create</h1>
<form action="{{route('movies.store')}}" method="post">
@csrf
@method('POST')
<label for="title">titolo</label>
<input type="text" name="titolo" placeholder="titolo">

<label for="content">description</label>
<input type="text" name="description" placeholder="description">

<label for="content">voto</label>
<input type="text" name="voto" placeholder="voto">

<label for="content">anno</label>
<input type="text" name="anno" placeholder="anno">
<input type="submit" value="Invia">
</form>
