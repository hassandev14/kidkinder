<!-- Start right Content here -->
<?php include_once('header.php'); 

   $ob = get_contact_by_id();  
   
?>
<!-- Start right Content here -->

<div class="content-page">
<!-- Start content -->
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Contact </h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

    <div class="container-fluid">
    <form action="function.php" style="border:1px solid #ccc" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-t-0 m-b-30">Edit Contact US</h4>

                        <form class="form-horizontal" role="form">
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="Address">Address</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php if(isset($ob["address"])){echo $ob["address"];}?>" name="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="Description">Description</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" name="desc"><?php if(isset($ob["desc"])){echo $ob["desc"];}?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="E-mail">E-mail</label>
                                <div class="col-sm-10">
                                 <input type="text" name="email" value="<?php if(isset($ob["email"])){echo $ob["email"];}?>" class="form-control">
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="Phone">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php if(isset($ob["phone"])){echo $ob["phone"];}?>" name="phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="Opening Hou">Opening Hour</label>
                                <div class="col-sm-10">
                          <input type="text" name="opening_hour" value="<?php if(isset($ob["opening_hour"])){echo $ob["opening_hour"];}?>"class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <input type="hidden" name="contact_id" value="<?php if(isset($ob['contact_id'])){ echo $ob['contact_id'];} ?>">
                                <input type="submit" value="submit" name="update_contact"> 
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