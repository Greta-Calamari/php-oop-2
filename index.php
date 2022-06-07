<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->

<?php 

require_once __DIR__.'/Classes/Products.php';

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

]

?>