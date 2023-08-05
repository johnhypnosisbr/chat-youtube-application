<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John ft. Codestar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/kitcode.js" crossorigin="anonymous"> </script>

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