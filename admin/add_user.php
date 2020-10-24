<?php include("includes/header.php"); ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Navigation -->
        <?php include("includes/top_nav.php"); ?>
        
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>
        
<?php
   
$user = new User();
    
    if(isset($_POST['create'])){
if($user){
        $user->username = $_POST['username'];
        $user->first_name = $_POST['first_name'];
        $user->last_name = $_POST['last_name'];
        $user->password = $_POST['password'];
        $user->set_file($_FILES['user_image']);
        
        
        $user->save_user_and_image();
        
        
    }
}
    




?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            CREATE
                            <small>users</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                         <form action="" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                 <label for="username">Username</label>
                                 <input type="text" name="username" class="form-control">
                             </div>
                               
                               <div class="form-group">
                                   <input type="file" name="user_image">
                               </div>
                                <div class="form-group">
                                 <label for="FirstName">FirstName</label>
                                 <input type="text" name="first_name" class="form-control">
                             </div>
                                <div class="form-group">
                                 <label for="LastName">LastName</label>
                                <input type="text" name="last_name" class="form-control">
                             </div> 
                                <div class="form-group">
                                 <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control">
                             </div>
                             <input type="submit" value="Create" name="create" class="btn btn-primary pull-right">
                       
                    </form>
                    </div>
                    
                     

                    </div><!-- row -->
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>