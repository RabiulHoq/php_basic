<?php

    //concatanation
    //php .
    //java +
    /* for ($i=10; $i >0 ; $i--) { 

         echo "this is: $i <br>";
     }
     */

     function value_print()
     {
        for ($i=10; $i >0 ; $i--) { 

            echo "this is: $i <br>";
     }
    }

    function print_uv()
    {
        echo "Cox's Bazar International University <br>";
    }

    function print_dep()
    {
        echo "Computer Science and Engineering <br>";
    }
    function value_1to100()
    {
       for ($i=1; $i <101 ; $i++) { 

           echo " $i <br>";
    }
   }
   $color = array('red','orange','blue');
   
   for ($i=0; $i < 3; $i++) { 
    echo $color[$i]."<br>";
   }

   $alphabet = array('A','B','C','D','E','F','G','H','I','J');
   for ($i=0; $i < count($alphabet) ; $i++) { 
    echo $alphabet[$i]."<br>";
   }

   //Asssociative array
//    $students = array(
//     "id" => 123,
//     "name" => "cbiu",
//     "address" => "cox"
//    );

//    foreach ($students as $key => $value) {
//     echo $key.":".$value."<br>";
//    }

//    $myself = array(
//     "id" => 1003,
//     "name" => "Rabiul",
//     "address" => "Eidgaon"
//    );

//    foreach ($myself as $key => $value) {
//     echo $key.":".$value."<br>";
//    }

//    $encoded = json_encode($students);
//    print_r(json_decode($encoded));

   //multidimentional array

   $students = array(
    array("101","A","Cox1","456321"),
    array("102","B","Cox2","965478"),
    array("103","C","Cox3","564789")
   );

   for ($row=0; $row < 3; $row++) {
    echo "<br>"; 
    for ($col=0; $col <4 ; $col++) { 

        echo $students[$row][$col]."------";
    }
   }




?>


<!--php block end-->

<!--start html block-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php value_print() ?></h1>
     <h2>Unversity Name:</h2><br>
    <h2><?php print_uv() ?></h2>
    <p><?php print_dep() ?></p>
    <p><?php value_1to100() ?></p>


</body>
</html>