
<li class="item">
  <div class="date">{{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</div><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="title">{{ $article->title }}</a>
  <div class="details">Por <a href="{{ url('admin/articles/author', $article->user->slug) }}">{{ $article->user->name }}</a>
@if(!is_null($article->tags()->first()))
 · Archivado en <a href="{{ url('admin/articles/tagged', $article->tags()->first()->slug) }}">{{ $article->tags()->first()->name }}</a>
@endif

  </div>
  <ul class="options">
    <li class="option">{!! Form::open(['url' => url('admin/articles', $article->slug), 'method' => 'DELETE']) !!}
      <button type="submit" class="link delete">Eliminar</button>{!! Form::close() !!}
    </li>
    <li class="option"><a href="{{ url('admin/articles/' . $article->slug . '/edit') }}" class="link edit">Editar</a></li>
  </ul>
</li>