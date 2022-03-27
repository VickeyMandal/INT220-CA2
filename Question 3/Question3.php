<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $cgpa = $_POST['cgpa'];
    $resume_name = $_FILES['resume']['name'];
    $resume_type = $_FILES['resume']['type'];
    $resume_temp_loc = $_FILES['resume']['tmp_name'];
    $resume_store = "Documents/" . $resume_name;
    $photo_name = $_FILES['photo']['name'];
    $photo_type = $_FILES['photo']['type'];
    $photo_temp_loc = $_FILES['photo']['tmp_name'];
    $photo_store = "Documents/" . $photo_name;

    if ($resume_type == "application/pdf" && $photo_type == "image/png") {

        move_uploaded_file($resume_temp_loc, $resume_store);
        move_uploaded_file($photo_temp_loc, $photo_store);
    } else {
        echo "Please upload correct file format";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
       
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Name </label>
            </div>
            <div class="col-auto">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

       
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Reg </label>
            </div>
            <div class="col-auto">
                <input type="number" name="regno" class="form-control">
            </div>
        </div>

       

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">CGPA </label>
            </div>
            <div class="col-auto">
                <input type="number" step="0.01" name="cgpa" class="form-control">
            </div>
        </div>

        
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Resume </label>
            </div>
            <div class="col-auto">
                <input type="file" name="resume" class="form-control">
            </div>
            <div class="col-auto">
                <span class="form-text">
                    Must be pdf.
                </span>
            </div>
        </div>
        

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Photo </label>
            </div>
            <div class="col-auto">
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="col-auto">
                <span class="form-text">
                    Must be png.
                </span>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>