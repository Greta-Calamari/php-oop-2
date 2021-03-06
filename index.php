<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

require_once __DIR__.'/Classes/Products.php';
require_once __DIR__.'/Classes/cartaCredito.php';
require_once __DIR__.'/Classes/UserPremium.php';




$items = [
    [
        'name' => 'cibo per cani',
        'brand' => 'royal canin',
        'price' =>'6,99'
        

    ],
    [
        'name' => 'collare per cani',
        'brand' => 'pedigree',
        'price' =>'19,99'
        

    ],
    [
        'name' => 'dentastix',
        'brand' => 'pedigree',
        'price' =>'25,60'
        

    ],
    [
        'name' => 'tappetini igienici',
        'brand' => 'lovedi',
        'price' =>'4,40'
        

    ],

];


// UTENTE
$utente1 = new User('greta','calamari','greta@gmail.com','');
var_dump($utente1);


// utente premium
$utente2 = new UserPremium('greto','calamaro','greto@gmail.com','');
$utente2->setSconto('20%');
var_dump($utente2);

// carta di credito
$card1 = new cartaCredito('987654321', 'greta', 'calamari','20/2030');
$card2 = new cartaCredito('123456789','greto', 'calamaro','07/2023');
var_dump($card1);
var_dump($card2);


$utente1->setcartaCredito($card1);
$utente2->setcartaCredito($card2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
                <?php foreach($items as $key => $value){ 
                            $items = new Products($value['name'],$value['brand'],$value['price']);
                            
                    ?>         
            <div class="card col ms-3 text-center" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $items->name ?> </h5>
                    <p class="card-text"> <?php echo $items->brand ?> </p>
                    <p class="card-text"> <?php echo $items->price ?> </p>
                    <button type="button" class="btn btn-primary">Comprami</button>

                </div>
                
                
            </div>
            <?php } ?>
            
    </div>
</div>
</body>
</html>