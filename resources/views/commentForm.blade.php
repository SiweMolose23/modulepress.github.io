@php
    use App\Http\Controllers\CommentController;
@endphp

<button role ="button" class="btn btn-warning" id="commentButton" onclick="showCommentForm()">Show Comments</button> 

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
   <form action="comment" id="commentForm" name="commentForm" style="display: none" method = "post" >

    @csrf

    <label for="title" class="formLabels" >Tell Us What You Think</label><br/>
    <textarea class="form-control" rows="5" cols="35" id="comment"></textarea>
    <button type="button" class="btn btn-success" style="float:left;" onclick ="submitComment()">Submit Comment</button>
    
    </select>
    {{-- <label for="desc">Module Description</label><br/>
    <input type="text" id="desc" name="desc" value=""><br/> --}}

    {{-- <button type="submit" role ="button" class="btn btn-success" href="/build" onclick="createModule"></button> --}}
   </form>

    <script>
        //This function will create the form to enter the module Title, Code and enters those details into 
        //database
        function showCommentForm() {
          var x =document.getElementById("commentForm");
          var button =document.getElementById("commentButton");
          if(x.style.display === "none"){
          document.getElementById("commentForm").style.display = "block";
          document.querySelector('#commentButton').innerHTML = 'Hide Comments';
          console.log("show");
          }
          else{
            x.style.display = "none";
            console.log("hide");
            document.querySelector('#commentButton').innerHTML = 'Show Comments';
            button.innerHTML("Show Comments");
          }
        }

        </script> 
