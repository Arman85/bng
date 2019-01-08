<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', '№:') !!}
    <p>{!! $review->id !!}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Отзыв:') !!}
    <p>{!! $review->text !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Дата:') !!}
    <p>{!! $review->created_at !!}</p>
</div>

