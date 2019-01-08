<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Имя:') !!}
    <p>{!! $consultance->name !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Телефон:') !!}
    <p>{!! $consultance->phone !!}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'Город:') !!}
    <p>{!! $consultance->city !!}</p>
</div>

<!-- When Field -->
<div class="form-group">
    {!! Form::label('when', 'Когда позвонить:') !!}
    <p>{!! $consultance->when !!}</p>
</div>

<!-- Interest Field -->
<div class="form-group">
    {!! Form::label('interest', 'Что интересует:') !!}
    <p>{!! $consultance->interest !!}</p>
</div>

<!-- Lang Field -->
<div class="form-group">
    {!! Form::label('lang', 'Язык:') !!}
    <p>{!! $consultance->lang !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Статус:') !!}
    <p>{!! $consultance->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Дата:') !!}
    <p>{!! $consultance->created_at !!}</p>
</div>
