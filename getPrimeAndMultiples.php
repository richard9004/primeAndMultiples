<?php

// Function to determine prime numbers and their multiples up to a given limit
function getPrimeAndMultiples(int $limit): array {
    $result = [];
    
    for ($i = 1; $i <= $limit; $i++) {
        $multiples = [];
        
        // Find divisors of the current number
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j === 0) {
                $multiples[] = $j;
            }
        }
        
        // Check if the number is prime (only two divisors: 1 and itself)
        if (count($multiples) === 2) {
            $result[$i] = '[PRIME]';
        } else {
            $result[$i] = '[' . implode(', ', $multiples) . ']';
        }
    }
    
    return $result;
}

// Generate the results for numbers up to my choice
$results = getPrimeAndMultiples(100);

// Print the results
foreach ($results as $number => $label) {
    echo "$number $label\n";
}

?>
