<!DOCTYPE html>
<html>
      <head>
        <meta charset="utf-8" />
            <title>Punition-2</title>
      </head>
      <body>
        <?php
             $A = "98";
             $B = "97";
             $C = "96";
             $nbr1 = "1";
             $nbr2 = "100";

            echo "Question 1 et 2: ";
            echo "<br>";
            echo min($A, $B, $C);
            echo "<br>";

            echo "Question 3:";
            echo "<br>";
            if ($nbr1 >= 1 AND $nbr2 <= 100) {
              // code...
              echo "Les valeurs sont comprises entre 1 et 100";
            } else {
              // code...
              echo "Les valeurs ne sont pas comprises entre 1 et 100";
            }

            echo "<br>";
            echo "Question 4:";
            echo "<br>";
            if ($nbr1 >= 5 AND $nbr2 <= 100) {
              // code...
              echo "Les valeurs sont comprises entre 5 et 100";
            } else {
              // code...
              echo "Les valeurs ne sont pas comprises entre 5 et 100";
            }
            echo "<br>";
            echo "<br>";
            echo "Question 5:";
            echo "<br>";



            function Addition($a, $b)
            {
              // code...
              echo ($a + $b);
            }
            echo addition(5,50);


        ?>
