<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Start PHP</title>
</head>

<body>
    <div class="container text-center">
        <form class="form" action="site.php" method="get">
            <div class="form-group">
                <label for="inputOne">Input One</label>
                <input class="form-control" type="number" name="inputOne" id="inputOne">
            </div>
            <div class="form-group">
                <label for="inputTwo">Input Two</label>
                <input class="form-control" type="number" name="inputTwo" id="inputTwo">
            </div>
            <div class="form-group">
                <label for="operation">Action</label>
                <select name="operation" id="operation">
                    <option value="sum">Sum</option>
                    <option value="sub">Sub</option>
                    <option value="multi">Multiply</option>
                    <option value="divide">Division</option>
                </select>
            </div>
            <button class="btn btn-primary w-100" type="submit">Calculate</button>
        </form>
        <?php
        $action = $_GET["operation"];
        $inputOne = $_GET["inputOne"];
        $inputTwo = $_GET["inputTwo"];
        echo (int)$inputOne + (int)$inputTwo;
        ?>
    </div>
</body>

</html>