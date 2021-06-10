<?php require_once('header.php'); ?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Add Clinic</h1>
    </div>
    <!--    <div class="content-header-right">-->
    <!--        <a href="product.php" class="btn btn-primary btn-sm">View All</a>-->
    <!--    </div>-->
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">

            <form class="form-horizontal" action="add_clinic.php" method="post">

                <div class="box box-info">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Clinic Name <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Address <br></label>
                            <div class="col-sm-4">
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Town<span>*</span><br></label>
                            <div class="col-sm-4">
                                <input type="text" name="town" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">City <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Contact no <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="contact" class="form-control">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Region <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="region" class="form-control">
                            </div>
                        </div>

                        <!--                        <div class="form-group">-->
                        <!--                            <label for="" class="col-sm-3 control-label">Featured Photo <span>*</span></label>-->
                        <!--                            <div class="col-sm-4" style="padding-top:4px;">-->
                        <!--                                <input type="file" name="p_featured_photo">-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                        <div class="form-group">-->
                        <!--                            <label for="" class="col-sm-3 control-label">Other Photos</label>-->
                        <!--                            <div class="col-sm-4" style="padding-top:4px;">-->
                        <!--                                <table id="ProductTable" style="width:100%;">-->
                        <!--                                    <tbody>-->
                        <!--                                    <tr>-->
                        <!--                                        <td>-->
                        <!--                                            <div class="upload-btn">-->
                        <!--                                                <input type="file" name="photo[]" style="margin-bottom:5px;">-->
                        <!--                                            </div>-->
                        <!--                                        </td>-->
                        <!--                                        <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>-->
                        <!--                                    </tr>-->
                        <!--                                    </tbody>-->
                        <!--                                </table>-->
                        <!--                            </div>-->
                        <!--                            <div class="col-sm-2">-->
                        <!--                                <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="submit">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>

            </form>


        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>


<?php
//session_start();
//connect to database
$db=mysqli_connect("localhost","root","","doctor_on");
if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $address=mysqli_real_escape_string($db,$_POST['address']);
    $town=mysqli_real_escape_string($db,$_POST['town']);
    $city=mysqli_real_escape_string($db,$_POST['city']);
    $contact=mysqli_real_escape_string($db,$_POST['contact']);


    //print_r($username);
    $query = "SELECT * FROM clinic WHERE contact = '$contact'";
    $result=mysqli_query($db,$query);
    if($result)
    {

        if( mysqli_num_rows($result) > 0)
        {

            echo '<script language="javascript">';
            echo 'alert("Already exists")';
            echo '</script>';
        }

        else
        {

            //Create User
            //$password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO clinic(name, address, town, city, contact, mid) VALUES('$name', '$address', '$town', '$city', '$contact', '')";
            mysqli_query($db,$sql);
            //$_SESSION['email']=$email;
            //print_r($sql);
            //print_r($password);
            header("location:add_clinic.php");  //redirect index page

        }
    }
}
