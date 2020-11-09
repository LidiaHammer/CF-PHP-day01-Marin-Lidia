<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Challenge</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1 class="text-center border">My rental car service</h1>
    <div class="row">
<?php
$carArr = array(
    "1" => array(
        "model" => "Car One",
        "horsepower" => 100,
        "price" => 50,
        "location" => "Vienna",
        "available" => true
    ),
    "2" => array(
        "model" => "Car Two",
        "horsepower" => 110,
        "price" => 60,
        "location" => "Linz",
        "available" => true
    ),
    "3" => array(
        "model" => "Car Three",
        "horsepower" => 120,
        "price" => 70,
        "location" => "Graz",
        "available" => false
    ),
    "4" => array(
        "model" => "Car Four",
        "horsepower" => 130,
        "price" => 80,
        "location" => "Vienna",
        "available" => true
    ),
    "5" => array(
        "model" => "Car Five",
        "horsepower" => 140,
        "price" => 90,
        "location" => "Linz",
        "available" => false
    ),
    "6" => array(
        "model" => "Car Six",
        "horsepower" => 150,
        "price" => 100,
        "location" => "Graz",
        "available" => true
    ),
    "7" => array(
        "model" => "Car Seven",
        "horsepower" => 160,
        "price" => 110,
        "location" => "Vienna",
        "available" => false
    ),
    "8" => array(
        "model" => "Car Eight",
        "horsepower" => 170,
        "price" => 120,
        "location" => "Linz",
        "available" => true
    )
);
foreach ($carArr as $masterkey => $mastervalue)
{
    echo "<div class='card col-6'>
            <div class='card-body'>
            <h5 class='card-title'>".$masterkey."</h5>";
    foreach($mastervalue as $key => $value)
    {
        echo "<p class='card-text'>".$key." = ".$value . "</p>";
    }
    echo "</div></div>";
}
// <div class="card" style="width: 18rem;">
//   <img class="card-img-top" src="..." alt="Card image cap">
//   <div class="card-body">
//     <h5 class="card-title">Card title</h5>
// <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>    
//     <a href="#" class="btn btn-primary">Go somewhere</a>
//   </div>
// </div>
?>
    </div>
</div>
</body>
</html>