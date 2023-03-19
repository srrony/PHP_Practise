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
                <hr><h1>Problem 1: </h1><hr>
        </section>

        <section>
            <?php
            $data=["x"=>"A","y"=>"B","z"=>"C"];
            $output=[];
            echo "Question:<br/><br/> Data: ['x'=>'A', 'y'=>'B', 'z'=>'C'] <br/><br/> Output: <br/>'0'=> 'x', '1' => 'A' <br/>'0'=> 'y', '1' => 'B' <br/>'0'=> 'z', '1' => 'C' <br/><br/>Solution: <br/><br/>";
        
            foreach ($data as $key => $value) {
            $temp = [];                 //initialize a temporary arrray
            $temp[] = $key;             //passing key inside temp
            $temp[] = $value;           //passing value inside temp
            $output[] = $temp;          //passing temp inside output,  here create '0'=> 'x', '1' => 'A'

        }
        echo "<pre>";
        echo print_r($output);          //print_r function used to print array specifically.

            ?>

        </section>

        <section class= "contentHeading">
                <hr><h1>Problem 2: </h1><hr>
        </section>

        <section>
            <?php
            
                
            echo "Question: Write a code to find the less occurance number in an array.
            <br/> The array is - <br/> Data= [1,4,3,2,1,4,3,2,4,2,1,7,5,6,4,5,6 ]";
            
            // Steps to find the answer:
            // 1. get occurance of each value inside array.
            // 2. sort array.
            // 3. get index number.
            // 4. print 1st index value.

            $data= [1,4,3,2,1,4,3,2,4,2,1,7,5,6,4,5,6];
            
             $getoccurance= [];
            // $getoccurance = array_count_values($data);          //function to cout occurance
            // asort($getoccurance);                               //Sorting 
            // // echo array_key_first($getoccurance);              //Printing 1st index using function
            // $keyarr = array_keys($getoccurance);                //getting array keys
            // echo "<br/><br/>The answer is : <br/>";
            // print_r($keyarr[0]);                                //printing 0 index

            foreach ($data as $value) {
                if (isset($getoccurance[$value])) {
                    $getoccurance[$value]++;
                }
                else {
                    $getoccurance[$value]= 1;
                }
                
            }
            echo "<pre/>";
                print_r($getoccurance);
            asort($getoccurance);
                $keyarr= array_keys($getoccurance);
                echo "<br/>the ans is : " .$keyarr[0];
               

            ?>

        </section> 

        
        <section class= "contentHeading">
                <hr><h1>Problem 3: </h1><hr>
        </section>

        <section>
            <?php
            echo "Question:<br/> Find the vowel and show count of each vowel from the below string.<br/> 
            The string= Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
            took a galley of type and scrambled it to make a type specimen book. It has survived not only 
            five centuries";

            $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
            has been the industrys standard dummy text ever since the 1500s, when an unknown printer 
            took a galley of type and scrambled it to make a type specimen book. It has survived not only 
            five centuries.";
            $output = [];
            $vowel = ['a','e','i','o','u'];
            $length = strlen($string);
            

            for ($i=0; $i < $length; $i++) {
                $char = substr($string,$i,1);

                if (in_array($char,$vowel)) {

                if (isset($output[$char])) {
                    $output[$char] ++;
                }
                else{
                    $output[$char]= 1;
                }
            }
        }
        ksort($output);
        echo "<pre>";
        print_r($output);


            ?>
            </section>

    </section>
        <section class="footer">
            <h2>This is Footer</h2>
        </section>
    </div>
</body>

</html>