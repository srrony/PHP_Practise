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
       <section class="contentHeading">
            <hr>Variable:<hr>
            </section>
                <?php

            echo "We can store anything in variable which is mark as $ sign. </br> Below we will calculate some numbers using variables.</br></br> ";
            $a=20;
            $b=34;
            $c=$a+$b;
            echo "a=$a</br> b=$b</br> c=a+b</br>";
            echo"So the value of c will be:</br>c=$c";

                ?>

            <section class="contentHeading">
            <hr>Data Type-> String :<hr>
            </section>
                <?php

            echo "We can store any sentence or other things in variable which should be stored inside doubel 'Quote' sign. </br> Below we will store string in a variable and return its data type.</br></br> ";
            $a="Samiur Rahman Rony";
            echo "We store $a in 'a'</br>";
            echo"So the value of a will be:</br>a=$a</br>";
            echo "data type is= ";  var_dump($a);
            echo "</br>Lets see how many character are there= ";
            echo strlen($a);
            echo "</br>Lets see how many words are there= ";
            echo str_word_count($a);
            echo "</br>Lets see reverse= ";
            echo strrev($a);
                ?>

            <section class="contentHeading">        
            <hr>Data Type-> Integer :<hr>
            </section>
                <?php

            echo "We can store any interger number in variable which is should not be contain any decimal or space. </br> Below we will calculate some numbers using variables.</br></br> ";
            $a=10;
            $b=34;
            $c=$a+$b;
            echo "a=$a</br> b=$b</br> c=a+b</br>";
            echo"So the value of c will be:</br>c=$c</br>";
            var_dump($c);

                ?>

            <section class="contentHeading">        
            <hr>Data Type-> Float :<hr>
            </section>
                <?php

            echo "We can store float number in variable which is actually number but with decimal points. </br> Below we will calculate some numbers using variables.</br></br> ";
            $a=10.35;
            $b=34.76;
            $c=$a+$b;
            echo "a=$a</br> b=$b</br> c=a+b</br>";
            echo"So the value of c will be:</br>c=$c</br>";
            var_dump($c);

                ?>
                <section class="contentHeading">        
            <hr>Data Type-> Boolean :<hr>
            </section>
                <?php

            echo "Boolean is data type which only return TRUE or FALSE. </br> Below we will calculate some boolean value using variables.</br></br> ";
            $a=true;
            $b=false;
            echo"So lets check the data type of 'a' and 'b' which we have stored in Code:</br>";
            var_dump($a,$b);



                ?>

            
            <section class="contentHeading">        
            <hr>Data Type-> Constant :<hr>
            </section>
            
                <?php

            echo "Constant is something that is a value we can use globally.</br></br> ";

            define ("CODER", "Samiur Rahman Rony");

            function owner(){
                echo CODER;
            }
            owner();
                ?>
                
                </section>

<section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>