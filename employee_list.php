<?php
include('header.php');
include('config.php');

?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">


            </div>

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
                            <h2>Employee <small>List Employee</small></h2>
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
                                    <th>SNo.</th>
                                    <th>User Role</th>
                                    <th>Department</th>
                                    <th>Date of birth</th>
                                    <th>Id Proof </th>

                                    <th>First Name</th>
                                    <th>last Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile No</th>
                                    <th>Address</th>
                                    <th>Created on</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                $i=1;
                                $sql= "select * from users";
                                $query =mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($query))
                                {


                                    ?>



                                    <tr>
                                        <td>
                                            <label><?php echo $i++; ?></label>
                                        </td>

                                        <td>
                                            <?php
                                            if($row['role']==1){
                                                echo "Superadmin";
                                            }
                                            if($row['role']==2){
                                                echo "Manager";
                                            }
                                            if($row['role']==3){
                                                echo "Representative";
                                            }

                                            ?>
                                        </td>
                                        <td><?php echo $row['department']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['id_proof']; ?></td>

                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['created_on']; ?></td>

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

    <script> $(window).resize(function () { if ($.fn.dataTable) { $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust(); } }); </script>
    <!-- footer content -->
<?php
include('footer.php');
?>