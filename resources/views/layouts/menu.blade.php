<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{!! route('messagesIndex') !!}"><i class="fa fa-edit"></i><span>Сообщения</span></a>
</li>

<li class="{{ Request::is('consultances*') ? 'active' : '' }}">
    <a href="{!! route('consultancesIndex') !!}"><i class="fa fa-edit"></i><span>Консультации</span></a>
</li>

<li class="{{ Request::is('textblocks*') ? 'active' : '' }}">
    <a href="{!! route('textblocks.index') !!}"><i class="fa fa-edit"></i><span>Блоки</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{!! route('reviewsIndex') !!}"><i class="fa fa-edit"></i><span>Отзывы</span></a>
</li>

<li class="{{ Request::is('photos*') ? 'active' : '' }}">
    <a href="{!! route('photos.index') !!}"><i class="fa fa-edit"></i><span>Изображения</span></a>
</li>

