<?php include("includes/header.php"); ?>
<?php include("includes/photo_modal.php"); ?>
       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Navigation -->
        <?php include("includes/top_nav.php"); ?>
        
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>
        
<?php
    if(empty($_GET['id'])){
        redirect("user.php");
    }
$user = User::find_by_id($_GET['id']);
if($user){
    
    if(isset($_POST['update'])){
        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        
        
        $user->update();
        
    }
    
    if(isset($_POST['delete'])){
       if(!empty($_GET['id'])){
           $user->delete();
           redirect("user.php");
       }
    }
}
    




?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            UPDATE
                            <small>comments.php</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
        <div class="row">
            <div class="col-md-8">
                 <form action="" method="post">
                     <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>">
                     </div>

                       <div class="form-group">
                           <a href="#user-id" data-toggle="modal" data-target="#photo-modal"><img class="img-thumbnail" style="width:225px;" src="<?php echo $user->image_path_and_placeholder(); ?>" alt=""></a>
                       </div>
                        <div class="form-group">
                         <label for="FirstName">FirstName</label>
                         <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                     </div>
                        <div class="form-group">
                         <label for="LastName">LastName</label>
                        <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                     </div> 
                        <div class="form-group">
                         <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $user->password; ?>">
                     </div>
                     <a id="user-id" href="delete_user.php?id=<?php echo $user->id; ?>"><input type="submit" value="DELETE" class="btn btn-danger" name="delete"></a>
                     <input type="submit" value="Submit" name="update" class="btn btn-primary">

            </form>
            </div>
                    
                     

                    </div><!-- row -->
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>