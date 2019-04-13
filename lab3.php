<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Week 1 - Lab 3</title>
</head>
<body>

<?php 
    $country = '';
    $state = '';

    if(isset($_POST['country']) & $_POST['country'] != 'none'){
        setcookie("Country",$_POST['country'], time() + 7200);
        $country = $_POST['country'];

    }
    if(isset($_POST['state']) & $_POST['state'] != 'none'){
        setcookie("State", $_POST['state'], time() + 7200);
        $state = $_POST['state'];
    }
?>
    <div class="container m-4">
        <h1 class="text-info">Lab - 3</h1>
        <form class="mt-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <label for="country">Country</label>
            <select name="country" id="country">
                <option value="none">---Select---</option>
                <option value="usa" <?php if($_POST['country'] == 'usa') echo "selected" ?>>USA</option>
                <option value="canada" <?php if($_POST['country'] == 'canada') echo "selected" ?>>Canada</option>
                <option value="uk" <?php if($_POST['country'] == 'uk') echo "selected" ?>>UK</option>
            </select>
            <br><br>
            <label for="state">State</label>
            <select name="state" id="state">
                <option value="none">---Select---</option>
                <option value="wa" <?php if($_POST['state'] == 'wa') echo "selected" ?>>Washington</option>
                <option value="or" <?php if($_POST['state'] == 'or') echo "selected" ?>>Oregon</option>
                <option value="ny" <?php if($_POST['state'] == 'ny') echo "selected" ?>>New York</option>
                <option value="ga" <?php if($_POST['state'] == 'ga') echo "selected" ?>>Georgia</option>
                <option value="fl" <?php if($_POST['state'] == 'fl') echo "selected" ?>>Florida</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" class="btn btn-primary">
            
        </form>
    </div>    
</body>
</html>