<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Practice</title>
</head>
<body>
<form method="GET">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operation = $_GET['operator'];

            switch ($operation) {
                case "None":
                    echo "Select an operation.";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divide":
                    echo $result1 / $result2;
                break;

                default: 
                    echo "Select an operation.";
                break;
            }
        }
    ?>
</body>
</html>