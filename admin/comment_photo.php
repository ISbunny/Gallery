<?php include("includes/header.php"); ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <!-- Navigation -->
        <?php include("includes/top_nav.php"); ?>
        
            <?php
            if(empty($_GET['id'])){
                redirect("photo.php");
            }
            
            
            ?>
            
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
                            Comments
                            <small>Subheading</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                
                    <div class="col-md-12">
                          
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info">
                               <tr>
                               <th>ID</th>
                                <th>PHOTO ID</th>
                                
                                <th>AUTHOR</th>
                                <th>BODY</th>
                                
                                </tr>
                            </thead>
                            <?php $comments = Comment::find_the_comments($_GET['id']); ?>
                            <?php foreach($comments as $comment): ?>
                            <tr class="bg-success">
                            <td><?php echo $comment->id; ?></td>
                                <td><?php echo $comment->photo_id; ?></td>
                                <td><?php echo $comment->author; ?>
                                <div class="action_link">
                                    
                                    <a href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete</a>
                                </div>
                                </td>
                                <td><?php echo $comment->body; ?></td>
                                
                            </tr>
                             <?php endforeach; ?>
                        </table>
                               
                    </div>
                  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>