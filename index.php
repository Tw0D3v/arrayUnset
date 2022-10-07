<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

$arrayNum = Array();
$numMenores = array();


for ($valores = 0; $valores<=10; $valores++) {
  $numRandom = rand(1,100);
  array_push($arrayNum, $numRandom);
}
$copia = $arrayNum;

foreach ($arrayNum as $key=>$num){
    if ($copia[$key] <= 50){
        unset($copia[$key]);
          $numMenores[$num]=$copia[$key];
     
    }
}


print_r($numMenores);
echo "<br>";
print_r($copia);
echo "<br>";
print_r($arrayNum);
  ?> 

    <!--
foreach($items as $item){
    if( $item['sale'] == 0 && $item['onhand'] == 0) {
      array_slice($array, $item);
    }
  }
    
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
