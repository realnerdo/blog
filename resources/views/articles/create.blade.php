<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  </head>
  <body>
    <div class="row">
      <div class="column medium-12"></div>{!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
      <fieldset>
        <legend>CREATE ARTICLE</legend>
@include('articles.partials.form', ['submitButtonText' => 'Create Article'])

      </fieldset>{!! Form::close() !!}
    </div>
    <script src="{{ asset('js/magic.js') }}"></script>
  </body>
</html>