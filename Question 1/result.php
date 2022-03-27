<?php

class Marks
{

    function __construct($x, $y, $z)
    {
        $this->ca1 = $x;
        $this->ca2 = $y;
        $this->final = $z;
    }

    function DsiplayMarks()
    {
        echo $this->ca1;
        echo $this->ca2;
        echo $this->final;
    }
}


class Calculation extends Marks
{

    function calculate_caweightage($ca1, $ca2)
    {
        $total = $ca1 + $ca2;
        //Maximum ca marks : 30 * 2 round to 100
        //Weightage : 50
        $pre_ca = $total*(100/60);
        $final_ca = $pre_ca/(100/50); 
        return $final_ca;
    }

    function finalweightage($final)
    {   //Maximum marks : 15
        //Weightage : 50
        $f = $final * 50/15;
        return $f;
    }

    function final_result($caw, $faw)
    {   
        $totalmarks = $caw + $faw;
        return $totalmarks;
    }
}

$obj = new Calculation($_REQUEST['ca1'],$_REQUEST['ca2'],$_REQUEST['final']);
$caw = $obj->calculate_caweightage($obj->ca1, $obj->ca2);
$faw = $obj->finalweightage($obj->final);
$finalResult = $obj->final_result($caw , $faw);
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Result</title>
</head>
<body>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">CA 1 </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=$obj->ca1?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 30.
            </span>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">CA 2 </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=$obj->ca2?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 30.
            </span>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">End Term </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=$obj->final?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 15.
            </span>
        </div>
    </div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">CA WEIGHTAGE </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=round($caw,0,PHP_ROUND_HALF_UP)?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 50.
            </span>
        </div>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">FINAL WEIGHTAGE </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=round($faw,0,PHP_ROUND_HALF_UP)?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 50.
            </span>
        </div>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">TOTAL </label>
        </div>
        <div class="col-auto">
            <input type="text" disabled class="form-control" value="<?=round($finalResult,0,PHP_ROUND_HALF_UP)?>">
        </div>
        <div class="col-auto">
            <span class="form-text">
               / 100.
            </span>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
