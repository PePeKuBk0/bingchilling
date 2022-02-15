<?php
$requireMeno = "meno";
$requireHeslo = "heslo";
$vysledok;

if ($_POST["username"] == $requireMeno && $_POST ["password"] == $requireHeslo):
    $vysledok = "prihlaseny";
else:
    $vysledok = "neprihlaseny";
endif;
?>
<!DOCTYPE html>
    <html>
        <head>
        </head>
            <body>
            <a href = "BING CHILLING.php">
                <?php
                echo $vysledok;
                ?>
                </a>
            </body>
    </html>