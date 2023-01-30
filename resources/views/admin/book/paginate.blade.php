<div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <th width="5%">ID</th>
      <th width="38%">Title</th>
      <th width="57%">Description</th>
      <th width="30%">Author</th>

     </tr>
     @foreach($bookdata as $row)
     <tr>
      <td>{{ $row->id }}</td>
      <td>{{ $row->book_name }}</td>
      <td>{{ $row->description }}</td>
      <td>{{ $row->author }}</td>

     </tr>
     @endforeach
    </table>

    {!! $bookdata->links() !!}

   </div>

