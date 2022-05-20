<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../back-end.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <title>Annonser</title>
</head>
<body>
    <?php include "../header.php";?>
    <article class="allforms">
        <section>
            <?php 

            if(!empty($_REQUEST['ad']) || !empty($_REQUEST['reciever'])) {
                include "../view_ad.php";
            } else {
            include "../view_ads.php" ;
            }
            ?>

        </section>

    </article>
</body>
</html>