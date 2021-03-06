<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distance Between Cities</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="main">
        <div class="jumbotron">
            <div class="container-fluid">
                <h1>Distance Between Cities</h1>
                <p>Our app will help you colculate travelling distances.</p>
            </div>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="from" class="col-xs-2 control-label">From:</label>
                <div class="col-xs-10">
                    <input type="text" id="from" name="from" placeholder="Origin" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="to" class="col-xs-2 control-label">To</label>
                <div class="col-xs-10">
                    <input type="text" id="to" name="to" placeholder="Destination" class="form-control">
                </div>
            </div>
        </form>
        <div class="col-xs-offset-2 col-xs-10">
            <button class="btn btn-info btn-lg" id="submit">Submit</button>
        </div> 
        <div class="container-fluid">
            <div id="google-map" class="google-map">
            </div>
            <div id="output" class="output"></div>
        </div>
    </main>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>