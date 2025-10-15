<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises </title>
</head>
<body>
    <h1>PHP Exercises</h1>

    <h3>Introduce Yourself</h3>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        Favorite Color: <input type="text" name="favColor"><br>
        <button type="submit" name="introBtn">Submit</button>
    </form>
    <?php
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? '';
        $favColor = $_POST['favColor'] ?? '';
        echo "<p>Hi, I'm $name, I am $age years old, and my favorite color is $favColor.</p>";
    ?>

    <h3>Simple Math</h3>
    <form method="post">
        Number A: <input type="number" name="a"><br>
        Number B: <input type="number" name="b"><br>
        <button type="submit" name="mathBtn">Calculate</button>
    </form>
    <?php
        $a = $_POST['a'] ?? 0;
        $b = $_POST['b'] ?? 0;
        echo "<ul>
                <li>Sum: ".($a + $b)."</li>
                <li>Difference: ".($a - $b)."</li>
                <li>Product: ".($a * $b)."</li>
                <li>Quotient: ".($b != 0 ? number_format($a / $b, 2) : 'Undefined')."</li>
              </ul>";
    ?>

    <h3>Area and Perimeter of a Rectangle</h3>
    <form method="post">
        Length: <input type="number" name="length" step="0.01"><br>
        Width: <input type="number" name="width" step="0.01"><br>
        <button type="submit" name="rectBtn">Compute</button>
    </form>
    <?php
        $length = $_POST['length'] ?? 0;
        $width = $_POST['width'] ?? 0;
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        echo "<ul>
                <li>Area: $area</li>
                <li>Perimeter: $perimeter</li>
              </ul>";
    ?>

    <h3>Temperature Converter</h3>
    <form method="post">
        Celsius: <input type="number" name="celsius" step="0.1"><br>
        <button type="submit" name="tempBtn">Convert</button>
    </form>
    <?php
        $c = $_POST['celsius'] ?? 0;
        $f = ($c * 9/5) + 32;
        echo "<p>$c °C = $f °F</p>";
    ?>

    <h3>Swapping Variables</h3>
    <form method="post">
        X: <input type="number" name="x"><br>
        Y: <input type="number" name="y"><br>
        <button type="submit" name="swapBtn">Swap</button>
    </form>
    <?php
        $x = $_POST['x'] ?? 0;
        $y = $_POST['y'] ?? 0;
        $temp = $x;
        $x = $y;
        $y = $temp;
        echo "<p>After swapping: x = $x, y = $y</p>";
    ?>

    <h3>Salary Calculator</h3>
    <form method="post">
        Basic Salary: <input type="number" name="basic"><br>
        Allowance: <input type="number" name="allowance"><br>
        Deduction: <input type="number" name="deduction"><br>
        <button type="submit" name="salaryBtn">Compute Salary</button>
    </form>
    <?php
        $basic = $_POST['basic'] ?? 0;
        $allowance = $_POST['allowance'] ?? 0;
        $deduction = $_POST['deduction'] ?? 0;
        $net = $basic + $allowance - $deduction;
        echo "<p>Net Salary: ₱$net</p>";
    ?>

    <h3>BMI Calculator</h3>
    <form method="post">
        Weight (kg): <input type="number" name="weight" step="0.1"><br>
        Height (m): <input type="number" name="height" step="0.01"><br>
        <button type="submit" name="bmiBtn">Compute BMI</button>
    </form>
    <?php
        $weight = $_POST['weight'] ?? 0;
        $height = $_POST['height'] ?? 1;
        $bmi = $weight / ($height * $height);
        echo "<p>Your BMI is: ".number_format($bmi, 2)."</p>";
    ?>

    <h3>String Manipulation</h3>
    <form method="post">
        Enter a sentence: <input type="text" name="sentence" size="40"><br>
        <button type="submit" name="stringBtn">Analyze</button>
    </form>
    <?php
        $s = $_POST['sentence'] ?? '';
        echo "<ul>
                <li>Number of characters: ".strlen($s)."</li>
                <li>Number of words: ".str_word_count($s)."</li>
                <li>Uppercase: ".strtoupper($s)."</li>
                <li>Lowercase: ".strtolower($s)."</li>
              </ul>";
    ?>

    <h3>Bank Account Simulation</h3>
    <form method="post">
        Current Balance: <input type="number" name="balance"><br>
        Deposit: <input type="number" name="deposit"><br>
        Withdraw: <input type="number" name="withdraw"><br>
        <button type="submit" name="bankBtn">Update Balance</button>
    </form>
    <?php
        $balance = $_POST['balance'] ?? 0;
        $deposit = $_POST['deposit'] ?? 0;
        $withdraw = $_POST['withdraw'] ?? 0;
        $balance = $balance + $deposit - $withdraw;
        echo "<p>Updated Balance: ₱$balance</p>";
    ?>

    <h3>Simple Grading System</h3>
    <form method="post">
        Math: <input type="number" name="math"><br>
        English: <input type="number" name="english"><br>
        Science: <input type="number" name="science"><br>
        <button type="submit" name="gradeBtn">Compute Grade</button>
    </form>
    <?php
        $math = $_POST['math'] ?? 0;
        $eng = $_POST['english'] ?? 0;
        $sci = $_POST['science'] ?? 0;
        $avg = ($math + $eng + $sci) / 3;
        $grade = match(true) {
            $avg >= 90 => 'A',
            $avg >= 80 => 'B',
            $avg >= 70 => 'C',
            $avg >= 60 => 'D',
            default => 'F'
        };
        echo "<p>Average: ".number_format($avg, 2)."<br>Grade: $grade</p>";
    ?>

    <h3>Currency Converter</h3>
    <form method="post">
        Amount in PHP: <input type="number" name="php" step="0.01"><br>
        <button type="submit" name="currBtn">Convert</button>
    </form>
    <?php
        $php = $_POST['php'] ?? 0;
        $usd = $php * 0.018;
        $eur = $php * 0.017;
        $jpy = $php * 2.66;
        echo "<ul>
                <li>PHP $php = USD ".number_format($usd, 2)."</li>
                <li>PHP $php = EUR ".number_format($eur, 2)."</li>
                <li>PHP $php = JPY ".number_format($jpy, 2)."</li>
              </ul>";
    ?>

    <h3>Travel Cost Estimator</h3>
    <form method="post">
        Distance (km): <input type="number" name="distance" step="0.1"><br>
        Fuel Consumption (km/l): <input type="number" name="consumption" step="0.1"><br>
        Fuel Price (₱/l): <input type="number" name="price" step="0.01"><br>
        <button type="submit" name="travelBtn">Estimate</button>
    </form>
    <?php
        $distance = $_POST['distance'] ?? 0;
        $consumption = $_POST['consumption'] ?? 1;
        $price = $_POST['price'] ?? 0;
        $cost = ($distance / $consumption) * $price;
        echo "<p>Estimated Travel Cost: ₱".number_format($cost, 2)."</p>";
    ?>
</body>
</html>
