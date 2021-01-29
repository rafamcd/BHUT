<!--
         # Challenge - Backend Developer
         Empresa: BHUT
         Candidato: RAFAEL MASCARENHAS CUSTÓDIO DIAS
         Data: 29/01/2021
            Using SOLID principles, write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "BHUT". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "BHUT TI".
            But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.
            # Requirements
            * 1 if
            * You can't use `else`, `else if` or ternary
            * Unit tests
            * You can write the challenge in any language you want. Here we are big fans of PHP        
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Teste BHUT</title>        
    </head>
    <body>
    <?php        
        echo "<h1>Teste BHUT</h1>";
        for($i=1; $i<=100; $i++) {            
            switch($i) {
                case ($i % 3 == 0):
                    echo "BHUT";
                       if ($i % 5 == 0)
                         echo " IT";
                    echo "<br/>";
                    break;
                    
                case ($i % 5 == 0):
                    echo "IT <br/>";                    
                    break;               
               
                default: 
                    echo $i . "<br/>";
                    break;
            }
        }
    ?>
    </body>
</html>
