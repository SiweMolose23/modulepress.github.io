<!DOCTYPE html>
<html lang="en">
    <?php 
    foreach ($modules as $module) {
        $id = $module->module_id;
    }
    ?>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Module Editor</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/bootstrap-3.4.1/css/bootstrap.min.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" data-type="keditor-style" />
        
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/keditor.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/keditor-components.css')}}" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/code-prettify/src/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/exampleK.css') }}" />
    </head>
    
    <body>
            <button type="reset" class="btn btn-outline-danger" aria-label="Close" id="prev" onclick="cancelFunction()" > X| CANCEL</button>
            
        <div data-keditor="html">
            @csrf
            <div id="content-area">
             @foreach ($modules as $module) 
             {!! html_entity_decode($module->pagehtml) !!}
                      
             @endforeach
            </div>
        </div>
      <a class="saveButton" id="save" style="float: right"  >Save</a>
      {{-- <a class="saveButton" id="test" style="float: left"  >Test output</a> --}}
        
      <script type="text/javascript" src="/plugins/jquery-1.11.3/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="{{ asset('/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="/plugins/bootstrap-3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/plugins/ckeditor-4.11.4/ckeditor.js"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap-3.4.1/js/bootstrap.min.js') }}"></script>
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
  

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            </script>

        <script type="text/javascript" data-keditor="script">
 

            $(function () {
                var moduleid = <?php echo $id;?>;  
                $('#content-area').keditor();
                $("#save").click(function(){
                    //Still need to check if person is logged or not. Continue video 4
                  var url = '{{ url("/updateAction") }}';
                  var contentArray = $('#content-area').keditor('getContent', true);
                  var contentJoin = contentArray.join("");
                  document.getElementById("content-area").innerHTML += contentJoin;
                  console.log($('#content-area').keditor('getContent', true));
                    $.ajax({ 
                        type: 'post',
                        url: url,         
                        data: {
                        id:moduleid,
                        content: contentJoin                               
                                },
                                success: function(data){
                                    console.log(contentJoin);
                                    //window.alert("Module successfully updated.");
                                    alert("Module successfully updated"); 
                                    window.location = "http://127.0.0.1:8000/mymodules"
                             
                                },
                                error: function(data){
                                    console.log(data);
                                    
                                    //window.alert("Module could not be updated.");
                                    alert("Module could not be successfully updated. Please contact the administrator"); 
                                   // console.log(code);
                                    //console.log(data)
                                }
                    })
                })
            });
        </script>

<script>
     $(function () {
       var moduleid = <?php echo $id;?>;  
                var testArr =$('#content-area').keditor('getContent', true);
                $("#test").click(function(){
                    //Still need to check if person is logged or not. Continue video 4
                    console.log($('#content-area').keditor('getContent', true));
                    console.log(moduleid);
                })
            });
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
                $('#content-area').keditor();
                $("#saveProgress").click(function(){
                    //Still need to check if person is logged or not. Continue video 4
                var url = '{{ url("/updateAction") }}';
                  var contentArray = $('#content-area').keditor('getContent', true);
                  var contentJoin = contentArray.join("");
                  document.getElementById("content-area").innerHTML += contentJoin;
                  console.log($('#content-area').keditor('getContent', true));
                    $.ajax({ 
                        type: 'post',
                        url: url,         
                        data: {
                        id:moduleid,
                        content: contentJoin                                  
                                },
                                success: function(data){
                                    console.log($('content-area').keditor('getContent'));
                                    window.alert("Progess Saved");
                                },
                                error: function(data){
                                    console.log(data);
                                    window.alert("Progress not saved. Please contact the Administrator");
                                   
                                }
                    })
                })
                }
            </script>

            @include('inc.footer')
    </body>
</html>
