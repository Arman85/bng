<table class="table table-responsive" id="photos-table">
    <thead>
        <tr>
            <th>Path</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($photos as $photo)
        <tr>
            <td>{!! $photo->path !!}</td>
            <td>
                {!! Form::open(['route' => ['photos.destroy', $photo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('photos.show', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('photos.edit', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>