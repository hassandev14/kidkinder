<!-- Start right Content here -->
<?php include_once('header.php');


$ob_data = $conn->query("select * from contact_us");
$objects = get_single_data($ob_data);
$num_of_objects = count($objects);
?>
<!-- Start right Content here -->

<div class="content-page">
<!-- Start content -->
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">Teachers Data</h4>
        </div>
    </div>

    <div class="page-content-wrapper ">

        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-b-30 m-t-0">Buttons Example</h4>

                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Address</th>
                                        <th>E-Mail</th>
                                        <th>Phone</th>
                                        <th>Opening Hour</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        foreach($objects as $object)
                                        {
										?>
                                    <tr>
                                        <td><?php echo $object["address"];?></td>
                                        <td><?php echo $object["email"];?></td>
                                        <td><?php echo $object["phone"];?></td>
                                        <td><?php echo $object["opening_hour"];?></td>
                                        <td>
                                      <a href="update_teacher.php?contact_id=<?php echo $object["contact_id"];?>"><i class= "fas fa-edit"></i></a> 
                                      <a href="delete_techer.php?contact_id=<?php echo $object["contact_id"];?>&delete=1"><i class="fas fa-trash"></i></a> 
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
    ?? 2016 - 2018 Appzia - All Rights Reserved.
</footer>

</div>
<!-- End Right content here -->

<?php include_once('footer.php');?>