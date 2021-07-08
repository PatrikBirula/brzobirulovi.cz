<?php

    // Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $food = trim($_POST["food"]);

    // Kontroluje data popř. přesměruje na chybovou adresu
    if (empty($food)) {
        header("Location: http://www.brzobirulovi.cz/index.php?success=-1#form");
        exit;
    }

    // Nastavte si email, nakterý chcete, aby se vyplněný formulář odeslal - jakýkoli váš email
    $recipient = "info@brzobirulovi.cz";

    // Nastavte předmět odeslaného emailu
    $subject = "Svatebčani jídlo";

    // Obsah emailu, který se vám odešle
    $email_content = "Jméno: $name\n";
    $email_content .= "Jídlo: $food\n\n";

    // Emailová hlavička
    $email_headers = "From: $name <$email>";

    // Odeslání emailu - dáme vše dohromady
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku
    header("Location: http://www.brzobirulovi.cz/index.php?success=1#form");

?>



