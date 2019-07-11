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

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Assign <small>Doctor</small></h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="item form-group">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="assign_date" name="assign_date" required="required" placeholder="MM/DD/YYY" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>


                        <div class="col-sm-6 form-group">

                            <select class="form-control" id="employee" name="user_data"  required>
                                <option value="">Select Employee</option>
                                <?php
                                $sql="SELECT * FROM `users`";
                                $query = mysqli_query($conn ,$sql);
                                while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $row['user_id']; ?>"> <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></option>

                                    <?php

                                }
                                ?>

                            </select>
                        </div>
                        <div class="col-sm-6 form-group">

                            <select class="form-control" id="allocated_area" name="user_data"  required>
                                <option value="">Select Allocated Area</option>
                            </select>
                        </div>



                        <div class="x_content">

                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>First Name</th>
                                    <th>Address</th>
                                    <th>Qualification</th>
                                    <th>Specility</th>
                                    <th>Mobile No</th>
                                    <th>Dob </th>

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
                                        <td><input name="selector[]" value="<?php echo $row['id'] ?>" type="checkbox" /></td>

                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['qualification']; ?></td>
                                        <td><?php echo $row['speciality']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>


                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
                            <button type="button" id="save_value" class="btn btn-info">Assign</button>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <script>

        $(document).ready(function() {
            $('#employee').change(function(){
                var user_id = this.value;
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
                            $("#allocated_area").append("<option value="+ id +">" + areaName + "</option>");
                        });

                    },

                    error: function (xhr, ajaxOptions, thrownError) {
                    }

                });
            });
        });

        var date;
        $('#assign_date').on('change', function() {
           date = $(this).val();

        });

        var allemployee;
        $('#employee').on('change', function() {
            allemployee = this.value;

        });


        var allocated_area;
        $('#allocated_area').on('change', function() {
            allocated_area = this.value;

        });


        $(function(){
            $('#save_value').click(function(){
                var doctor_id = [];
                $(':checkbox:checked').each(function(i){
                    doctor_id[i] = $(this).val();

                });

                $.ajax({
                    url: 'save_assign_doctor.php',
                    type: 'POST',
                    data: {
                        date: date,
                        allemployee: allemployee,
                        allocated_area: allocated_area,
                        doctor_id: doctor_id,

                    },
                    cache: false,
                    async: true,
                    success: function(response){

                        console.log('Nitin tyagii',response);

                    },

                    error: function (xhr, ajaxOptions, thrownError) {
                    }

                });


            });
        });

    </script>
    <!-- /page content -->


    <!-- footer content -->
<?php
include('footer.php');
?>