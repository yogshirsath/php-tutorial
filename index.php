<?php
require_once('header.php');
function arithmetic_operation_with_validation() {
    $error = '';
    if (!isset($_POST['number1'])) {
        $error .= '<p>Please enter number1</p>';
    } else {
        $number1 = $_POST['number2'];
    }
    if (!isset($_POST['number2'])) {
        $error .= '<p>Please enter number2</p>';
    } else {
        $number2 = $_POST['number2'];
    }
    if ($error != '') {
        return $error;
    }
    if (isset($_POST['add'])) {
        return 'Addition is ' . ((int) $number1 + (int)$number2);
    } else if (isset($_POST['subtract'])) {
        return 'Subtraction is ' . ((int) $number1 - (int)$number2);
    } else if (isset($_POST['multiply'])) {
        return 'Multiplication is ' . ((int) $number1 * (int)$number2);
    } else if (isset($_POST['divide'])) {
        return 'Division is ' . ((int) $number1 / (int)$number2);
    }
}

function arithmetic_operation() {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    if (isset($_POST['add'])) {
        return 'Addition is ' . ((int) $number1 + (int)$number2);
    } else if (isset($_POST['subtract'])) {
        return 'Subtraction is ' . ((int) $number1 - (int)$number2);
    } else if (isset($_POST['multiply'])) {
        return 'Multiplication is ' . ((int) $number1 * (int)$number2);
    } else if (isset($_POST['divide'])) {
        return 'Division is ' . ((int) $number1 / (int)$number2);
    }
    return 'Error';
}
?>
<div class="container">
  <h3>Welcome Admin User</h3>
</div>
<div class="container">
    <form method="POST">
        <input type="hidden" name="arithmetic">
        <div class="form-group">
            <label for="number1">Number 1</label>
            <input type="number" class="form-control" id="number1" name="number1" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="number2">Number 2</label>
            <input type="number" class="form-control" id="number2" name="number2" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : '' ?>">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Add +</button>
        <button type="submit" name="subtract" class="btn btn-primary">Subtract -</button>
        <button type="submit" name="multiply" class="btn btn-primary">Multiply *</button>
        <button type="submit" name="divide" class="btn btn-primary">Divide /</button>
    </form>
    <?php
    if (isset($_POST['arithmetic'])) {
        echo arithmetic_operation();
    }
    $list = ["Sheep",  "Window",  "Wink",  "Spring",  "Language",  "Walk",  "Bare",  "Unbiased",  "Opposite",  "Flimsy",  "Nosy",  "Lock"];
    echo "<h2>Word List</h2>";
    echo "<ul>";
    foreach ($list as $value) {
        echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
    if (isset($_GET['search'])) {
        echo "<label> " . $_GET['search-input'];
        if (!in_array($_GET['search-input'], $list)) {
            echo " not";
        }
        echo " found in word list.</label>";
    }
    ?>
</div>
<?php
require_once('footer.php');