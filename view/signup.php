<?php
// hoofdpagina met includes van de create formulier en gegevens tabel
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/assets/scss/includes.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/662656f14c.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="signup">

    <div class="col-12 logo">
        <a href="index.php"><img src="view/assets/images/Spotify-Logo-black.jpg" style="width: 10%;" alt="logo"></a>
    </div>

    <div class="col-12 form">
        <button type="button" class="btn btn-primary">Meld je aan via facebook</button>

        <form style="width: 20%; margin: 0 auto;">
            <div class="form-group">
                <label for="">Aanmelden met je e-mailadres</label>
                <input type="text" class="form-control" placeholder="email">
                <input type="text" class="form-control" placeholder="email bevestigen">
                <input type="text" class="form-control" placeholder="wachtwoord">
                <input type="text" class="form-control" placeholder="hoe mogen we je noemen">

                <label for="">Aanmelden met je e-mailadres</label>
                <input type="text" class="form-control" placeholder="dag" style="width: 30%; float: left;">
                <input type="text" class="form-control" placeholder="maand" style="width: 30%; float: left;">
                <input type="text" class="form-control" placeholder="jaar" style="width: 30%; float: left;">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input mr" name="" id="" value="checkedValue" ><span>man</span>
                        <input type="radio" class="form-check-input" name="" id="" value="checkedValue"><span>vrouw</span>
                        <input type="radio" class="form-check-input" name="" id="" value="checkedValue"><span>overig</span>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                    Deel mijn registratiegegevens met de contentleveranciers van Spotify voor marketingdoeleinden. Houd er rekening mee dat je gegevens mogelijk worden overgedragen naar een land buiten de EER, zoals staat beschreven in ons privacybeleid.
                  </label>
                </div>
                <div style="height: 2pc;">

                </div>

                <p>Wanneer u op "Inschrijven" klikt, gaat u akkoord met de Gebruiksvoorwaarden van Spotify. 

Voor meer informatie over hoe Spotify uw persoonlijke gegevens verzamelt, gebruikt en beschermt, leest u het privacybeleid van Spotify.</p>

                <button type="button" class="btn btn-primary aanmelden">aanmelden</button>

            </div>
        </form>
    </div>


</div>