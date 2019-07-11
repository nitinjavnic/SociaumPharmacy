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
                            <h2>Maintain <small>Hierarchy</small></h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-sm-6 form-group">

                            <select class="form-control" id="superadmin" name="user_data"  required>
                                <option value="">Select SuperAdmin</option>
                                <?php
                                $sql="SELECT * FROM `users` where role ='1'";
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

                            <select class="form-control" id="manager" name="user_data"  required>
                                <option value="">Select Manager</option>
                                <?php
                                $sql="SELECT * FROM `users` where role ='2'";
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

                            <select class="form-control" id="rep" name="user_data"  required>
                                <option value="">Select Representative</option>
                                <?php
                                $sql="SELECT * FROM `users` where role =3";
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

                            <select class="form-control" id="area_id" name="area_id"  required>
                                <option value="">Select Area</option>
                                <?php
                                $sql="SELECT * FROM `add_area`";
                                $query = mysqli_query($conn ,$sql);
                                while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $row['area_id']; ?>"> <?php echo $row['area']; ?> <?php echo $row['last_name']; ?></option>

                                    <?php

                                }
                                ?>

                            </select>
                        </div>


                        <div class="x_content">


                            <button type="button" id="save_value" class="btn btn-info">ADD</button>

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
<script>

    var superadmin;
    $('#superadmin').on('change', function() {
        superadmin = this.value;
    });
    var manager;
    $('#manager').on('change', function() {
        manager = this.value;
        $.ajax({
            url: 'get_representative.php',
            type: 'POST',
            data: {
                manager: manager,
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
    var rep;
    $('#rep').on('change', function() {
        rep = this.value;
    });

    var area_id;
    $('#area_id').on('change', function() {
        area_id = this.value;
    });


    $(function(){
        $('#save_value').click(function(){

            $.ajax({
                url: 'save_hierarchy.php',
                type: 'POST',
                data: {
                    superadmin: superadmin,
                    manager: manager,
                    rep: rep,
                    area_id:area_id

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