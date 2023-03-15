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
                <hr>Topics-> Index Arrays :<hr>
        </section>

        <section>
            <?php
            //print all data in array
            $a = array(3,54,32,4);
            $lenght = count($a);
            echo "length of the array is " . $lenght;
            echo "<br/>";
            for($i=0; $i<$lenght; $i++){ 
                echo $a[$i]; //$a is the array and $i is the index number
                echo "<br/>";
            }

            ?>

        </section>
        <section class= "contentHeading">
                <hr>Topics-> Associate Arrays :<hr>
        </section>
        <section>
            <?php
            //print all data in array
            $ages = array("Rony"=> "29","Fahmida"=> "27","Rubel"=> "34","Taibur"=> "64","Lily "=> "53");
            
            foreach ($ages as $name => $age) {
                echo "Name=".$name. "<br/> Age=".$age;
                echo "<br/>";
            }

            ?>

        </section>
        <section class= "contentHeading">
                <hr>Topics-> Mulit-dimentional Arrays :<hr>
        </section>
        <section>
            <?php
                $cars = array(
                            array("BMW", "Black", 5),
                            array("Audi", "Red", 10),
                            array("Volvo", "Blue", 15),
                            array("Tata", "Green", 20)        
                );

                for ($row=0; $row <4 ; $row++) {  //looping rows, means nested arrays.
                    echo "Row number $row";
                    echo "<ul>";

                    for ($col=0; $col<3  ; $col++) {    //looping columns, means nested array's data.
                        echo "<li>".$cars[$row][$col]."</li>";
                    
                    }
                    echo "</ul>";


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