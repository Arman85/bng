<table class="table table-responsive" id="textblocks-table">
    <thead>
        <tr>
            <th>№</th>
            <th>Блок</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($textblocks as $textblock)
        <tr>
            <td>{!! $textblock->id !!}</td>
            <td>{!! $textblock->title !!}</td>
            <td>
                {!! Form::open(['route' => ['textblocks.destroy', $textblock->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('textblocks.show', [$textblock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('textblocks.edit', [$textblock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>