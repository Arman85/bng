<table class="table table-responsive" id="reviews-table">
    <thead>
        <tr>
            <th>№</th>
            <th>Дата</th>
            <th colspan="3"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($reviews as $review)
        <tr>
            <td>{!! $review->id !!}</td>
            <td>{!! $review->created_at !!}</td>
            <td>
               <a href="{{ route('showReviews', [$review->id]) }}" class='btn btn-default btn-xs glyphicon glyphicon-eye-open'></a>
           </td>
        </tr>
    @endforeach
    </tbody>
</table>