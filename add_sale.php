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
                            <h2>Product<small>Add Product</small></h2>
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

                            <form action="save_sale_data.php" class="form-horizontal form-label-left" method="post" novalidate enctype="multipart/form-data" >

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Products<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control gettingProduct" name="product_id">
                                            <option value="">Select Product</option>
                                            <?php
                                            $query= "select * from product ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['id']; ?>"><?php echo $row_head['product_name']; ?></option>

                                            <?php  } ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Area<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control gettingProduct" name="area_id">
                                            <option value="">Select Area</option>
                                            <?php
                                            $query= "select * from add_area ";
                                            $result =mysqli_query($conn,$query);
                                            while($row_head = mysqli_fetch_array($result)){ ?>
                                                <option value="<?php echo $row_head['area_id']; ?>"><?php echo $row_head['area']; ?></option>

                                            <?php  } ?>
                                        </select>

                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Product Price<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="product_price" name="product_price" required="required" readonly class="form-control col-md-7 col-xs-12 priceproduct">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Product Qty<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="product_image" name="product_qty" required="required" class="form-control col-md-7 col-xs-12 product_qty">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Total Price<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="product_image" name="total_price" required="required" readonly class="form-control col-md-7 col-xs-12 total_price">
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
    var prduct_price
    $('.gettingProduct').on('change', function() {
       var product_id = this.value;

        $.ajax({
            url: 'get_product_price.php',
            type: 'POST',
            data: {
                product_id: product_id,
            },
            cache: false,
            async: true,
            success: function(response){
                $.each(JSON.parse(response), function(i, item) {
                    prduct_price = item.product_price;
                    $(".priceproduct").val(prduct_price);

                });

            },

            error: function (xhr, ajaxOptions, thrownError) {
            }

        });


    });
    $('.product_qty').on('input', function() {
        var productqty = $(".product_qty").val();
        var calculate = prduct_price*productqty;
        $(".total_price").val(calculate);
    });

</script>


<?php
include('footer.php');
?>