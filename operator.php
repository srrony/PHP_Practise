<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
        <style>
            .phpcode{ width:900px; margin: 0 auto; background:#ddd;}
            .header, .footer{background:lightblue; text-align:center; padding: 5px;}
            .header h2{color:Green;}
            .maincontent{min-height:400px;padding:20px;}
            .contentHeading{font-weight:bold;text-align: left;}
     </style>
</head>

<body>
    <div class="phpcode">
        <section class="header">
            <h2>By the name of Allah</h2>
      </section>
      
      <section class="maincontent">

<section class= "contentHeading">
                <hr>Data Type-> Operators:<hr>
        </section>

        <section>
            <?php
            echo "Arithmatic Operator: +, -, *, /</br>";
            $a= 10;
            $b= 20;
            echo $a % $b. " -see code: a modulas b";
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Data Type-> Operators:<hr>
        </section>

        <section>
            <?php
            echo "assignment operator: +=, -=. *=, /=</br>";
            $a= 10;
            $a += 20;
            echo $a. " -see code";
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Data Type-> Operators:<hr>
        </section>

        <section>
            <?php
            echo "comparison operator: ==, ===. !=, >= , etc</br>";
            $a= 10;
            $b= 20;
            var_dump ($a==$b);
            var_dump ($a!=$b);
            ?>

        </section>
        
        <section class= "contentHeading">
                <hr>Data Type-> Increment/decrement:<hr>
        </section>

        <section>
            <?php
            echo "Increment/decrement operator: ++,--,, etc</br>";
            $a= 10;
            echo ++$a;
            echo "</br>";
            $b= 5;
            echo $b++;
            echo "</br>";
            echo $b;
            
            ?>

        </section>
        <section class= "contentHeading">
                <hr>Data Type-> Logical Operators:<hr>
        </section>

        <section>
            <?php
            echo "Logical operator: and, or</br>";
            $a= 40;
            $b=20;
            $c= 90;
            if ($a==40 and $b==24 xor $c==90 ){
                echo "Coder is Samiur Rony";}
                else{
                    echo "wrong";

                }
            
            
            ?>

        </section>

 <section class= "contentHeading">
                <hr>Data Type-> Logical Operators:<hr>
        </section>

        <section>
            <?php
            echo " String operator: Concating string by using (.=) </br>";
            $a= "Samiur Rahman Rony";
            $b=" is the owner of this file.";
            $x = $a.$b;
            $a .=$b;
            echo "Concating:" . $x;
            echo "</br>appending:".$a;
            
            ?>

        </section> 
        <section class= "contentHeading">
                <hr>Data Type-> Array Operators:<hr>
        </section>

        <section>
            <?php
            echo " Array operator:</br>";
            $x= array(
                "a"=> "Samiur",
                "b"=> "Rony"
            );
            $y= array(
                "c"=> "is",
                "d"=> "coder"
            );
            //echo "<pre>";
            var_dump($x + $y);
            echo "</br>";
            var_dump($x == $y);
            ?>

        </section> 
        <section class= "contentHeading">
                <hr>Data Type-> Conditional Operators:<hr>
        </section>

        <section>
            <?php
            echo " Conditional operator: if, if else, if elseif</br>";
            $a= 15;

            if($a>16){
                echo "Samiur is good boy.";
            } 
            elseif ($a<16) {
                echo " Samiur is sweet boy";
            }
            else{
               echo " Samiur is bad boy";
            }
            ?>

        </section> 
        </section> 
        

        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>