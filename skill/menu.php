<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - Bootsnipp.com</title>
    <link href="3.0.3a/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        margin-top: 20px;
        }
    </style>
    <script type="text/javascript" src="3.0.3a/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="3.0.3a/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
    </head>
    <body>
    
    <link href="3.0.3a/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="3.0.3a/js/bootstrap.min.js"></script>
    <script src="3.0.3a/js/jquery-1.11.1.min.js"></script>
    <h1>Hello, world!</h1>
    
    <!-- Button trigger modal -->
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body" >
            <?php 
                include("test.html");
            ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    </body>
</html>