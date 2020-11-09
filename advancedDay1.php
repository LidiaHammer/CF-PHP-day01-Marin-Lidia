<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced</title>
</head>
<body>
  <?php 

  $celsius = 60;
  $fahrenheit = 111;
  
  // function CtoF($c){
  //     $f = $c * (9/5) + 32;
  //     echo "{$c}° Celsius = {$f}° Fahrenheit </br>";
  // }
  // CtoF($celsius);


  function FtoC($f){
      $c = ($f - 32) * (5/9);
      echo "{$f}° Fahrenheit = {$c}° Celsius </br>";
      if ($c >= 0 && $c <= 5){
          echo "Very cold </br>";
          echo "<img src='https://i.pinimg.com/originals/65/a7/2f/65a72fb0c878e2aa7a8bf93b385b6a9a.jpg' style='height: 25em; width: auto;'>"; 
      }
      else if ($c >= 6 && $c <= 10){
          echo "Cold </br>";
          echo "<img src='https://i.pinimg.com/originals/0f/0f/51/0f0f5162113f31445f4c011c3493943e.jpg' style='height: 25em; width: auto;'>";
      }
      else if ($c >= 11 && $c <= 15){
          echo "Pleasant </br>";
          echo "<img src='https://static.toiimg.com/photo/77886401.cms' style='height: 25em; width: auto;'>";
      }
      else if ($c >= 16 && $c <= 20){
          echo "Warm </br>";
          echo "<img src='https://i.chzbgr.com/full/522212096/hB9682F98/i-has-a-warm' style='height: 25em; width: auto;'>";
      }
      else if ($c >= 21){
          echo "Hot </br>";
          echo "<img src='https://www4.pictures.zimbio.com/mp/VZZWTBxL4g8x.jpg' style='height: 25em; width: auto;'>";
      }
      else {
          echo "Temperature is too low...";
      }
  }
  FtoC($fahrenheit);



  ?>
</body>
</html>