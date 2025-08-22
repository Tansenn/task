<?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "<h1>Rectangle Calculations</h1>";
echo "<p>Length: $length, Width: $width</p>";
echo "<p><strong>Area:</strong> $area</p>";
echo "<p><strong>Perimeter:</strong> $perimeter</p>";

$amount = 100;
const VAT_RATE = 0.15;

$vat_amount = $amount * VAT_RATE;
$total_amount = $amount + $vat_amount;

echo "<hr>";
echo "<h1>VAT Calculation</h1>";
echo "<p>Original Amount: $" . number_format($amount, 2) . "</p>";
echo "<p>VAT (" . (VAT_RATE * 100) . "%): $" . number_format($vat_amount, 2) . "</p>";
echo "<p><strong>Total Amount (including VAT):</strong> $" . number_format($total_amount, 2) . "</p>";

$number = 7;
echo "<hr>";
echo "<h1>Odd or Even Checker</h1>";
if ($number % 2 == 0) {
    echo "<p>The number $number is an even number.</p>";
} else {
    echo "<p>The number $number is an odd number.</p>";
}

$num1 = 15;
$num2 = 25;
$num3 = 10;

echo "<hr>";
echo "<h1>Largest Number Finder</h1>";
if ($num1 >= $num2 && $num1 >= $num3) {
    echo "<p>The largest number is: $num1</p>";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "<p>The largest number is: $num2</p>";
} else {
    echo "<p>The largest number is: $num3</p>";
}

echo "<hr>";
echo "<h1>Odd Numbers from 10 to 100</h1>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

$my_array = ["toyota", "nissan", "ford"];
$search_element = "toyota";
$found = in_array($search_element, $my_array);

echo "<hr>";
echo "<h1>Array Search Result</h1>";
if ($found) {
    echo "<p>The element '$search_element' was found in the array.</p>";
} else {
    echo "<p>The element '$search_element' was not found in the array.</p>";
}

echo "<hr>";
echo "<h1>Pattern Printing</h1>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";

$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}

echo "<br>";

$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if (is_numeric($arr[$i][$j])) {
            echo $arr[$i][$j] . " ";
        }
    }
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if (!is_numeric($arr[$i][$j])) {
            echo $arr[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>
