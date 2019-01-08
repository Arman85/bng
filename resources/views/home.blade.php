@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    <a href="{!! route('messagesIndex') !!}"><i class="fa fa-edit"></i><span>Сообщения</span></a><br>



    <a href="{!! route('consultancesIndex') !!}"><i class="fa fa-edit"></i><span>Консультации</span></a>


    <a href="{!! route('reviewsIndex') !!}"><i class="fa fa-edit"></i><span>Отзывы</span></a>




</ul>

    </div>
</div>
@endsection
