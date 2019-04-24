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

            echo "<h2>Question 1 et 2:</h2> ";
            echo "<br>";
            echo min($A, $B, $C);
            echo "<br>";

            echo "<h2>Question 3:</h2>";
            echo "<br>";
            $n = rand(1,100);
             if ($n) {
               // code...
               echo "$n";
             }

            echo "<br>";
            echo "<h2>Question 4:</h2>";
            echo "<br>";
            $N = rand(5,100);
             if ($N) {
               // code...
               echo "$N";
             }
            echo "<br>";
            echo "<br>";
            echo "<h2>Question 5:</h2>";
            echo "<br>";



            function Addition($a, $b)
            {
              // code...
              echo ($a + $b);
            }
            echo addition(5,50);

            echo "<br>";
            echo "<br>";
            echo "<h2>Question 6:</h2>";
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
         echo "<h2>Question 7:</h2>";
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
         echo "<h2>Question 8:</h2>";
         echo "<br>";

         for ($p= 1; $p <= 30; $p++) {
           // code...
           echo $p;
           echo " Petite péruche <br>";
         }

           echo "<br>";
           echo "<br>";
           echo "<h2>Question 9:</h2>";
           echo "<br>";

           for ($p = rand(1,100); $p < 50; $p++) {
             // code...
             echo $p. " Petite péruche <br>";
           }

             echo "<br>";
             echo "<br>";
             echo "<h2>Question 10:</h2>";
             echo "<br>";

              function peruche (){
                $p = rand (1, 10);
                if ($p== 1) {
                  // si $p egal 1 alors
                  echo "AAAA";
                }else if ($p== 2) {
                  // sinon si $p egal 2 alors
                  echo "BBBB";
                }else if ($p== 3) {
                  // sinon si $p egal 3 alors
                  echo "CCCC";
                  // code...
                }else if ($p== 4) {
                  // sinon si $p egal 4 alors
                  echo "DDDD";
                }else{
                  //sinon je suis une perruche
                echo "Je suis un perruche";
              }
            }
            echo peruche();

            echo "<br>";
            echo "<br>";
            echo "<h2>Question 11:</h2>";
            echo "<br>";

            $nbr= rand(1,10);
            switch ($nbr) {
            case '1':
              // code...
            echo "AAAA";
            break;

              case '2':
              // code...
              echo "BBBB";
              break;

                case '3':
                // code...
                echo "CCCC";
                break;

                case '4':
                // code...
                echo "DDDD";
                break;

              default:
                // code...
                echo "Je suis un perruche";
                break;
            }

            echo "<br>";
            echo "<br>";
            echo "<h2>Question 12:</h2>";
            echo "<br>";

            function incl(){
            $x= rand(1,2);
            if ($x=="1") {
              // code...
              include "page1.php";
            } else {
              // code...
              include "page2.php";
            }
          }
          echo incl();

          echo "<br>";
          echo "<br>";
          echo "<h2>Question 13:</h2>";
          echo "<br>";

          $tableau = array();

          for ($i=0;  $i < 10 ; $i++) {
            // code...
            $x = rand (1, 50);

            array_push($tableau, $x);
            echo $tableau[$i]. "<br>";
          }
        ?>
