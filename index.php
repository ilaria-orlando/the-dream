<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Currency calculator</title>
    </head>
    <body>
        <div class="container">
            <h1>Currency exchange calculator</h1>

        <!-- exchange rate form -->

            <form method="POST" action="index.php">
                <label for="exchange">Enter the amount:</label><br>
                <input type="number" name="exchange"><br>
                <label for="currency">Select currency:</label><br>
                <select name="currency">
                    <option value="NZD">NZ dollar</option>
                    <option value="GPB">British pound</option>
                    <option value="USD">U.S. dollar</option>
                </select><br>
                <input name="toEuro" type="submit" value="To Euro">
                <input name="fromEuro" type="submit" value="From Euro">
            </form>

        <!-- php calculation -->
            <?php
                //check if submit button is pressed, from selected currency to euro
                if(isset($_POST['toEuro'])){
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

                //check if submit button is pressed, from euro to selected currency
                if(isset($_POST['fromEuro'])){
                    //take the amount entered and calculate it to selected currency
                    if($_POST['currency'] == 'NZD'){
                        $amount = $_POST['exchange'] * 1.6899;
                    }
                    if($_POST['currency'] == 'GPB'){
                        $amount = $_POST['exchange'] * 0.9044;
                    }
                    if($_POST['currency'] == 'USD'){
                        $amount = $_POST['exchange'] * 1.2332;
                    }
                    //
                    echo "{$_POST['exchange']} EUR is {$amount} {$_POST['currency']}";
                }

            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL);
            ?>
        </div>
    </body>
</html>