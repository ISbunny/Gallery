<?php include("includes/header.php"); ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Navigation -->
        <?php include("includes/top_nav.php"); ?>
        
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            USERS
                            <small>Subheading</small>
                        </h1>
                        <div class="" style="margin:12px;">
                            
                        <a href="add_user.php" class="btn btn-primary">Add User</a>
                        </div>
                       
                    </div>
                </div>
                <!-- /.row -->
                
                    <div class="col-md-12">
                          
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info">
                               <tr>
                               <th>PHOTO</th>
                                <th>USERNAME</th>
                                
                                <th>FIRSTNAME</th>
                                <th>LASTNAME</th>
                               
                                </tr>
                            </thead>
                            <?php $users = User::find_all(); ?>
                            <?php foreach($users as $user): ?>
                            <tr class="bg-success">
                            <td><img src="<?php echo $user->image_path_and_placeholder(); ?>" style="width:225px;" alt=""></td>
                        
                                <td><?php echo $user->username; ?>
                                <div class="user">
                                
                                       
                                       <a href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>
                                       <a href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
                                       
                                        
                                </div></td>
                                <td><?php echo $user->first_name; ?></td>
                                <td><?php echo $user->last_name; ?></td>
                               
                                
                                
                            </tr>
                             <?php endforeach; ?>
                        </table>
                               
                    </div>
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>