<?php 
    $paragrafo = "Mio caro Marco,
Sono andato stamattina dal mio medico, Ermogene, recentemente rientrato in Villa da un lungo viaggio in Asia. Bisognava che mi visitasse a digiuno ed eravamo d'accordo per incontrarci di primo mattino. Ho deposto mantello e tunica; mi sono adagiato sul letto. Ti risparmio particolari che sarebbero altrettanto sgradevoli per te quanto lo sono per me, e la descrizione del corpo d'un uomo che s'inoltra negli anni ed è vicino a morire di un'idropisia del cuore. Diciamo solo che ho tossito, respirato, trattenuto il fiato, secondo le indicazioni di Ermogene, allarmato suo malgrado per la rapidità dei progressi del male, pronto ad attribuirne la colpa al giovane Giolla, che m’ha curato in sua assenza. È difficile rimanere imperatore in presenza di un medico; difficile anche conservare la propria essenza umana: l’occhio del medico non vede in me che un aggregato di umori, povero amalgama di linfa e di sangue. E per la prima volta, stamane, m’è venuto in mente che il mio corpo, compagno fedele, amico sicuro e a me noto più dell’anima, è solo un mostro subdolo che finirà per divorare il padrone. Basta… Il mio corpo mi è caro; mi ha servito bene, e in tutti i modi, e non starò a lesinargli le cure necessarie. Ma, ormai, non credo più, come finge ancora Ermogene, nelle virtù prodigiose delle piante, nella dosatura precisa di quei sali minerali che è andato a procurarsi in Oriente. È un uomo fine; eppure, m’ha propinato formule vaghe di conforto, troppo ovvie per poterci credere; sa bene quanto detesto questo genere d’imposture, ma non si esercita impunemente più di trent’anni la medicina. Perdono a questo mio fedele il suo tentativo di nascondermi la mia morte. Ermogene è dotto; è persino saggio; la sua probità è di gran lunga superiore a quella d’un qualunque medico di corte. Avrò in sorte d’essere il più curato dei malati. Ma nessuno può oltrepassare i limiti prescritti dalla natura; le gambe gonfie non mi sostengono più nelle lunghe cerimonie di Roma; mi sento soffocare; e ho sessant’anni.";
    $wordToFilter = $_GET["wordToFilter"];
    $fitleredStr = str_replace("$wordToFilter", "***", "$paragrafo")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <header>
        <h1>PHP BAD WORDS</h1>
    </header>

    <main>
        <h2>Le memorie di Adriano</h2>
        <h3>di Marguerite Yourcenar</h3>

        <p>
            <?php echo $paragrafo; ?>
        </p>

        <div class="input-container">
            <form action="./index.php" method="GET">
                <label for="">Inserisci la parola che vuoi filtrare:</label>
                <input type="text" name="wordToFilter" >
                <button> Vai </button>
            </form>
        </div>

        <h2>Testo Filtrato:</h2>
        <p>
            <?php echo $fitleredStr; ?>
        </p>
    </main>
</body>
</html>
