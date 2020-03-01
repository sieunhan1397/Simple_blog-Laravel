<div class="form-group">
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'required' => 'true']); !!}
</div>
<div class="form-group">
    {!! Form::label('content', 'Content'); !!}
    {!! Form::text('content', null, ['id' => 'content', 'class' => 'form-control', 'required' => 'true']); !!}
</div>

<div class="form-group">
    {!! Form::submit($btn_name, [ 'class' => 'btn btn-primary']) !!}
</div>