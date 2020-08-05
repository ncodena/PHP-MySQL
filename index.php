<?php

// STRINGS

// define('NAME', 'Mario');

// echo 'hello world';
// $name = 'Yoshi';
// $stringOne = 'my email is ';
// $stringTwo = 'xxxx@gmail.com ';

// echo $stringOne . $stringTwo;

// $name = 'mario';

// echo "Hey, my name is $name";

// echo 'they screamed "whaaaa"';

// echo $name[0];

// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// echo str_replace('m', 'w', $name);

// NUMBERS

// $radius = 25;
// $pi = 3.14;

// basic - *, /, +, -, **

// echo $pi * $radius**2;

// order of operation: (Brackets, Index, Division, Multiplication, Addition, Substraction )

// echo 2 * (4 + 9) / 3;

// increment & decrement operators

// echo $radius++;
// echo $radius;

// shorthand operators

// $age = 20;
// $age -=10;
// echo $age;


// number functions

// echo floor($pi);
// echo ceil($pi);
// echo pi();

// ARRAYS

// Indexed arrays

// $peopleOne = ['shaun', 'cristal', 'ryu'];
// echo $peopleOne[1];

// $peopleTwo = array('ken', 'chun-li');
// echo $peopleTwo[1];

// $ages = [10, 20, 30, 40];
// print_r($ages);

// $ages[1] = 25;
// print_r($ages);

// $ages[] = 60;
// print_r($ages);

// array_push($ages, 70);
// print_r($ages);

// echo count($ages);

// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);


// Associative arrays(key and value pairs)

// $groupOne = ['john'=> 'black', 'mary'=>'red', 'charles' =>'brown'];
// echo $groupOne['mary'];
// print_r($groupOne);

// $groupTwo = array('mark' => 'green', 'rachel' => 'yellow');
// print_r($groupTwo);

// $groupTwo['paul'] = 'pink';
// print_r($groupTwo);

// echo count($groupOne);

// $groupThree = array_merge($groupOne, $groupTwo);
// print_r($groupThree);


// Multi-dimensional arrays

// $blogs = [
//     ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem','likes'=>30],
//     ['mario kart', 'toad', 'lorem', 40],
//     ['zelda', 'link', 'lorem', 50]
// ];

// print_r($blogs[1][1]);

// $blogs = [
//     ['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem','likes'=>30],
//     ['title'=>'mario kart', 'author'=>'toad', 'content'=>'lorem', 'likes'=>40],
//     ['title'=>'zelda', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
// ];

// echo $blogs[2]['author'];
// echo count($blogs);
// $blogs[] = ['title'=>'castle party', 'author'=>'william', 'content'=>'lorem','likes'=>60];
// print_r($blogs);
// $popped = array_pop($blogs);

// print_r($popped);


// LOOPS

// For loops

// $people = ['mel', 'bule', 'grey', 'proa'];

// for($i = 0; $i < count($people); $i++){
//     echo $people[$i] . '<br />';
// };

// foreach($people as $person){
//     echo $person . '<br />';
// }

// $products = [
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightning bolt', 'price' => 40],
//     ['name' => 'banana skin', 'price' => 2]
// ];

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

// $i = 0;

// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }

// Booleans

// echo 5 < 10;
// echo 5 == 10;
// echo 10 == 10;
// echo 5 != 0;
// echo 5 <= 5;
// echo 5 <= 5;

// echo 'shaun' < 'yoshi';
// echo 'shaun' > 'yoshi';
// echo 'shaun' > 'Shaun';
// echo 'mario' == 'mario';
// echo 'mario' == 'Mario';

// Loose vs strict comparison

// echo 5 == '5';
// echo 5 === '5';
// echo true == "1";
// echo false == "";


// CONDITIONAL STATEMENTS

// $price = 20;

// if($price < 10){
//     echo 'the condition is met';
// } elseif ($price < 30){
//     echo 'else if condition met';

// } else {
//     echo 'condition not met';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product){
    // if($product['price'] < 15 && $product['price'] > 2){
    //     echo $product['name'] .'<br />';
    // }

    if($product['price'] > 20 || $product['price'] < 10){
        echo $product['name'] .'<br />';
    }



}



// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
<!-- <h1>Products</h1>
<ul>
    <?php foreach($products as $product){ ?>

    <h3><?php echo $product['name']; ?></h3>
    <p>€<?php echo $product['price']; ?></p>

    <?php } ?>
</ul> -->
<div>
    <!-- <ul>
        <?php foreach($products as $product){ ?>

            <?php if($product['price'] > 15){ ?>
            <li><?php echo $product['name']; ?></li>
            <?php } ?>
        <?php } ?>

    </ul> -->
</div>
</body>
</html>