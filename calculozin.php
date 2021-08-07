<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if($a == NULL || $b == NULL || $c == NULL ){
            echo "Preencha os valores corretamente";
        }

        else{
            if($a ==0){
                echo "Digite um valor diferente de 0 (zero) para A";
            }

            else{
                $delta = pow($b, 2) - (4 * $a * $c);
                echo "O valor de delta é $delta<br>Logo, ";

                if($delta > 0){
                    $x1 = ((-1 * $b) + sqrt($delta)) / (2 * $a);
                    $x2 = ((-1 * $b) - sqrt($delta)) / (2 * $a);
                    echo "os valores das raizes são ". str_replace('.',',', round($x1,2)). " e ". str_replace('.',',', round($x2, 2));
                    
                }

                else if($delta == 0){
                    $x = (-1 * $b) / (2 * $a);
                    echo "o valor da raiz é ". str_replace('.',',', round($x, 2));
                }

                else{
                    echo "a equação não possui raízes";
                }
            }
        }
    ?>