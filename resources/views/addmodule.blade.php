<?php
//Form submission script
include_once('../submit.php');


//Test DB connection

?>


@include('master')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Module</title>
  
    <!-- CKEditor Library -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
 <!-- Status Message -->
 <div id="content">
<?php
if(!empty($statusMsg)){?>
<p class="stmsg"><?php echo $statusMsg;?></p>
<?php }
?>
    <!-- Module Title -->
 <form method="post" action="">
     <textarea name>

 </form>
<div class="container">
    <div class= "ed-frm">
 <form method="post" action="">
    <textarea name="editor" id="editor" rows="10" cols="80">
    </textarea>
    <input type="submit" name="submit" value="submit">       
</form>
    </div>


    <?php if(!empty($editorContent)){ ?>
        <div class="ed-cont">
            <h4>Inserted Content</h4>
            <?php echo $editorContent; ?>
        </div>
        <?php } ?>
</div>

<script>
    CKEDITOR.replace('editor');
    </script>
 </div>
</body>
</html>

