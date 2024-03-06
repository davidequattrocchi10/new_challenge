<!-- Challenge Description:
Create a simple PHP script that takes a user's name through a GET request and prints a greeting message to the user. 
If no name is provided, it should print a default greeting message.
Hint:
You can access the parameters passed through a GET request using the $_GET superglobal array. 
Check if the 'name' key exists and is not empty before using it. 
-->

<?php
$_GET['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New hallenge</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <form action="" method="get">
        <div class="form-group mb-3">
            <label for="username"> Username </label>
            <input placeholder="Insert your name" class="form-control" type="text" name="username">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php if (!empty($_GET['username'])) {
        echo 'Welcome ' . $_GET['username'] . "!";
    } elseif ($_GET['username'] === null) {
        echo 'Please, fill out the form';
    } else { ?>
        <div style="color: red;">
            <?php echo 'The form is empty' ?>;
        </div>
    <?php } ?>

</body>

</html>
<style>
    body {
        padding: 1rem;
    }
</style>