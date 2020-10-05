<html>
    <head><title>  Receve input exercise</title> </head>
    <body>
        <?php
        $name=$_POST["name"];
        $class=$_POST["class"];
        $university=$_POST["university"];
        $hobby1=$_POST["hobby1"];
        $hobby2=$_POST["hobby2"];
        $hobby3=$_POST["hobby3"];
        $hobby=[$hobby1,$hobby2,$hobby3];
        print("<br>Hello, $name");
        print("<br>You are studying at $class, $university");
        print("<br>Your hobby is ");
        $i=1;
   
        foreach ($hobby as $hobby){
            echo '<br>';
          echo "$i. $hobby";
          $i=$i+1;
        }
    
        
        

        ?>
    </body>
</html>