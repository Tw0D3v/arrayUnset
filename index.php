<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

  $numArray = array();
  $copiaArray = $numArray;
  $numMayores = array();

for ($valores = 0; $valores<=10; $valores++) {
  $numRandom = rand(1,100);
  array_push($numArray, $numRandom);
}

foreach ($numArray as  $k=>$v){
  if($copiaArray[$k]< 50){
    unset($copiaArray[$k]);
    $numMayores[$v] = $copiaArray[$k];
  }
}


print_r($numArray);
echo"<br>";
print_r($copiaArray);
echo"<br>";
print_r($numMayores);
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