
<div id="blog" class="tabbed {{ (is_null($current) || $current == 'blog') ? 'active' : '' }}">{!! Form::model($setting, ['url' => url('admin/settings', $setting->id), 'class' => 'form settings-form', 'method' => 'PATCH','files' => true]) !!}
  <div class="group">
    {!! Form::label('title', 'Título', ['class' => 'label']) !!}
    {!! Form::text('title', null, ['class' => 'input']) !!}
  </div>
  <div class="group">
    {!! Form::label('description', 'Descripción', ['class' => 'label']) !!}
    {!! Form::textarea('description', null, ['class' => 'input autosize', 'size' => '50x3']) !!}
  </div>
  <div class="group">
    {!! Form::label('footer', 'Footer', ['class' => 'label']) !!}
    {!! Form::textarea('footer', null, ['class' => 'input autosize', 'size' => '50x3']) !!}
  </div>
  <div class="group">{!! Form::submit('Guardar', ['class' => 'btn blue submit-right']) !!}</div>{!! Form::close() !!}
</div>