<div class="row"></div>
<div class="col-md-7">
 <!-- Id Field -->   
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $photo->id !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Filename:') !!}
    <p></p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $photo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $photo->updated_at !!}</p>
</div>


</div>
<div class="col-md-5">
    <img src="/img/uploads/{!! $photo->path !!}" alt="" style="width: 100%">
</div>
</div>