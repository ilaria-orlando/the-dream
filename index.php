<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Currency calculator</title>
    </head>
    <body>
        <h1>Currency exchange calculator for New Zealand dollar</h1>

        <!-- exchange rate form -->

        <form method="POST" action="index.php">
            <label for="euro">Enter the amount:</label>
            <input type="number" name="exchange">
            <select name="currency">
                <option value="NZD">NZ dollar</option>
                <option value="GPB">British pound</option>
                <option value="USD">U.S. dollar</option>
            </select>
            <input name="submit" type="submit" value="calculate">
        </form>

        <!-- php calculation -->
            <?php
                //check if submit button is pressed
                if(isset($_POST['submit'])){
                    //take the amount entered and calculate it to euros
                    if($_POST['currency'] == 'NZD'){
                        $amount = $_POST['exchange'] * 0.58;
                    }
                    if($_POST['currency'] == 'GPB'){
                        $amount = $_POST['exchange'] * 1.1057;
                    }
                    if($_POST['currency'] == 'USD'){
                        $amount = $_POST['exchange'] * 0.8109;
                    }
                    //
                    echo "{$_POST['exchange']} {$_POST['currency']} is {$amount} EUR";
                }
            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            ?>
    </body>
</html>