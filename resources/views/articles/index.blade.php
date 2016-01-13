<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  </head>
  <body>
    <div class="row">
      <h1>Articles</h1>
    </div>
    <div class="row">
      <div class="column medium-12">
@if($articles)

            <ul class="disc">
@foreach($articles as $article)

                  <li><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></li>
@endforeach

            </ul>
@else

                <h4>There's not articles yet :(</h4>
@endif

      </div>
    </div>
    <script src="{{ asset('js/magic.js') }}"></script>
  </body>
</html>