<?php
// Database config file

$editorContent = $statusMsg = '';


// If the form is submitted
if(isset($_POST['submit'])){
    //Get editor content
    $editorContent = $_POST['editor'];

    //Check if content is empty
    if(!empty($editorContent)){
        ///Insert editor content into the database Obviously these values will change to the attributes in my database
        // editor will be module. Content will be content of the module. There will a place for name and image as well
        $insert = $db->query("INSERT INTO editor (content,created) VALUES ('".$editorContent."', NOW())");

        if($insert){
            $statusMsg = "The editor content has been inserted successfully.";
        }
        else{
            $statusMsg = "A problem has occurred while trying to insert the module into the database.";
        }
    }
    else{
        $statusMsg = "There is no content for this module. Please add some content into the editor";
    }
}