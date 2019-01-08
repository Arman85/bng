<table class="table table-responsive" id="messages-table">
    <thead>
        <tr>
            <th>№</th>
            <th>Дата</th>
        <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{!! $message->id !!}</td>
            <td>{!! $message->created_at !!}</td>
           <td>
               <a href="{{ route('showMessage', [$message->id]) }}" class='btn btn-default btn-xs glyphicon glyphicon-eye-open'></a>
           </td>
        </tr>
    @endforeach
    </tbody>
</table>