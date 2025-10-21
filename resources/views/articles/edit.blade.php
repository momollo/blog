<!DOCTYPE html>
<html>
<head>
<title>Edit Article</title>
</head>
<body>
<h1>Edit Article</h1>
@if ($errors->any())
<div>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('articles.update', $article->id) }}" method="POST">
@csrf
@method('PUT')
<div>
<label>Title:</label>
    <input type="text" name="title" id="title" value="{{ $article->title }}" required>
</div>
<div>
<label>Body:</label>
    <textarea name="body" id="body" required>{{ $article->body }}</textarea>
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
<a href="{{ route('articles.index') }}">Back to Articles</a>
</body>
</html>