<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP </title>
</head>
<body>
    <div class="container">
        This is my first php website.
    </div> 
    
    <?php
      echo "\n This is printed using php.";
    ?>
     <?php
      echo "\n This is again printed using php.\n";
      $variable1=30;
      $variable2=20;
      echo "Variable1= ";
      echo $variable1; 
      echo"<br>";
      echo"Variable2= ";
      echo $variable2 ;
      echo"<br>";
      echo"Addition= ";
      //addition of two numbers
      echo $variable1 + $variable2;
      echo"<br>";
        $languages=array("Python","c++","java");
        echo sizeof($languages);
        for ($i=0; $i < 3; $i++) 
        { 
            echo"<br>";
            echo $languages[$i];
        }
        foreach ($languages as $value) {
            echo "<br>";
            echo "$value";
        }
    $str="Hello";
    echo "<br>" . "The length of the string is ".strlen($str)." Also word count is: ". str_word_count($str);
    ?>

    
</body>
</html>
