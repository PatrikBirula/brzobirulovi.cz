<?php

    // Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    $number = trim($_POST["number"]);

    // Kontroluje data popř. přesměruje na chybovou adresu
    if (empty($name) OR empty($number) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.brzobirulovi.cz/index.php?success=-1#form");
        exit;
    }

    // Nastavte si email, nakterý chcete, aby se vyplněný formulář odeslal - jakýkoli váš email
    $recipient = "info@brzobirulovi.cz";

    // Nastavte předmět odeslaného emailu
    $subject = "Svatebčani ubytování";

    // Obsah emailu, který se vám odešle
    $email_content = "Jméno: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Počet spících: \n$number\n\n";
    $email_content .= "Poznámka: \n$message\n\n";

    // Emailová hlavička
    $email_headers = "From: $name <$email>";

    // Odeslání emailu - dáme vše dohromady
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku
    header("Location: http://www.brzobirulovi.cz/index.php?success=1#form");

?>