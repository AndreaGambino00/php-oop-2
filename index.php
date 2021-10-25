<?php
    include_once __DIR__ . '/classes/domestic_appliances.php';
    include_once __DIR__ . '/classes/pc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Shopping!</h1>
    </header>

    <main>
        <section>
        <?php // creiamo istanza domestic_appliances
        $domestic_appliances = new domestic_appliances('Samsung', 'Fridge', 500, 50);
        //var_dump($domestic_appliances);
        ?>
            <h2>Cosa vuoi comprare?</h2>
            <div>
                Compro un 
                <?php echo $domestic_appliances->printInfo(); ?>
            </div>
            <div>
                Applicando lo sconto sul prodotto, il prezzo è di euro
                <?php echo $domestic_appliances->fridgePrice(); ?>
            </div>
        </section>

        <section>
        <h2>L'indirizzo di spedizione del tuo computer è: </h2>
        <?php
        $pc = new pc('Dell','Computer', '700');
        $pc->setAddress('Via Garibaldi 1000');
        //var_dump($pc);
        
        ?>
        <?php echo $pc->address; ?>
        </section>
    </main>
    
</body>
</html>
