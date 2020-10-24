<?php include("includes/header.php"); ?>
       <?php if($session->is_signed_in()) {redirect("login.php");} ?>
    <?php 

$message = "";
if(isset($_FILES['file'])) { 
    
    

$photo = new Photo();
$photo->title = $_POST['title'];
$photo->set_file($_FILES['file']);

if($photo->save()) {

$message = "Photo $photo->filename uploaded sucessfully"; 


} else {

$message = join("<br>", $photo->errors);


}




}






 ?>
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
                            Uploads
                            <small>Subheading</small>
                        </h1>
                        <div class="col-md-6">
                        <p class="bg-success"><?php echo $message; ?></p>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <input type="file" name="file">
                            </div>
                            
                            
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            
                        </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>