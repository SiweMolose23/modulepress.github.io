@section('title','Modules')
    <table class="table table-dark" style= "overflow-y: auto">
        <thead>
          <tr>
            <th scope="col">Name</th>
            
          </tr>
      </thead>
        <tbody>
            @foreach ($comments as $comment)     
          <tr>
           <td>{{ $comment->comments }}</td>
           <td>   
            <a class="btn btn-sm btn-danger" href="{{ url('destroycomment/'.$comment->id) }}">Delete</a>    
           </td>
          </tr> 
          @endforeach
        </tbody>
      </table>

       
