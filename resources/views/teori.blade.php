<?php
    function isPrime($x)
    {
        if ($x == 0 || $x == 1){
            return false;
        }

        for ($i = 2; $i * $i <= $x; ++$i) {
            if ($x % $i == 0){
                return false;
            }
        }
            
        return true;
    }

    function findPrimes($n)
    {
        echo($n.' = ');

        if (isPrime($n)){
            echo($n);
        }else if (isPrime($n - 2)){
            echo(2 . "+" . ($n - 2));
        }else {
            echo(3 . "+");
            $n = $n - 3;
            for ($i = 0; $i < $n; $i++) 
            {
                if (isPrime($i) && 
                    isPrime($n - $i))
                {
                    echo($i . "+" . 
                        ($n - $i));
                    break;
                }
            }
        }
    }
    
    // Driver code
    $n = 27;
    findPrimes($n); 
?>