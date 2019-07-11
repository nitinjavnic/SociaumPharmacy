<?php

include('header.php');
include('config.php');
session_start();
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
                            <h2>Area<small>Add Area</small></h2>
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

                            <form action="insert_area.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>



                                <span class="section">Area Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Region <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="region" required>
                                            <option>Select Region</option>
                                            <option>Jammu & Kashmir</option>
                                            <option>Himachal Pradesh</option>
                                            <option>Punjab</option>
                                            <option>Haryana</option>
                                            <option>Rajasthan</option>
                                            <option>UttarPradesh</option>
                                            <option>Uttarakhand</option>
                                            <option>Bihar</option>
                                            <option>Gujarat</option>
                                            <option>MadhyaPradesh</option>
                                            <option>Chattisgarh</option>
                                            <option>WestBengal</option>
                                            <option>Orissa</option>
                                            <option>Maharastra</option>
                                            <option>Goa</option>
                                            <option>Karnataka</option>
                                            <option>Kerela</option>
                                            <option>AndhraPradesh</option>
                                            <option>Telangana</option>
                                            <option>ArunachalPradesh</option>
                                            <option>Manipur</option>
                                            <option>Assam</option>
                                            <option>Mizoram</option>
                                            <option>Nagaland</option>
                                            <option>Sikkim</option>
                                            <option>Meghalaya</option>
                                            <option>Tripura</option>
                                            <option>Delhi</option>
                                            <option>Chandigarh</option>
                                            <option>Puducherry</option>


                                        </select>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Headquator <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="headquator" name="headquator" required="required" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Area<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="area" name="area" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
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