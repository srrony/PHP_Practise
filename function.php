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
                <hr>Data Type->Funchtions:<hr>
        </section>

        <section>
            <?php
            

            function sum($x, $y){
               $z = $x + $y;
               echo "The Sum is :$z <br/>";
           }


            sum(54,32);
            sum(57,356);
            sum(53,33);

            function person($name = "Samiur"){
                echo "$name is a good human.<br/>";
            }
            person();
            person("julfikar");
            person("Farhad");
            person("fahmida");

            ?>

        </section>

        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>