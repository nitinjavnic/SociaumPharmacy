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
                            <h2>Tour Plan<small>Add Tour Plan</small></h2>
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

                            <form action="insert_tourplan.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>



                                <span class="section">TourPlan Info</span>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Select Date <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Employee <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control geettingFEED" name="employee">
                                            <option value="">Select Employee</option>
                                            <?php
                                            $query= "select user_id,first_name from users ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['user_id']; ?>"><?php echo $row_head['first_name']; ?></option>

                                            <?php  } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Area <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" id="area" name="area">

                                        </select>

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
<script>
    $(".geettingFEED").change( function (event) {
        var user_id = $(this).val();

        $.ajax({
            url: 'getarea.php',
            type: 'POST',
            data: {userId: user_id},
            cache: false,
            async: true,
            success: function(response){
             //alert(response);
                $.each(JSON.parse(response), function(i, item) {
                    var areaName = item.area_name;
                    var id = item.id;
                    $("#area").append("<option value="+ id +">" + areaName + "</option>");
                });

            },

            error: function (xhr, ajaxOptions, thrownError) {
            }

        });


    });

</script>
<?php
include('footer.php');
?>