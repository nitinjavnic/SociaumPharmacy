<?php
include('header.php');
include('config.php');
$doctor_id=$_GET['doctor_id'];
$query = "select * from doctor where id = $doctor_id";
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <?php if(!empty($_GET['message'])) { ?>
                    <?php  $message = $_GET['message']; ?>

                    <div class="alert alert-success">
                        <strong>Success!</strong><?php echo $message; ?>.
                    </div>

                <?php } ?>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Doctor<small>Edit Doctor</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form action="edit_save_doctor.php" class="form-horizontal form-label-left" method="post" novalidate enctype="multipart/form-data" >
                                <span class="section">Edit Doctor Info</span>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">First Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fname" name="fname" value="<?php echo $row['first_name']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                        <input type="hidden" name="doctor_id" value="<?php echo $row['id']; ?>">

                                    </div>
                                </div>



                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required"  name="address" class="form-control col-md-7 col-xs-12"><?php echo $row['address'] ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Qualification <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="qualification"  class="form-control col-md-7 col-xs-12"><?php echo $row['qualification'] ?></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Specialist</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="specialist" type="text" value="<?php echo $row['speciality']; ?>" name="specialist" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="mobile" class="control-label col-md-3">Mobile</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="mobile" type="number" name="phone" value="<?php echo $row['phone']; ?>" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Date of Birth</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="dob" type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('footer.php');
?>