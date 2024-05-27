<?php
function prime($number) {
  if ($number <= 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
      return false;
    }
  }
  return true;
}

// Get user input (replace with the form handling logic)
$number = isset($_POST['number']) ? (int)$_POST['number'] : null;

if (is_numeric($number) && $number > 0) {
  $p = prime($number);
  $result = $p ? "{$number} is a Prime Number" : "{$number} is not a Prime Number";
}
else {
  $result = " ";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Prime Number Checker using PHP</title>
</head>
<body>
  <h1>Prime Number Checker</h1>
  <form method="post">
    <label>Enter a number:</label>
    <input type="var" name="number" id="number" required>
    <br>
    <button type="submit">Check</button>
  </form>
  <p><?php echo $result; ?></p>
</body>
</html>
