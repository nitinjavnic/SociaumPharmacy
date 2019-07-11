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
                            <h2>Area<small>Add Travel Cost</small></h2>
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

                            <form action="insert_travel_cost.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>

                                <span class="section">Travel Cost Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">From<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="from">
                                            <option value="">Select Region</option>
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">To<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="to">
                                            <option value="">Select Region</option>
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
                                    <label for="password" class="control-label col-md-3">Amount</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="amount" type="number" name="amount" class="form-control col-md-7 col-xs-12" required="required">
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