<!-- Start right Content here -->
<?php include_once('header.php');
 if(isset($_REQUEST["classes_id"]))
 {  
   $classes_id = $_REQUEST["classes_id"];
   $ob = get_classes_by_id($classes_id);
   
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
                        <form action="classes.php" style="border:1px solid #ccc" enctype="multipart/form-data" method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-t-0 m-b-30">Add Classes</h4>

                                            <form class="form-horizontal" role="form">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="title">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?php if(isset($ob["title"])){echo $ob["title"];}?>" name="title">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="Description">Description</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="desc" value="<?php if(isset($ob["desc"])){echo $ob["desc"];}?>"class="form-control" placeholder="Description">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="age">Age Of Kids</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?php if(isset($ob["age"])){echo $ob["age"];}?>" name="age">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="Total Seats">Total Seats</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="seats" value="<?php if(isset($ob["seats"])){echo $ob["seats"];}?>"class="form-control" placeholder="Total Seats">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="Class Time">Class Time</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="time" value="<?php if(isset($ob["time"])){echo $ob["time"];}?>"class="form-control" placeholder="Class Time">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="Tution Fee">Tution Fee</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="<?php if(isset($ob["tution_fee"])){echo $ob["tution_fee"];}?>" name="tution_fee">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="image">Image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="image" name="image">
                                                        <div><img src="classes_images/<?php if(isset($ob["image_name"])){ echo $ob['image_name'];}?>" width="80" height="50"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                    <input type="hidden" name="classes_id" value="<?php if(isset($classes_id)){ echo $classes_id;} ?>">
                                                    <input type="submit" value="submit" name="update_classes"> 
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
                    ?? 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

            <?php include_once('footer.php');?>