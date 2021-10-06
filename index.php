<?php require_once __DIR__ . '/models/products/Product.php';
require_once __DIR__ . '/models/products/Book.php';
require_once __DIR__ . '/models/products/Game.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/utils/functions.php';
require_once __DIR__ . '/./CreditCard.php';

// User
$user1 = new User('Michau', 'Wadowski', 'micio@miao.it', '2');

// Prodotti
$item = new Product('Lor of the Rings', 'Cashier', 20, 'Accesory');
$callofDuty = new Game('Call of Duty', 'Shooter - Section', 'Activision', 'Shooter', 60, 'Ps4');
$book = new Book('Lord of the Rings', 'Fantasy', ' J.R.Tolkien', 'Fantasy', '452', 25);




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

        <h1> <?= $user1->getUserName() ?></h1>
        <h1>Il tuo livello è: <?= $user1->getUserLevel() ?></h1>
        <h3>Il tuo sconto è: <?= $user1->getDiscount() ?>%</h3>


        <!-- Prodotto scelto -->

        <h1> Prodotto scelto: <?= $callofDuty->getName() ?></h1>
        <h1><?= $callofDuty->getInfo() ?></h1>
        <h2>Il prezzo è: €<?= $callofDuty->getPrice() ?></h2>
        <h4>Il prezzo scontanto è: €<?= finalPrice($callofDuty->getPrice(), $user1->getDiscount()) ?></h4>
        </h3>


        <div>
            <? $CreditCard1 = new CreditCard('1231456987456321', 'Michau', 'Wado', '09/26'); ?>
            <p>Check CC: <?php try {
                                echo $CreditCard1->setCC('1231231231231254');
                            } catch (Exception $e) {
                                echo $e->getMessage();
                            } ?></p>

            <!-- if card set show -->
            <p> Credit Card: <?php try {
                                    echo $CreditCard1->getCCNumber();
                                } catch (Exception $e) {
                                    echo $e->getMessage();
                                } ?></p>
        </div>
    </section>

</body>

</html>