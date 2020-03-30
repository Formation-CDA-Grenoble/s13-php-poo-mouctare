<?php

require_once 'models/Article.php';
require_once 'models/Category.php';

// Crée un article à l'aide de son constructeur
$myArticle = new Article(
    'My first article',
    'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti obcaecati quibusdam asperiores soluta dolore. Provident similique obcaecati minus qui natus officia et! Unde similique assumenda mollitia sunt voluptas cum, quae officiis? Nisi mollitia nulla aliquid, unde impedit, labore quibusdam maiores quidem, et velit blanditiis? Magni exercitationem rem asperiores sint cum.',
    'http://imgs.abduzeedo.com/files/francois/wallpapers/wpw408/abdz_infrared_arashiyama_mockup.jpg',
    'News'
);

// Crée un article à l'aide des setters
$myArticle = new Article();

$myArticle
    // ->setTitle('My first article')
    ->setTitle(1234)
    ->setContent('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti obcaecati quibusdam asperiores soluta dolore. Provident similique obcaecati minus qui natus officia et! Unde similique assumenda mollitia sunt voluptas cum, quae officiis? Nisi mollitia nulla aliquid, unde impedit, labore quibusdam maiores quidem, et velit blanditiis? Magni exercitationem rem asperiores sint cum.')
    ->setCover('http://imgs.abduzeedo.com/files/francois/wallpapers/wpw408/abdz_infrared_arashiyama_mockup.jpg')
    ->setCategory('News');
    $myArticle = new Article();

    $myArticle
    ->setTitle('Toute notre reconnaissance aux soignants !')
    ->setContent('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti obcaecati quibusdam asperiores soluta dolore. Provident similique obcaecati minus qui natus officia et! Unde similique assumenda mollitia sunt voluptas cum, quae officiis? Nisi mollitia nulla aliquid, unde impedit, labore quibusdam maiores quidem, et velit blanditiis? Magni exercitationem rem asperiores sint cum.')
    ->setCover('https://lh3.googleusercontent.com/proxy/cGHi6k_MUQ29jRXGfrhgMXW4E0-g2Ymvx158u4eVJwsU6GFBpHl5wornI98EnodJOhe9UYA6S5WZfwM1oxf1omGPCBw9zv04MEPVubslXsWJ3gWOpHgn5nwA1Db43oAgnt5t-0K2h7oWFTG5HzJBe1g')
    ->setCategory('Santé');

    $myArticle = new Article();

    $myArticle
    ->setTitle("Le tourisme à l'eupreve du covi19 !")
    ->setContent('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti obcaecati quibusdam asperiores soluta dolore. Provident similique obcaecati minus qui natus officia et! Unde similique assumenda mollitia sunt voluptas cum, quae officiis? Nisi mollitia nulla aliquid, unde impedit, labore quibusdam maiores quidem, et velit blanditiis? Magni exercitationem rem asperiores sint cum.')
    ->setCover('https://static.latribune.fr/586201/tourisme.jpg')
    ->setCategory('Tourisme');
// Crée un article à l'aide de son constructeur
$myCategory = new Category(
    
);
// Crée un article à l'aide des setters
$myCategory = new Category();

$myCategory
    
    ->setName('Culture');


    $myCategory = new Category();

$myCategory
    ->setName('Torisme');

    $myCategory = new Category();

$myCategory
->setName('Santé');
$myCategory = new Category();

$myCategory
->setName('Tourisme');
//var_dump($myCategory); die();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $myArticle->getTitle() ?></h1>
    <img src="<?= $myArticle->getCover() ?>" />
   
    <p>
        <?= $myArticle->getContent() ?>
    </p>
    <h3> <?= $myCategory->getName() ?></h3>
    <div>
        Published in <?= $myArticle->getCategory() ?> on <?= $myArticle->getCreatedAt()->format('Y-m-d H:i:s') ?>
    </div>
</body>
</html>
