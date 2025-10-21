<!DOCTYPE html>
<html>
    <head>
       <title>Create Article</title>
    </head>
    <body>
        <h1>Create Article</h1>
        @if ($errors->any())
            <div>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
@endif
    <form action="{{ route('articles.store') }}" method="POST">
@csrf
<div>
<label>Title:</label>
<input type="text" name="title" id="title" placeholder="Titre de l'article" required>
</div>
<div>
<label>Contenu :</label>
<textarea name="body" id="body" placeholder="Contenu de l'article" required></textarea>
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
<a href="{{ route('articles.index') }}">Back to Articles</a>
</body>
</html>