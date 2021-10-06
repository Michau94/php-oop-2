<?php require_once __DIR__ . '/models/products/Product.php';
require_once __DIR__ . '/models/products/Book.php';
require_once __DIR__ . '/models/products/Game.php';
require_once __DIR__ . '/User.php';


$item = new Product('Lor of the Rings', 'Cashier', 20, 'Accesory');

$book = new Book('Lord of the Rings', 'Fantasy', ' J.R.Tolkien', 'Fantasy', '452', 25);

$callofDuty = new Game('Call of Duty', 'Shooter - Section', 'Activision', 'Shooter', 60, 'Ps4');


// var_dump($item);
// var_dump($callofDuty);
// var_dump($book);
// var_dump($user1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>

<body>

    <section>
        <?php $user1 = new User('Michau', 'Wadowski', 'micio@miao.it'); ?>

        <h1> <?= $user1->getUserName() ?></h1>
        <h3><?= $user1->getDiscount() ?></h3>
        <div>

        </div>
    </section>

</body>

</html>