<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>Currency calculator</title>
    </head>
    <body>
        <h1>Currency exchange calculator for New Zealand dollar</h1>

        <!-- exchange rate form -->

        <form method="POST" action="index.php">
            <label for="euro">Enter the amount:</label>
            <input type="number" name="nzdollar">
            <input name="submit" type="submit" value="calculate">
        </form>

        <!-- php calculation -->
            <?php
                if(isset($_POST['submit'])){
                    echo "it works!";
                }
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            ?>
    </body>
</html>