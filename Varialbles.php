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
                <hr>Topics-> Variable Scope :<hr>
        </section>
        <section>
            <?php
            
            $x = 54;            //$x variable out side of function. It can not be accessed inside any 'function'. 

           function test1(){
            $a=34;
            global $x;        //making the $x global variable to access here.
            echo $a;
            echo "<br/>";
            echo $x;
           }

           function test2(){
            $b=65;
            global $x;         //making the $x global variable to access here.
            echo $b;
            echo "<br/>";
            echo $x;
           }

           test1();
           echo "<br/>";
           test2();
             
            ?>

        </section>
        </section>
        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>