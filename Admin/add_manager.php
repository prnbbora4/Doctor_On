<?php require_once('header.php'); ?>

    <section class="content-header">
        <div class="content-header-left">
            <h1>Add Manager</h1>
        </div>
        <!--    <div class="content-header-right">-->
        <!--        <a href="product.php" class="btn btn-primary btn-sm">View All</a>-->
        <!--    </div>-->
    </section>


    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <form class="form-horizontal" action="add_manager.php" method="post">

                    <div class="box box-info">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Manager Name <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Gender <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="radio" name="gender"  value="female"> Female <br>
                                    <input type="radio" name="gender"  value="male"> Male

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">DOB <br></label>
                                <div class="col-sm-4">
                                    <input type="date" name="dob" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Contact no <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="number" name="contact" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Address <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Username <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password <span>*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" name="password" class="form-control">
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
    $gender=mysqli_real_escape_string($db,$_POST['gender']);
    $dob=mysqli_real_escape_string($db,$_POST['dob']);
    $contact=mysqli_real_escape_string($db,$_POST['contact']);
    $address=mysqli_real_escape_string($db,$_POST['address']);
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $region=mysqli_real_escape_string($db,$_POST['region']);

    print_r($username);
    $query = "SELECT * FROM manager WHERE username = '$username'";
    $result=mysqli_query($db,$query);
    if($result)
    {

        if( mysqli_num_rows($result) > 0)
        {

            echo '<script language="javascript">';
            echo 'alert("Username already exists")';
            echo '</script>';
        }

        else
        {

            //Create User
            //$password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO manager(name, gender, dob, contact, address, username, password, region) VALUES('$name','$gender','$dob', '$contact', '$address', '$username', '$password', '$region')";
            mysqli_query($db,$sql);
            //$_SESSION['email']=$email;
            //print_r($sql);
            //print_r($password);
            header("location:add_manager.php");  //redirect index page

        }
    }
}

