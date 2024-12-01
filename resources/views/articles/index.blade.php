@extends("layouts.app")

@section("content")
    <div class="container" style="max-width: 800px">
        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h3 class="h4">{{ $article->title }}</h3>
                    <div class="text-muted">
                        {{ $article->created_at }}
                    </div>
                    <div>
                        {{ $article->body }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection








{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Article List</h1>
    <ul>
        @foreach($articles as $article)
            <li>{{ $article['title'] }}</li>
        @endforeach    
    </ul>
</body>
</html> --}}

    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

