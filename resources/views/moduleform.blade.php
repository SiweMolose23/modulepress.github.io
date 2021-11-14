@php
    use App\Http\Controllers\CatergoryController;
    $category = CatergoryController::index();
@endphp

<button role ="button"  class="btn btn-success"  onclick="showForm()">Hide Details</button> 

   {{-- Error checking --}}
   @if(Session::get('success'))
   <div class="alert alert-success">
       {{Session::get('success')}}
   </div>
   @endif

   @if(Session::get('fall'))
   <div class="alert alert-danger">
       {{Session::get('fail')}}
   </div>
   @endif
   {{-- Creating a new module form --}}
   <form action="add" id="moduleForm" name="moduleForm" style="display: block" method = "post" onsubmit="validateForm(event)" >

    @csrf

    <label for="title" class="formLabels" >Module Name</label><br/>
    <input type="text" id="title" name="title" value="" class="form-control form-control-lg" placeholder="Enter the Module Name" style = "font-size: 50px; height: 50px"><br/>

    <label for="code" class="formLabels">Module Code</label><br/>
    <input type="text" id="code" name="code" value="" class="form-control form-control-lg" placeholder="Enter the Module Code" style = "font-size: 50px; height: 50px"><br/>

    <label for="code" class="formLabels">Faculty</label><br/>
    <select name="categories" id="categories" class="form-control form-control-lg">
        <option value="">Select Faculty</option>
        @foreach ($category as $categories )
            <option value="{{ $categories->name }}"id="categoryOption">{{ $categories->name }}</option>
        @endforeach
    </select>
    {{-- <label for="desc">Module Description</label><br/>
    <input type="text" id="desc" name="desc" value=""><br/> --}}

    {{-- <button type="submit" role ="button" class="btn btn-success" href="/build" onclick="createModule"></button> --}}
   </form>

    <script>
        //This function will create the form to enter the module Title, Code and enters those details into 
        //database
        function showForm() {
          var x =document.getElementById("moduleForm");
          if(x.style.display === "none"){
          document.getElementById("moduleForm").style.display = "block";
          console.log("show");
          }
          else{
            x.style.display = "none";
            console.log("hide");
          }
        }

        function createModule() {
          
        }
        function validateForm(event){
/      
         var code = document.getElementById("code").value;
         var name= document.getElementById("title").value;
         if (name == "") {
            event.preventDefault();
             alert("Module name field cannot be empty");
             return false;
           
         } 
         if (code == "") {
            event.preventDefault();
             alert("Module code field cannot be empty");
             return false;    
         } 
        return limitChar(code);
     }
    
     function limitChar(value) {
         var 
    if (value.length != undefined && value.toString().length >=8) {
         return true;
     }
     else{
        event.preventDefault();
        alert("The Module Code cannot be less than 8 characters long");
     }
 }
        
        
        </script> 