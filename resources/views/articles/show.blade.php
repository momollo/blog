<!DOCTYPE html>
<html>
<head>
<title>Show Article</title>
</head>
<body>
<h1>{{ $article->title }}</h1>
<p>{{ $article->body }}</p>
<a href="{{ route('articles.index') }}">Back to Articles</a>
</body>
</html>
