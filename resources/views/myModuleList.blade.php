 <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Module Code</th>
            <th scope="col">Options</th> 
          </tr>
      </thead>
        <tbody>
            @foreach ($modules as $module)     
          <tr id="search_list">
           <td>{{ $module->module_name }}</td>
           <td>{{ $module->module_code }}</td>
           <td>
           <a class="btn btn-sm btn-secondary" href="{{ url('preview/'.$module->module_id) }}">Preview</a>   
           <a class="btn btn-sm btn-secondary" href="{{ url('update/'.$module->module_id) }}" >Edit</a>   
           <a class="btn btn-sm btn-danger" onclick="deleteFunction(event)"href="{{ url('destroy/'.$module->module_id) }}">Delete</a>
           </td>
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

       
