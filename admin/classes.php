<!-- Start right Content here -->
<?php include_once('header.php');
if(isset($_REQUEST["add_classes"]))
{
    add_classes();
}
if(isset($_REQUEST["update_classes"]))
{
    
    $teacher_id = $_REQUEST["classes_id"];
    $ob = update_classes($classes_id);
}

 $ob_data = $conn->query("select * from classes");
 $objects = get_db_data($ob_data);
 $num_of_objects = count($objects);
?>
<!-- Start right Content here -->

<div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Classes Data</h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-b-30 m-t-0">Classes Data</h4>

                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Titlt</th>
                                                        <th>Students Age</th>
                                                        <th>Tution Fee</th>
                                                        <th>image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                        <?php
                                                        foreach($objects as $object)
                                                        {?>
                                                    <tr>
                                                        <td><?php echo $object["title"];?></td>
                                                        <td><?php echo $object["desc"];?></td>
                                                        <td><?php echo $object["tution_fee"];?></td>
                                                        <td><img src="classes_images/<?php  echo $object['image_name'];?>" width="80" height="50"></td>
                                                        <td>
                                                      <a href="update_classes.php?classes_id=<?php echo $object["classes_id"];?>"><i class= "fas fa-edit"></i></a> 
                                                      <a href="delete_classes.php?classes_id=<?php echo $object["classes_id"];?>&delete=1"><i class="fas fa-trash"></i></a> 
                                                    </td>
                                                    </tr>
                                                    <?php }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div> <!-- End Row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->

            <?php include_once('footer.php');?>