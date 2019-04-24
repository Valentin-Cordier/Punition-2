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
            $n = rand(1,100);
             if ($n) {
               // code...
               echo "$n";
             }

            echo "<br>";
            echo "Question 4:";
            echo "<br>";
            $N = rand(5,100);
             if ($N) {
               // code...
               echo "$N";
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

            echo "<br>";
            echo "<br>";
            echo "Question 6:";
            echo "<br>";

        function pgcd($nombre,$nombre2){
       while($nombre>1){
        $reste = $nombre%$nombre2;
        if($reste == 0){
        break; // sorti quand resultat trouvé
        }
        $nombre=$nombre2;
        $nombre2=$reste;
        }
        return $nombre2; // retourne le resultat
        }
         echo pgcd( 250,420 );
         // Affiche 60

         echo "<br>";
         echo "<br>";
         echo "Question 7:";
         echo "<br>";

         function PiouPiou (){
           $x = rand(1,100);
           if ($x <= 50){
             // code...
             echo "Je vais faire du bon visuel";
           } else {
             // code...
             echo "Je suis un piou piou";
         }
       }
         echo PiouPiou();

         echo "<br>";
         echo "<br>";
         echo "Question 8:";
         echo "<br>";

         for ($p= 1; $p <= 30; $p++) {
           // code...
           echo $p;
           echo " Petite péruche <br>";
         }

           echo "<br>";
           echo "<br>";
           echo "Question 9:";
           echo "<br>";

           for ($p = rand(1,100); $p < 50; $p++) {
             // code...
             echo $p. " Petite péruche <br>";
         }
        ?>
