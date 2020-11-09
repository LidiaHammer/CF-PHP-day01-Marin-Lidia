<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exercise</title>
  <style>
  p {
    background-color: red ;
  }
  </style>
</head>
<body>
  <?php 
// basic1:
// $name = "Blabla";
// echo("$name");


// basic2:
// $d = date("D");
// if($d == "Mon"){
//     echo("Happy Monday!");
// }
// else {
//     echo ("Have a nice day!");
// }


// basic3:
// $d = date("D");
// if($d == "Mon"){
//     echo("Happy Monday!");
// }
// else if($d == "Tue"){
//     echo ("Happy Tuesday!");
// }
// else if($d == "Wed"){
//     echo ("Happy Wednesday!");
// }
// else if($d == "Thu"){
//     echo ("Happy Thursday!");
// }
// else if($d == "Fri"){
//     echo ("Happy Friday!");
// }
// else if($d == "Sat"){
//     echo ("Happy Saturday!");
// }
// else if($d == "Sun"){
//     echo ("Happy Sunday!");
// } 
// else{
//     echo("What day?");
// }


// basic 3 with switch command:
// $d = date("D");
// switch($d)
// {
// case "Mon":
//     echo("Happy Monday!");
//     break;
// case "Tue":
//     echo "Happy Tuesday!";
//     break;
// case "Wed":
//     echo "Happy Wednesday!";
//     break;
// case "Thu":
//     echo "Happy Thursday!";
//     break;
// case "Fri":
//     echo "Happy Friday!";
//     break;
// case "Sat":
//     echo "Happy Saturday!";
//     break;
// case "Sun":
//     echo "Happy Sunday!";
//     break;
// default:
// echo "What day?";
// }

// basic4:
// WHILE LOOP:
// $name = "Blablu";
// for($i = 0; $i < 50; $i++){
//     echo "$name </br>";
// }

// DOWHILE LOOP:
// $i = 0;
// while ($i < 50)
// {
//     echo "$name </br>";
//     $i++;
// }
// $i = 0;
// do{
//     $i++;
//     echo "$name </br>";
// }
// while ($i < 50);


// basic5:
// $numAr = array(1,2,3,4,5,6,7,8,9,10);
// foreach($numAr as $bla){
//     echo "{$bla}'s the number </br>";
// }

// bASIC6:
$chars = array(
  "Goku" => array(
      "hair" => "spikey",
      "power" => 9001
  ),
  "Vegeta" => array(
      "hair" => "widows peaks",
      "power" => 8999
  ),
  "Lunch" => array(
      "hair" => "long",
      "power" => 10000
  ),
  "Videl" => array(
      "hair" => "long",
      "power" => 1253
  ),
  "Chichi" => array(
      "hair" => "bun",
      "power" => 123478
  ),
  "Krillin" => array(
      "hair" => "none",
      "power" => 68465,
  ),
  "Mr. Satan" => array(
      "hair" => "fro",
      "power" => 9999999
  ),
  "Piccolo" => array(
      "hair" => "two wiggly thingies",
      "power" => 6356456
  )
);
foreach($chars["Goku"] as $bla){
  echo "$bla </br>";
}
echo $chars['Vegeta']['hair'];

  ?>

</body>
</html>