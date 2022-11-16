<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kontaktskjema</title>
    </head>
    <body>
        <main>
            <p>Kontaktskjema, send E-post.</p>
            <form class="kontakt-skjema" action="./inc/kontakt-skjema.php" method="POST">
                <input type = "text" name = "name" placeholder="Fult navn">
                <br>
                <input type = "text" name = "mail" placeholder="Din epost">
                <br>
                <input type = "text" name = "emne" placeholder="Emne">
                <br>
                <textarea name = "message" placeholder="Melding"></textarea>
                <br>
                <button type ="submit" name ="submit">Send Mail</button>
                
                 
            </form>
        </main>
    </body>
</html>