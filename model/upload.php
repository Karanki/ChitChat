<?php


        var_dump($_POST);
      var_dump($_FILES);
     
        if(is_dir("../img/")){
            mkdir("../img/1", 0775);
        
 move_uploaded_file($_FILES["images"]["tmp_name"][0], "../img/avatar.jpg");
        }
       
?>