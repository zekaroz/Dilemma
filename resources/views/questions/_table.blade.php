<table class="table table-striped search-table">
    <thead>
    <th> Id </th>
    <th> Theme </th>
    <th> Description </th>
    <th> Realese Date </th>
    <th></th>
    </thead>
<tbody>
    @forelse( $questions as $question)
        <tr>
            <td>

                   {{ $question->id }}
            </td>
            <td>
                <a href="questions/{{$question->id}}/edit">
                   {{ $question->theme}}
                 </a>
            </td>
            <td>
               {{ $question->question}}
            </td>
            <td>
               {{ $question->release_date}}
            </td>
             <td>
                <button class="deleteQuestion" onclick="deleteQuestion({{ $question->id }});" type="button" name="button"> <i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">
                No records to show...
            </td>
        </tr>
    @endforelse
</tbody>
</table>
