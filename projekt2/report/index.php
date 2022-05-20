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
    <title>Report</title>
</head>
<body>
    <?php include "../header.php" ?>
    <article class="allforms">
    <h1>Projektrapport</h1>
    <p>Projektet gick i början bra. Jag hade lätt med att göra registreringsformuläret och profilsidan. Jag tyckte att det gick speciellt bra med att ändra data i databasen. <br>
    Jag hade dock svårigheter i slutet mot projektet då jag försökte göra min gilla knapp. Jag lyckades inte få in en dislike knapp för jag lyckades inte få subtraherat från tidigare likes,<br>
    därför blev det bara en gilla knapp. Jag hade också ganska svårt att få in annonser enligt sortering, men jag lyckades till sist genom att lägga in if satser. <br>
    När jag äntligen blev färdig med projektet och skulle testa igenom hela sidan, så slutade registreringsformuläret och gilla knappen att fungera. Jag kämpade länge med att få registreringsformuläret<br>
    fungera igen, men jag lyckades inte hitta felet. Jag försökte lösa problemet med isset() funktionen samt !empty, och det sista jag provade var null !== $_REQUEST['submit']. Inget fuingerade. <br>
    Till sist gav jag upp för att jag helt enkelt inte kunde hitta felet. Enligt felloggen så är alla mina variabler som innehåller POST eller GET informationen <br>
    undefined. Samma sak hände med gilla knappen ($_REQUEST['likes'] är undefined.). Jag skulle gärna vilja veta vad som är felet, eftersom alla mina andra forms och $_REQUEST/$_POST har fungerat bra... <br>
    För att testa att profilsidan fungerar, använd användarnamnet skurk och lösenord hej .<br>
    Som helhet så hade jag ganska svårt att förstå mig på php, men jag tycker att jag lyckades ganska bra med projektet trots den aningen konstiga errorn med registreringsformuläret.</p>


    <img src="../databasen.png">
    </article>
</body>
</html>