<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('photos.index') !!}" class="btn btn-default">Cancel</a>
</div>
