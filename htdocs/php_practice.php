<!-- 
 Hello!
<h1>Hello!</h1>
<style>
    h1 {
        color:yellow; 
    }
</style>
<script>
    alert("Hello!")
</script> 
-->

<?php 
    //echo "<b>Hello World!</b>";
    // comment
    #   comment
    /*  comment
        comment
    */
    // select, ctrl, forward slash
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello this is Me!</h1>
    <?php 
        // echo "Hello"; 
        $color = "Red";  //use $ to declare variable
        $Color = "Blue";
        // echo $Color;
        // echo $color;
      //echo $coloR; //case-sensitive!
      // alphanumaric & underscore
      // cannot start in numbers

      //datatypes
      var_dump("$color");
      echo "<br>";

      var_dump(5);
      echo "<br>";

      var_dump(3.14);
        echo "<br>";

      var_dump(true);
        echo "<br>";

      var_dump(false);
        echo "<br>";

      var_dump([1, 2]);
      echo "<br>";
      echo "<br>";

      //variable scopes
      $x = 5;  //global variable

      function test(){
        //$x = 10;  //local variable
        static $x = 10;  //static variable
        echo $x;
        $x++;
        echo "<br>";
      }
      test();
      test();
      echo $x;  //global
      echo "<br>";

      //echo & print
      echo("Hello");
      echo "World";
      print ("Hello");
      print "World!";

      //interpolation
      echo("Hello"), ("Hello");
      echo "World", "World"; 
      echo "<br>";

      // error, print does not
      // print ("Hello"), ("Hello");
      // print "World!", "World!";

      //print returns value, echo does not
      $x = print("Hello");
      // $x = echo("Hello"); error
      echo $x;
      echo "<br>";
      echo "<br>";

      //data types
      $a = "John";
      $a1 = 'John';
      $b = 5;
      $c = 4.1;
      $d = true;
      $e = [1, 2, 3];
      $f = new stdClass();
      $g = null;
      $h = fopen("php_practice.php", "r");

      var_dump($a);
      echo "<br>";
      var_dump($a1);
      echo "<br>";

      var_dump($b);
      echo "<br>";

      var_dump($c);
      echo "<br>";

      var_dump($d);
      echo "<br>";

      var_dump($e);
      echo "<br>";

      var_dump($f);
      echo "<br>";

      var_dump($g);
      echo "<br>";

      var_dump($h);
      echo "<br>";
      echo "<br>";

      $x = "Juan Cruz";
      echo str_replace("Cruz", "Lance", $x);
      echo "<br>";
      echo "<br>";

      echo trim ("Hello         World!            "); //remove unwanted spaces
      echo "<br>";

      var_dump (explode("u", $X));
      echo "<br>";

      //concatinate
      $x = "Hello";
      $y = "Love!";
     
      echo "Hello" . "World";
      echo "<br>";
      echo $x . " " . $y;
      echo "<br>";

      echo "$x$y";  //string
      echo "<br>";

      echo '$x$y';  //literal
      echo "<br>";

    //add quotations
      // echo "Juan "Immortal" Enrille"; error
      echo 'Juan "Immortal" Enrille';
      echo "<br>";

      echo "Juan \$Immortal\ Enrille";
      echo "<br>";
      echo "<br>";

    //php numbers
      $a = 5;
      $b = 5.1;
      $c = "25";

      echo is_int(5); //true = 1
      echo is_int("5");  //empty = false
      echo is_int(3.1); //empty = false

      echo "<br>";
      echo PHP_FLOAT_MAX;

      echo "<br>";
      echo PHP_FLOAT_MIN;

      echo "<br>";
      echo PHP_FLOAT_DIG;

      echo "<br>";
      echo PHP_FLOAT_EPSILON;

      echo "<br>";
      echo is_float(5.1); //true = 1
      echo is_float(5);  //false = null

      echo "<br>";
      echo "<br>";

      //true = numeric value
      echo is_numeric(5);
      echo "<br>";

      echo is_numeric(5.1);
      echo "<br>";

      echo is_numeric("5");
      echo "<br>";

      echo is_numeric("5 nahssjdhgd");
      echo "<br>";

      //casting
      $a = (string) "John";
      $a1 = (string)'John';
      $b =  (string) 5;
      $c = (string) 4.1;
      $d = (string) true;
      $g = null;
      
      var_dump($a);
      echo "<br>";
      var_dump($a1);
      echo "<br>";

      var_dump($b);
      echo "<br>";

      var_dump($c);
      echo "<br>";

      var_dump($d);
      echo "<br>";

      var_dump($g);
      echo "<br>";

      var_dump($h);
      echo "<br>";
      echo "<br>";

      $x = "Juan Cruz";
      echo str_replace("Cruz", "Lance", $x);
      echo "<br>";
      echo "<br>";

      echo trim ("Hello         World!            "); //remove unwanted spaces
      echo "<br>";

      echo "<br>";
      // array and class cannot be converted using casting

    ?>
</body>
</html>