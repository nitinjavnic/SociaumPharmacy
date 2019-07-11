<?php
include('header.php');
include('config.php');

?>

    <!-- page content -->
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
                            <h2>Lists <small>Doctor</small></h2>
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
                                    <th>First Name</th>
                                    <th>Address</th>
                                    <th>Qualification</th>
                                    <th>Specility</th>
                                    <th>Mobile No</th>
                                    <th>Dob </th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                <?php
                                $i=1;
                                $sql= "select * from doctor";
                                $query =mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($query))
                                {

                                    ?>

                                    <tr>
                                        <td>
                                            <label><?php echo $i++; ?></label>
                                        </td>

                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['qualification']; ?></td>
                                        <td><?php echo $row['speciality']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>


                                        <td>

                                            <a href="edit_doctor.php?doctor_id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="delete_doctor.php?doctor_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>


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
    <script>
        function myFunction() {
            confirm("Are You sure!");
        }
    </script>
    <!-- /page content -->


    <!-- footer content -->
<?php
include('footer.php');
?>