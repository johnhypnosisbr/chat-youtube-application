<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codestar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script> 
</head>

<body onload="LoadData()">

    <div class="container">
        <h1>Simple Chat System - johnhypnosisbr2023 </h1>
        <form name="frml" method="post">
            <div class="form-group">
                <label for="usr">Name:</label> 
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment">Message:</label>
                <textarea name="msg" class="form-control" rows="5"></textarea>
            </div>
            <input type="button" value="Send" id="btnSave" name="save" class="btn btn-primary">
        </form>
    </div>
    <hr>
    <div class="container">
        <h2>Messages</h2>
        <table class="table table-dark table-striped" id="myTable">
            <tbody id="record"></tbody>
        </table>
    </div>

</body>

</html>