<?php
/* Strings */
$string = 'hello world';
$productname = 'Rudeniniai Batai Rudi';
$productDescription = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don.';
$productBrand = 'Nike';

/* Nulls */
$product = null;


/* Integers */
$productQty = 4;
$holesCount = 32;
$productsManufacturerYears = 2021;
/* Flouts */
$productPrice = 67.99;
$size = 41.50;
$weight = 0.234;
/* Bullens */
$isInStock = true;
$waterProof = true;
$airless = false;
/* Arrays */

echo "<pre>";
$product = [
   'name' => $productname,
    'qty' => $productQty,
    'price' => $productPrice,
    'water_proof' => $waterProof
];
$product2 = [
    'name' => 'Vasariniai Batai Balti',
    'qty' => 1,
    'price' => 87.99,
    'water_proof' => true
];
$products = [$product, $product2];


/*
print_r($products);
echo $product['name'];
echo $product['price'];
echo '<br>';
echo $product2['name'];
echo $product2['price'];


echo $productname;
echo "<br>";
echo $productDescription;
echo "<br>";
echo $productBrand;
*/

// One line komentaras

/*
Komentaras
Per
Kelias
Eilutes
 */

// Operations = + - / * %


//Kaina su pvm
$pvm = 21;

$priceWithTax = $productPrice * (1+($pvm / 100));

echo $priceWithTax;

$products = [
    [
        'name' => 'Siulai',
        'price' => 12.4,
        "img" => 'https://teams.microsoft.com/_?lm=deeplink&lmsrc=NeutralHomePageWeb&cmpid=WebSignIn&culture=lt-lt&country=lt#/pre-join-calling/19:JtGbXcDWgsGzyXUfYfDSVfrGN8ktCrZQlAGvfN7dufY1@thread.tacv2'
    ], 
    [
        'name' => 'adata',
        'price' => 1.99,
        'img' => 'https://www.google.com/search?q=adata&tbm=isch&ved=2ahUKEwi6jOHhuIT1AhVGuSoKHZOMCtgQ2-cCegQIABAA&oq=adata&gs_lcp=CgNpbWcQAzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBggAEAcQHjIGCAAQBxAeMgYIABAHEB46BAgAEBM6CAgAEAUQHhATUPIOWPIOYMEYaABwAHgAgAGCAYgBgwKSAQMwLjKYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=mO_JYbrgPMbyqgGTmarADQ&bih=711&biw=1373&rlz=1C5CHFA_enLT894LT897#imgrc=PIM10eo2-1gZPM'
    ]
    ];


    foreach($products as $product){
        echo'<h2> $x </h2>';
    }

    $products = [
        [
        'name' => 'Siulai', 
        'price' => 12.4,
        'img' => 'https://siulupinkles.lt/wp-content/uploads/2021/01/Mezgimo-siulai-ritese-italiski-siulai-kasmyras-kasmyro-siulai-silko-siulai-silkas.jpg'
        ],
        [
        'name' => 'adata',
        'price' => 1.99,
        'img' => 'https://www.vle.lt/uploads/_CGSmartImage/70839_3-26c56fce05f1ac6e0247f6daa86648aa.jpg'
        ],
        [
        'name' => 'virbalai',
        'price' => 3.99,
        'img' => 'https://mezgimomanija.lt/wp-content/uploads/2019/02/3397.jpg'
        ],
        ];
        
        foreach($products as $product){
        echo '<img width="60" src="'. $product['img'] .'"/>';
        echo '<h2>'. $product["name"] . '</h2>';
        echo '<h3>'. $product["price"] . '</h3>';
        echo '<hr>';
        }