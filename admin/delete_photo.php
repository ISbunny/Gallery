<?php include("includes/init.php"); ?>



           <?php
            
            if(empty($_GET['id'])){
                redirect("photo.php");
            }
            $photo = Photo::find_by_id($_GET['id']);
            
            if($photo){
                $photo->delete_photo();
                redirect("photo.php");
            }
            
            
            ?>
           

