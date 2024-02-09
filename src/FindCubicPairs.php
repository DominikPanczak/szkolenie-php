<?php
use HashMap\HashMap;

function findPairs($n)
{
    $map = [];

    for ($a = 1; $a <= $n; $a++) {
        $aCubed = pow($a, 3);
        for ($b = $a; $b <= $n; $b++) {
            $sum = $aCubed + pow($b, 3);

            if (!isset($map[$sum])) {
                $map[$sum] = [$a, $b];
            } else {
                // Znaleziono pasującą parę
                $pair = $map[$sum];
                print_r( "SUMA: {$sum}, a: {$pair[0]}, b: {$pair[1]}, c: $a, d: $b\r");
            }
        }
    }
}

findPairs(1000);


function findCubicPairs($n) {
    $results = [];

    for ($a = 1; $a <= $n; $a++) {
        for ($b = $a; $b <= $n; $b++) { // Ograniczenie zakresu b
            $sum = pow($a, 3) + pow($b, 3);

            if (!isset($results[$sum])) {
                $results[$sum] = [];
            }
            $results[$sum][] = [$a, $b];
        }
    }

    foreach ($results as $sum => $pairs) {
        $numPairs = count($pairs);
        if ($numPairs > 1) { // Tylko jeśli istnieje więcej niż jedna para
            for ($i = 0; $i < $numPairs; $i++) {
                for ($j = $i + 1; $j < $numPairs; $j++) { // Unikanie powtórzeń
                    echo "a: {$pairs[$i][0]}, b: {$pairs[$i][1]}, c: {$pairs[$j][0]}, d: {$pairs[$j][1]}\n";
                }
            }
        }
    }
}

#findCubicPairs(1000);
?>