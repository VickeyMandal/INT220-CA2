<?php

if (isset($_POST['submit'])) {
    $ca1 = $_POST['ca1'];
    $ca2 = $_POST['ca2'];
    $final = $_POST['final'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Question 1</title>
</head>

<body>

    <form action="result.php" method="POST">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">CA 1 </label>
        </div>
        <div class="col-auto">
            <input type="text" name="ca1" class="form-control">
        </div>
        <div class="col-auto">
            <span class="form-text">
                Must be 0-30.
            </span>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">CA 2 </label>
        </div>
        <div class="col-auto">
            <input type="text" name="ca2" class="form-control">
        </div>
        <div class="col-auto">
            <span class="form-text">
                Must be 0-30.
            </span>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Final </label>
        </div>
        <div class="col-auto">
            <input type="text" name="final" class="form-control">
        </div>
        <div class="col-auto">
            <span class="form-text">
                Must be 0-15.
            </span>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>