<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Module Editor</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-3.4.1/css/bootstrap.min.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" data-type="keditor-style" />
        
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/keditor.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/keditor-components.css')}}" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/code-prettify/src/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/exampleK.css') }}" />
    </head>
    
    <body>
        <button type="reset" class="btn btn-outline-danger" aria-label="Close" id="prev" onclick="cancelFunction()" > X| CANCEL</button>
        @include('moduleform')
       
       
        <div data-keditor="html">
            @csrf
            <div id="content-area"></div>
        </div>
  
        <a class="saveButton" id="save" style="float: right"  onsubmit="validateForm(event)">Save</a>


        <script type="text/javascript" src="/plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="plugins/bootstrap-3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/plugins/ckeditor-4.11.4/ckeditor.js"></script>
        <script type="text/javascript" src="/plugins/formBuilder-2.5.3/form-builder.min.js"></script>
        <script type="text/javascript" src="/plugins/formBuilder-2.5.3/form-render.min.js"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="{{ asset('/dist/js/keditor.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/dist/js/keditor-components.js')}}"></script>
        <!-- End of KEditor scripts -->
        <script type="text/javascript" src="{{ asset('/plugins/code-prettify/src/prettify.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/js-beautify-1.7.5/js/lib/beautify.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/plugins/js-beautify-1.7.5/js/lib/beautify-html.js')}}"></script>
        <script type="text/javascript" src="{{ asset('/js/exampleK.js') }}"></script>
        <!-- Start of IntroJS scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js" integrity="sha512-Q5ZL29wmQV0WWl3+QGBzOFSOwa4e8lOP/o2mYGg13sJR7u5RvnY4yq83W5+ssZ/VmzSBRVX8uGhDIpVSrLBQog==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs-rtl.min.css" integrity="sha512-VwsKKwi99ZnRScgAkJ+ISGNolfoq+ic/mzJfhZWQ1xwfcbLZzLnHDoERYEppL25Okf+wEI/nDhHogudTa/YkWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs.min.css" integrity="sha512-631ugrjzlQYCOP9P8BOLEMFspr5ooQwY3rgt8SMUa+QqtVMbY/tniEUOcABHDGjK50VExB4CNc61g5oopGqCEw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs.min.css.map"></script>
        <script type="text/javascript" src="{{ asset('/js/tutorial.js') }}"></script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            </script>
        <script type="text/javascript" data-keditor="script">
            $(function () {
                $('#content-area').keditor();
                $("#save").click(function(){
                    //Still need to check if person is logged or not. Continue video 4
                  var url = '{{ url("/add") }}';
                  url = url.replace(':code',code);
                    $('#content-area').keditor('getContent');
                    $.ajax({ 
                        type: 'post',
                        url: url,         
                        data: {
                        title:$('#title').val(),
                        code: $('#code').val(),
                        catergory: $('#categoryOption').val(),
                        content: $('#content-area').keditor('getContent')                                
                                },
                                success: function(data){
                                    console.log($('content-area').keditor('getContent'));
                                    window.alert("Module successfully created");
                                   // alert("Module successfully created"); 
                                    window.location = "http://127.0.0.1:8000/mymodules"
                                },
                                error: function(data){
                                    console.log(data);
                                    window.alert("Module not successfully created. Please add content to the page");
                                    //alert("Module was not successfully created"); 
                                   // console.log(code);
                                    //console.log(data)
                                }
                    })
                })
            });
        </script>
<script type="text/javascript">
        function validateForm(event) {
    let name = document.forms["moduleForm"]["title"].value;
    let code = document.forms["moduleForm"]["code"].value;
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
        return false;
     }
    }
            </script>
<script>
function cancelFunction() {
  var txt;
  var r = confirm("Are you sure you want to cancel. All unsaved data will be lost");
  if (r == true) {
    window.history.back();
  } else {
  }
}      
</script>
<script>
function saveProgress(){
    window.alert("You have to complete the new module first before you can save progress");
}
    </script>
    </body>
</html>
