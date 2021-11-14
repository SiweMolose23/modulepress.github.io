 <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th> 
          </tr>
      </thead>
        <tbody>
            @foreach ($users as $user)   

          <tr id="search_list">
           <td>{{ $user->name }}</td>
           <td>{{ $user->email}}</td>
           <td>
             @if($user->user_role ===0)
             Admin
             @elseif ($user->user_role ===1)
             Lecturer
             @elseif ($user->user_role ===2)
            Student
            @endif
            </td>
           {{-- <td>
           <a class="btn btn-sm btn-info" href="{{ url('preview/'.$module->module_id) }}">Preview</a>   
           <a class="btn btn-sm btn-info" href="{{ url('update/'.$module->module_id) }}" >Edit</a>   
           <a class="btn btn-sm btn-danger" onclick="deleteFunction(event)"href="{{ url('destroy/'.$module->module_id) }}">Delete</a>
           </td> --}}
          </tr> 
          @endforeach
        </tbody>
      </table>

      <script>
  function deleteFunction(e) {
  var txt;
  var r = confirm("Are you sure you want to delete this module. This action cannot be reversed!");
  if (r == false) {
    e.preventDefault();
   } 
  else { }
        }
        </script>

       
