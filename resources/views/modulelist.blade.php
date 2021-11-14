@section('title','Modules')
    <table class="table table-dark" style= "overflow-y: auto">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Module Code</th>
            <th scope="col">Options</th> 
          </tr>
      </thead>
        <tbody>
            @foreach ($modules as $module)     
          <tr>
           <td>{{ $module->module_name }}</td>
           <td>{{ $module->module_code }}</td>
           <td>
              @if(!empty($userID))
            <a class="btn btn-sm btn-secondary" href="{{ url('preview/'.$module->module_id) }}">Preview</a> 
              
              @else
                <a class="btn btn-sm btn-secondary" href="{{ url('previewGuest/'.$module->module_id) }}">View Module</a> 
              
            @endif 
            @if(!empty($userID))
           @if ($module->user_id  === $userID)   
            <a class="btn btn-sm btn-secondary" href="{{ url('update/'.$module->module_id) }}" >Edit</a>   
            <a class="btn btn-sm btn-danger" href="{{ url('destroy/'.$module->module_id) }}">Delete</a>
           @endif
           @endif
           </td>
          </tr> 
          @endforeach
        </tbody>
      </table>

       
