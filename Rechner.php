<!DOCTYPE html>

<html>

    <head>
        <title>Formular</title>    
    </head>

    <body>

    <h3> Formular </h3>

    <table border = 1 cellspacing = 0>
    
        <form method = "post">
        <tr><th>
         Zahl 1 <input type = "number" name = "zahl1"><br>
        </tr></th>
        <tr><th> <select name = "operator">
                <option value = '+'>Adddieren (+)</option>
                <option value = '-'>Subtrahieren (-)</option>
                <option value = '/'>Dividieren (/)</option>
                <option value = '*'>Multiplizieren (*)</option>
            </select><br> </tr></th>
            <tr><th> Zahl 2 <input type = "umber" name = "zahl2"><br> </tr></th>
            <tr><th> <input type = "submit" value = "Rechne"> </tr></th>
        </tr></th>
        </form>


        <?php

            echo "<tr><th>";    

//            print_r ($_POST)

            $zahl1 = $_POST ['zahl1'];
            $op    = $_POST ['operator'];
            $zahl2 = $_POST ['zahl2'];

            if ($op == '+'){
                $erg = $zahl1 + $zahl2;
        }
            if ($op == '-'){
                $erg = $zahl1 - $zahl2;
        } 
            if ($op == '/'){
                $erg = $zahl1 / $zahl2;
        }
            if ($op == '*'){
                $erg = $zahl1 * $zahl2;
        }

        echo "Ergebnis: $erg";
        ?>

    </body>

</html>