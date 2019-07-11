<?php
include('header.php');
include('config.php');

?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">


                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Button Example <small>Users</small></h2>
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

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>Date</th>
                                    <th>Employee Name</th>
                                    <th>Area Name</th>

                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                $i=1;
                                $sql= "select * from  tour_plan";
                                $query =mysqli_query($conn,$sql);
                                $expensedta ="";
                                while($row = mysqli_fetch_array($query))
                                {
                                    $expensedta= $row['employee'];

                                    ?>



                                    <tr>
                                        <td>
                                            <label><?php echo $i++; ?></label>
                                        </td>

                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $expensedta; ?></td>



                                        <td>
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash-o"></i>
                                            </button>
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
        </div>
    </div>
    <!-- /page content -->


    <!-- footer content -->
<?php
include('footer.php');
?>