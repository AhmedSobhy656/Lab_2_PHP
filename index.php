<?php
      echo "<h1> Lab_2 PHP :  Ahmed Sobhy  </h1>";
  
    // Php dashboard demo
      //  echo phpinfo();

     /*-----------1-  Search for how to make \n work in browser.----------------------*/
     
     echo "<br> --------------------------------------------------------------------------------------------<br>";
      echo " 1-  Search for how to make |n work in browser. ";
      echo nl2br("\n");
      echo nl2br("\n");
      echo "  nl2br()   : Inserts HTML line breaks in front of each newline in a string";
      echo nl2br("\n");
      echo nl2br(" Ex: \n");
        //method 1
       echo nl2br("Lab PHP 1 .\n Lab PHP 2 .");
               
       // method 2 but I do not prefer it
       //  header('Content-type: text/plain');
       //   echo "Line 1\nLine 2";  

      /*-----  2-  Discuss 3 built-in function of a String.. -----------------------------------------*/
      echo "<br> --------------------------------------------------------------------------------------------<br>";
      echo "   2-  Discuss 3 built-in function of a String.. ";      
      echo nl2br("\n");
      echo nl2br("\n");

      echo " first func : nl2br()   : Inserts HTML line breaks in front of each newline in a string";
      echo nl2br("\n");
      echo nl2br("\n");
      
      echo " sec func : trim()  : Remove characters from both sides of a string (He in Hello and d! in World):";
      echo nl2br("\n");
      $str = "Hello World!"; 
      echo "------>";
      echo trim($str,"Hed!");
      echo nl2br("\n");
      echo nl2br("\n");

      echo " Third func : str_repeat()  : Repeats a string a specified number of times";
      echo nl2br("\n");
      echo str_repeat("repeat-",5);
      echo nl2br("\n");
      echo nl2br("\n");

      echo " forth func : strcmp()  : tf two string diffrent return true if equal else return false ";
      echo strcmp("Hello world!","Hello world!");
      echo nl2br("\n");
      echo nl2br("\n");

     // 3-  Display $_SERVER in readable format.
     echo "<br> --------------------------------------------------------------------------------------------<br>";  
     echo "   3-  Display SERVER in readable format <br> <br>";      

     echo $_SERVER['PHP_SELF'];
     echo "<br>";
     echo "<br>";
     echo $_SERVER['SERVER_NAME'];
     echo "<br>";
     echo "<br>";
     echo $_SERVER['HTTP_HOST'];
     echo "<br>";
     echo "<br>";
     echo $_SERVER['HTTP_USER_AGENT'];
     echo "<br>";
     echo "<br>";
    //  echo $_SERVER['SCRIPT_NAME'];

     
    // 4-  Write a PHP script to get the sum and avg of an indexed array
    echo "<br> --------------------------------------------------------------------------------------------<br>";  
    echo "   4-  Write a PHP script to get the sum and avg of an indexed array "; 
    echo nl2br("\n");
    echo nl2br("\n");

    $Numbers = array( 12, 45, 10, 25);
    $sum = array_sum($Numbers);
    echo " Sum of Array =  $sum <br>";
    
    $avg = $sum/4;
    echo " Avg of Array =  $avg <br>";

    echo "<br> ** sort it in a reverse order ( sort by value ) <br>";
    arsort($Numbers);
    foreach($Numbers as $x => $x_value) {
        echo  " Value=" . $x_value . "<br>";
        echo "<br>";
      }
  
    echo "<br> ** sort it in a reverse order  (sort by index ) <br>";
    krsort($Numbers);
    foreach($Numbers as $x => $x_value) {
        echo "index=" . $x . ", Value=" . $x_value;
        echo "<br>";  
    }


  //5-  Write a PHP script to sort the following associative array :
    echo "<br> --------------------------------------------------------------------------------------------<br>";  
    echo "   5-  Write a PHP script to sort the following associative array : "; 
    echo nl2br("\n");
    echo nl2br("\n");

    $age = array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");     
    echo "<br> a) ascending order sort by value  <br>";
    asort($age);
    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }

    echo "<br> b) ascending order sort by key  <br>";
    ksort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

   
    echo "<br> c) descending order sort by value  <br>";
    arsort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }
  
    echo "<br> d) descending order sort by key  <br>";
    krsort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";  
    }




  
?>