<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>
<body>

<ol>

<li>
    <h3>Introduce Yourself</h3>
    <?php
        $name = "Paul";
        $age = 21;
        $favColor = "Blue";
    ?>
    <ul>
        <li>Hi, I'm <?php echo $name; ?>, I am <?php echo $age; ?> years old, and my favorite color is <?php echo $favColor; ?>.</li>
    </ul>
</li>

<li>
    <h3>Simple Math</h3>
    <?php
        $a = 20;
        $b = 15;
        $sum = $a + $b;
        $diff = $a - $b;
        $prod = $a * $b;
        $quot = $a / $b;
    ?>
    <ul>
        <li>Sum: <?php echo $sum; ?></li>
        <li>Difference: <?php echo $diff; ?></li>
        <li>Product: <?php echo $prod; ?></li>
        <li>Quotient: <?php echo $quot; ?></li>
    </ul>
</li>
>
<li>
    <h3>Area and Perimeter of a Rectangle</h3>
    <?php
        $length = 10;
        $width = 5;
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
    ?>
    <ul>
        <li>Area: <?php echo $area; ?></li>
        <li>Perimeter: <?php echo $perimeter; ?></li>
    </ul>
</li>

<li>
    <h3>Temperature Converter</h3>
    <?php
        $celsius = 37;
        $fahrenheit = ($celsius * 9/5) + 32;
    ?>
    <ul>
        <li><?php echo $celsius; ?>°C = <?php echo $fahrenheit; ?>°F</li>
    </ul>
</li>

<li>
    <h3>Swapping Variables</h3>
    <?php
        $x = 7;
        $y = 3;
        $temp = $x;
        $x = $y;
        $y = $temp;
    ?>
    <ul>
        <li>After swapping: x = <?php echo $x; ?>, y = <?php echo $y; ?></li>
    </ul>
</li>

<li>
    <h3>Salary Calculator</h3>
    <?php
        $basic_salary = 10500;
        $allowance = 4000;
        $deduction = 2000;
        $net_salary = $basic_salary + $allowance - $deduction;
    ?>
    <ul>
        <li>Net Salary: ₱<?php echo $net_salary; ?></li>
    </ul>
</li>

<li>
    <h3>BMI Calculator</h3>
    <?php
        $weight = 95;
        $height = 1.65;
        $bmi = $weight / ($height * $height);
    ?>
    <ul>
        <li>Your BMI is: <?php echo number_format($bmi, 2); ?></li>
    </ul>
</li>

<li>
    <h3>String Manipulation</h3>
    <?php
        $sentence = "PHP is fun and powerful!";
    ?>
    <ul>
        <li>Number of characters: <?php echo strlen($sentence); ?></li>
        <li>Number of words: <?php echo str_word_count($sentence); ?></li>
        <li>Uppercase: <?php echo strtoupper($sentence); ?></li>
        <li>Lowercase: <?php echo strtolower($sentence); ?></li>
    </ul>
</li>

<li>
    <h3>Bank Account Simulation</h3>
    <?php
        $balance = 10000;
        $deposit = 2500;
        $withdraw = 4000;
        $balance = $balance + $deposit - $withdraw;
    ?>
    <ul>
        <li>Updated Balance: ₱<?php echo $balance; ?></li>
    </ul>
</li>

<li>
    <h3>Simple Grading System</h3>
    <?php
        $math = 85;
        $english = 90;
        $science = 88;
        $average = ($math + $english + $science) / 3;

        if ($average >= 90) $grade = "A";
        elseif ($average >= 80) $grade = "B";
        elseif ($average >= 70) $grade = "C";
        elseif ($average >= 60) $grade = "D";
        else $grade = "F";
    ?>
    <ul>
        <li>Average: <?php echo number_format($average, 2); ?></li>
        <li>Grade: <?php echo $grade; ?></li>
    </ul>
</li>


<li>
    <h3>Currency Converter</h3>
    <?php
        $amount_php = 1000;
        $usd_rate = 0.018;
        $eur_rate = 0.017;
        $jpy_rate = 2.66;

        $to_usd = $amount_php * $usd_rate;
        $to_eur = $amount_php * $eur_rate;
        $to_jpy = $amount_php * $jpy_rate;
    ?>
    <ul>
        <li>PHP <?php echo $amount_php; ?> = USD <?php echo number_format($to_usd, 2); ?></li>
        <li>PHP <?php echo $amount_php; ?> = EUR <?php echo number_format($to_eur, 2); ?></li>
        <li>PHP <?php echo $amount_php; ?> = JPY <?php echo number_format($to_jpy, 2); ?></li>
    </ul>
</li>

<li>
    <h3>Travel Cost Estimator</h3>
    <?php
        $distance = 50;
        $fuel_consumption = 7;
        $fuel_price = 90;
        $travel_cost = ($distance / $fuel_consumption) * $fuel_price;
    ?>
    <ul>
        <li>Estimated Travel Cost: ₱<?php echo number_format($travel_cost, 2); ?></li>
    </ul>
</li>

</ol>

</body>
</html>
