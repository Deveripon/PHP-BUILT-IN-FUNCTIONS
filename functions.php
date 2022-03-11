<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo " PHP BUILT IN FUNCTION" ?> </title>
</head>
<body>
    

<?php

////////////////////////PHP BUILT IN FUNCTIONS AND ITS USAGE////////////////

// FUNCTION LIST:
// 1. strlen = to find how many carecter

//---------------------------------------------------
// Use example

// $name = 'Shahadat Hussain Ripon';

// echo strlen ($name);


//================================================================

// 2.str_word_count = to find how many word

//---------------------------------------------------
// Use example

// $name = 'Shahadat Hussain Ripon';
// echo str_word_count($name);


//================================================================



// 3.strrev = to make reverse order
//---------------------------------------------------
// Use example

//  $name = 'Shahadat Hussain Ripon and i am a php developer';
// echo strrev($name);


//================================================================


// 4.strtolower = to make lowercase text
//---------------------------------------------------
// Use example

//   $name = 'Shahadat Hussain Ripon and i am a php developer';
//     echo strtolower($name);


//================================================================//


// 5.strtoupper = to make uppercase text
//---------------------------------------------------
// Use example

//   $name = 'Shahadat Hussain Ripon and i am a php developer';
//   echo strtoupper($name);


//================================================================

// 6.ucfirst = to make uppercase first carecter of sentance
//---------------------------------------------------
// Use example

    //   $name = 'shahadat Hussain Ripon and i am a php developer';
    //   echo ucfirst ($name);


//================================================================

// 7.ucwords  = to make uppercase first carecter of eace words
//---------------------------------------------------
// Use example

    //    $name = 'shahadat Hussain Ripon and i am a php developer';
    //    echo ucwords ($name);


//================================================================

// 8.strpos  = to find position of spacific value/words
//---------------------------------------------------
// Use example

        // $name = 'shahadat Hussain Ripon and i am a php developer';
        // echo strpos ($name,'Ripon');


//================================================================


// 9.substr = to substruct value
//---------------------------------------------------
// Use example

        //   $name = 'Shahadat Hussain Ripon';
        //   echo substr ($name,1);

        //  output: hahadat Hussain Ripon

        
        // $name = 'Shahadat Hussain Ripon';
        // echo substr ($name,9,7);

    //  output: Hussain


        //  $name = 'Shahadat Hussain Ripon';
        //  echo substr ($name,0,-5);

    //  output: Shahadat Hussain

//================================================================


// 10.str_replace  = to replace spacific value/words
//---------------------------------------------------
// Use example

 //  $name = 'shahadat Hussain Ripon and i am a php developer';
 //  echo str_replace ('Ripon','mony', $name);

  //output:shahadat Hussain mony and i am a php developer


//================================================================

// 11.str_shaffle  = to shaffle value/words
//---------------------------------------------------
// Use example

//    $code = str_shuffle ('12#%$&*345@67890');

//    echo substr($code,2,5);


//================================================================


// 12. md5  = to encript value
//---------------------------------------------------
// Use example

   
    // $name = 'shahadat Husaain';

    // echo md5($name);

    // output : 3855a1659ff02cecfaecefd39b8c398c
//    


//================================================================


// 13. password_hash  = to use encripted password
//---------------------------------------------------
// Use example

   
    //  $name = 'shahadat Husaain';

    //  echo password_hash($name,PASSWORD_DEFAULT);

    // output :$2y$10$cpqzSkWcH/ASHimVfXMZhOvG/.B0DHiA3HitsALn2rIBUbnGvFWS
//    


//================================================================

// 14. rand = to generate random number
//---------------------------------------------------
// Use example

//    echo rand(1,99999);

//    


//================================================================

// 15. round = to generate round figure
//---------------------------------------------------
// Use example

// $valu = 5.55;
//  echo round($valu);

//    
//================================================================

// 16. floor = to generate floor number
//---------------------------------------------------
// Use example

        // $valu = 5.55;
        //  echo floor($valu);

//    
//================================================================

// 17. ceil = to generate ceil number
//---------------------------------------------------
// Use example

        //  $valu = 5.05;
        //  echo ceil($valu);

//    
//================================================================

// 18. max = to find maximum number
//---------------------------------------------------
// Use example

     
// echo max(55, 10,120,70,90);

//    
//================================================================

// 19. min = to find minimum number
//---------------------------------------------------
// Use example

     
//  echo min(55, 10,120,70,90);

//    
//================================================================


?>

</body>
</html>
 
 