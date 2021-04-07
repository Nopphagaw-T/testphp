<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - Bootsnipp.com</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style> 
        body { margin-top: 20px; }
        #my  { overflow-y: auto; height:200px; }
    </style>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    </head>
    <body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
    <div class="row">
    <div class="col-xs-8">
    <div class="panel panel-info">
    <div class="panel-heading">
    <div class="panel-title">
    <div class="row">
    <div class="col-xs-6">
        <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
    </div>
    <div class="col-xs-6">
        <button type="button" class="btn btn-primary btn-sm btn-block">
            <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
        </button>
    </div>
    </div>
    </div>
    </div>
    <div class="panel-body">
    <div id="my">
        <?php 
        $mydb = new mysqli("localhost","root","","shopshock");
        $mydb->set_charset("utf8");
        $sql_command = "SELECT Product_code, Product_Name, Cost, Stock_Quantity from product";
        $result = $mydb->query($sql_command);
        $row = $result->fetch_all(MYSQLI_NUM);
        for($i=0;$i<sizeof($row);$i++){
            showproduct("", $row[$i][0], $row[$i][1], $row[$i][2]);
        }

        function showproduct($img, $product_code, $product_name, $product_price){
            ?>
            <!-- -->
            <div class="row">
                <div class="col-xs-2"><img class="img-responsive" src="<?php echo $img; ?>">
                </div>
                <div class="col-xs-4">
                    <h4 class="product-name"><strong><?php echo $product_code; ?></strong></h4>
                    <h4><small><?php echo $product_name ?></small></h4>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-6 text-right">
                        <h6><strong><?php echo $product_price; ?><span class="text-muted"> x </span></strong> </h6>
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control input-sm" value="1">
                    </div>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-link btn-xs">
                            <span class="glyphicon glyphicon-trash"> </span>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <!-- -->
        <?php 
        }
        ?>
    </div>
    <hr>
    <div class="row">
    <div class="text-center">
    <div class="col-xs-9">
        <h6 class="text-right">Added items?</h6>
    </div>
    <div class="col-xs-3">
        <button type="button" class="btn btn-default btn-sm btn-block">
            Update cart
        </button>
    </div>
    </div>
    </div>
    </div>
    <div class="panel-footer">
    <div class="row text-center">
    <div class="col-xs-9">
    <h4 class="text-right">Total <strong>$50.00</strong></h4>
    </div>
    <div class="col-xs-3">
    <button type="button" class="btn btn-success btn-block">
        Checkout
    </button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </body>
    </html>