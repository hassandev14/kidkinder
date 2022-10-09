<!-- Start right Content here -->
<?php include_once('header.php');
 if(isset($_REQUEST["teacher_id"]))
 {  
   $teacher_id = $_REQUEST["teacher_id"];
   $ob = update_teacher($teacher_id);
  //dd($teacher_id);
 }
?>
<!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Teachers </h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                        <form action="teachers.php" style="border:1px solid #ccc" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-t-0 m-b-30">Add Teachers</h4>

                                            <form class="form-horizontal" role="form">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="teacher_name">Teacher Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?php if(isset($ob["teacher_name"])){echo $ob["teacher_name"];}?>" id="teacher_name" name="teacher_name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="teacher_subject">Teachers Subject</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" id="teacher_subject" name="teacher_subject" value="<?php if(isset($ob["teacher_subject"])){echo $ob["teacher_subject"];}?>" class="form-control" placeholder="teacher_subject">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="image_name">Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" name="image" id="image">
                                                        <div><img src="teachers_images/<?php if(isset($ob["image_name"])){ echo $ob['image_name'];}?>" width="80" height="50"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                      <input type="submit" value="submit" name="update_teacher">
                                                      <input type="hidden" value="" name="$teacher_id">
                                                      
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                                </div> <!-- col -->
                            </div> 
                              </form><!-- End row -->



                        </div><!-- container-fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

            <?php include_once('footer.php');?>