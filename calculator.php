<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        .calculator {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            max-width: 200px;
            margin: auto;
        }
        input {
            grid-column: span 4;
            padding: 10px;
            font-size: 20px;
            text-align: right;
        }
        button {
            padding: 20px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST">
        <input type="text" name="display" id="display" value="" readonly>
        
        <div class="calculator">
            <button type="button" onclick="addToDisplay('7')">7</button>
            <button type="button" onclick="addToDisplay('8')">8</button>
            <button type="button" onclick="addToDisplay('9')">9</button>
            <button type="button" onclick="addToDisplay('/')">÷</button>

            <button type="button" onclick="addToDisplay('4')">4</button>
            <button type="button" onclick="addToDisplay('5')">5</button>
            <button type="button" onclick="addToDisplay('6')">6</button>
            <button type="button" onclick="addToDisplay('*')">×</button>

            <button type="button" onclick="addToDisplay('1')">1</button>
            <button type="button" onclick="addToDisplay('2')">2</button>
            <button type="button" onclick="addToDisplay('3')">3</button>
            <button type="button" onclick="addToDisplay('-')">−</button>

            <button type="button" onclick="addToDisplay('0')">0</button>
            <button type="button" onclick="calculate()">=</button>
            <button type="button" onclick="clearDisplay()">C</button>
            <button type="button" onclick="addToDisplay('+')">+</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['expression'])) {
        $expression = $_POST['expression'];
        try {
            // Evaluate the expression
            $result = eval("return $expression;");
            echo "<h2>Result: $result</h2>";
        } catch (ParseError $e) {
            echo "<p>Error: Invalid expression.</p>";
        } catch (DivisionByZeroError $e) {
            echo "<p>Error: Division by zero is not allowed.</p>";
        }
    }
    ?>

    <script>
        function addToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function calculate() {
            const expression = document.getElementById('display').value;
            document.forms[0].innerHTML += `<input type="hidden" name="expression" value="${expression}">`;
            document.forms[0].submit();
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }
    </script>
</body>
</html>
