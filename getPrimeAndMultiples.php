<?php
function getPrimeAndMultiples(int $numbers): array {
    $result = [];

    for ($i = 1; $i <= $numbers; $i++) {
        $multiples = [];

        // Find multiples of $i
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $multiples[] = $j;
            }
        }

        // if only 2 dividers 1 and by itself then prime number
        if (count($multiples) == 2) {
            $result[$i] = "PRIME";
        } else {
            $result[$i] = "[" . implode(", ", $multiples) . "]";
        }
    }

    return $result;
}

// Scalable function is provided, I can input 100, 200 etc )
echo json_encode(getPrimeAndMultiples(100), JSON_PRETTY_PRINT);
?>
