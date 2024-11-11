<?php 
$myarray = [
    [
        "url" => "images/products/1.jpg",
        "price" => "$100",
        "name" => "Black bag"
    ],
    [
        "url" => "images/products/2.jpg",
        "price" => "$1000",
        "name" => "Dress suit"
    ],
    [
        "url" => "images/products/3.jpg",
        "price" => "$250",
        "name" => "Sport shoes"
    ],
    [
        "url" => "images/products/4.jpg",
        "price" => "$250",
        "name" => "Blue shirt"
    ],
    [
        "url" => "images/products/5.jpg",
        "price" => "$10000",
        "name" => "B-MO"
    ],
    [
        "url" => "images/products/6.jpeg",
        "price" => "$250",
        "name" => "Gray shirt"
    ],
    [
        "url" => "images/products/7.jpg",
        "price" => "$500",
        "name" => "Great watch"
    ],
    [
        "url" => "images/products/8.jpg",
        "price" => "$1000",
        "name" => "Dress suit"
    ],
        [
        "url" => "images/products/9.jpg",
        "price" => "$500",
        "name" => "Great watch"
    ]
];
?>
<main>
    <div class="images">
        <?php
            foreach($myarray as $product){
        ?>
        <div class="product">
            <img class = "img" width = '350' height = '350' src="<?php echo $product['url'] ?>" alt="<?php echo $product['name'] ?>">
            <div class = "details-container">
                <p><?php echo $product['name'] ?></p>
                <p><?php echo $product['price'] ?></p>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</main>