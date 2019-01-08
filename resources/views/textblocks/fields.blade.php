<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control', 'style' => 'height: 65vh;', 'id' => 'editor']) !!}
</div>

<!-- <div class="form-group col-sm-12 col-lg-12">
	<div id="froala-editor">
	  <p>Click the Code View button to see the editor content's HTML.</p>
	</div>
</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('textblocks.index') !!}" class="btn btn-default">Cancel</a>
</div>
