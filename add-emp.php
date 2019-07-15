<?php
include('header.php');
include('config.php');
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
                            <h2>Employee<small>Add Employee</small></h2>
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

                            <form action="save_employee.php" class="form-horizontal form-label-left" method="post" novalidate enctype="multipart/form-data" >



                                <span class="section">Personal Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Role <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="role">
                                            <option value="">Select Role</option>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Representative</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Department <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="department" name="department" required="required" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">First Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fname" name="fname" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="lname" name="lname" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Date of Birth<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="dob" name="dob" required="required" placeholder="MM/DD/YYY" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">ID Proof <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="idproof" type="text" name="idproof"  class="optional form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" type="email" name="email"  class="optional form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" type="password" name="password"  class="optional form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Mobile</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="password" type="number" name="phone" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Sex</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="male" checked="checked">Male</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="female">Female</label>

                                </div>
                                </div>

                                <div class="item form-group">
                                    <label for="password" class="control-label col-md-3">Picture Upload</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="picture" type="file" name="picture" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Region <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="region">
                                            <option value="">Select Region</option>
                                            <?php
                                            $query= "select state from add_area ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['state']; ?>"><?php echo $row_head['state']; ?></option>

                                            <?php  } ?>
                                        </select>


                                </div>

                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">HeadQuator <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="headquator">
                                            <option value="">Select HeadQuator</option>
                                            <?php
                                            $query= "select headquator from add_area ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['headquator']; ?>"><?php echo $row_head['headquator']; ?></option>

                                            <?php  } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Area <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="area[]" multiple id="langOpt">
                                            <?php
                                            $query= "select area_id,area from add_area ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['area_id']; ?>"><?php echo $row_head['area']; ?></option>


                                            <?php  } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Address <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="textarea" required="required" name="address" class="form-control col-md-7 col-xs-12"></textarea>
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

<script>

    // Material Select Initialization
    $('select[multiple]').multiselect();
    var count = $("#mySelect :selected").length;

    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Area'

    });

</script>

<?php
include('footer.php');
?>