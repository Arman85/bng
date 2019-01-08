<table class="table table-responsive" id="consultances-table">
    <thead>
        <tr>
            <th>№</th>
            <th>Дата</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($consultances as $consultance)
        <tr>
            <td>{!! $consultance->id !!}</td>
            <td>{!! $consultance->created_at !!}</td>
           <td>
               <a href="{{ route('showCons', [$consultance->id]) }}" class='btn btn-default btn-xs glyphicon glyphicon-eye-open'></a>
           </td>
        </tr>
    @endforeach
    </tbody>
</table>