<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('author_id') ? 'has-error' : ''}}">
    {!! Form::label('author_id', 'Author Id', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('author_id', ['technology', 'tips', 'health'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>