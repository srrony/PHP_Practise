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
                <hr>Topics-> Form Validation:<hr>
        </section>

    <form method= "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

        <table>
            <tr>
                <th>Name:</th>
                <td><input type="text" name="name" required /></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" required /></td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td><input type="text" name="mbl" required /></td>
            </tr>
            <tr>
                <th>Comment:</th>
                <td><textarea name="comment" rows="5" cols="40" ></textarea></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>
                    <input type="radio" name="gender" value= "male" required/> Male
                    <input type="radio" name="gender" value= "female" required/> Female
                </td>
            </tr>
            <tr>
                
                <td>
                    <input type="submit" name="submit" value= "submit"/>
                    
                </td>
            </tr>
        </table>
    </form>

        <section>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $name = validation($_POST['name']);
                $email = validation($_POST['email']);
                $mbl = validation($_POST['mbl']);
                $comment = validation($_POST['comment']);
                $gender = validation($_POST['gender']);

                echo "Name: ". $name . "</br>";
                echo "Email: ". $email . "</br>";
                echo "Mobile Number: ". $mbl . "</br>";
                echo "comment: ". $comment . "</br>";
                echo "gender: ". $gender;

            }
            function validation($data){
                $data1 = trim($data);
                $data2 = stripcslashes($data1);
                $datafinal = htmlspecialchars($data2);

                return $datafinal;
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