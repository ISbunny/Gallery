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
                            Photos
                            <small>Subheading</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                
                    <div class="col-md-12">
                          
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info">
                               <tr>
                                <th>Image</th>
                                
                                <th>title</th>
                                <th>Description</th>
                                <th>Caption</th>
                                <th>FileName</th>
                                <th>Alternate Text</th>
                               
                                <th>Size</th>
                                <th>Comment Count</th>
                                </tr>
                            </thead>
                            <?php $comment = Photo::find_all(); ?>
                            <?php foreach($comment as $photo): ?>
                            <tr class="bg-success">
                                <td><img src="<?php echo $photo->picture_path(); ?>" class="img-thumbnail" id="img" alt="">
                                <div class="picture_link">
                                
                                       
                                       <a href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
                                       <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
                                       <a href="../photo.php?id=<?php echo $photo->id; ?>">View</a>
                                       
                                        
                                </div>
                                </td>
                                
                                <td><?php echo $photo->title; ?></td>
                                <td><?php echo $photo->description; ?></td>
                                <td><?php echo $photo->caption; ?></td>
                                <td><?php echo $photo->filename; ?></td>
                                <td><?php echo $photo->alternate_text; ?></td>
                                
                                <td><?php echo $photo->size; ?></td>
                                <td>
                                <a href="comment_photo.php?id=<?php echo $photo->id; ?>">
                                <?php 
                                    $comment = Comment::find_the_comments($photo->id);
                                    echo count($comment); ?>
                                    </a>
                                
                                </td>
                            </tr>
                             <?php endforeach; ?>
                        </table>
                               
                    </div>
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>