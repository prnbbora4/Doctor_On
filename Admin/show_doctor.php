<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>All Doctor Details</h1>
    </div>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="30">SL</th>
                            <th width="180">Name</th>
                            <th width="80">Gender</th>
                            <th width="180">DOB</th>
                            <th width="100">Experience</th>
                            <th width="180">Specialization</th>
                            <th width="180">Contact</th>
                            <th width="180">Address</th>
                            <th width="180">Username</th>
                            <th width="100">Password</th>
                            <th width="100">Region</th>
                            <th width="100">Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        $statement = $pdo->prepare("SELECT * FROM Doctor order by DID ASC");
                        $statement->execute();
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            $i++;
                            ?>



<!--                            <tr class="--><?php //if($row['cust_status']==1) {echo 'bg-g';}else {echo 'bg-r';} ?><!--">-->
                                <tr>
                                    <td><?php echo $row['did']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['dob']; ?></td>
                                    <td><?php echo $row['experience']; ?></td>
                                    <td><?php echo $row['specialization']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><?php echo $row['region']; ?></td>

<!--                                <td>--><?php //if($row['cust_status']==1) {echo 'Active';} else {echo 'Inactive';} ?><!--</td>-->
<!--                                <td>-->
<!--                                    <a href="customer-change-status.php?id=--><?php //echo $row['cust_id']; ?><!--" class="btn btn-success btn-xs">Change Status</a>-->
<!--                                </td>-->
                                <td>
                                    <a href="#" class="btn btn-danger btn-xs" data-href="customer-delete.php?id=<?php echo $row['did']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
