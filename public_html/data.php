<!DOCTYPE html>
<html>
    <head>
        <title>Chart - Gráfico</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/moment-with-locales.js"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
        
    </head>
    <body>
        <div class="container">
            <h1>Date Pickers</h1>
            <div class="form-group col-lg-4">
                <div class="input-group date" id="data">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            //$(document).ready(function(){
            $(function(){
                $('#data').datetimepicker({
                    locale:"pt",
                    disabledDates: [
                        "09/07/2016","09/11/2016"
                    ]
                });
            })
        </script>
    </body>
</html>