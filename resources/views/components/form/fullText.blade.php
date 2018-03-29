<div class="form-group">
    {{ Form::label($name, ucfirst($name), ['class' => 'control-label']) }}
    {{ Form::text($name, $value, array_merge(['class' => 'form-control', 'placeholder' => $placeholder], $attributes)) }}
</div>