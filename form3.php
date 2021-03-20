<h2>Form 3 - POST request</h2>
<form action="form3.php" method="POST">
    <label>What is your favourite color?
        <input type="text" name="favouriteColor">
    </label>
    <br>
    <br>
    <label>You are:</label>
    <br>
    <label for="male">Male</label>
    <input type="radio" name='sex' id="male" value="male">
    <label for="female">Female</label>
    <input type="radio" name='sex' id="female" value="female" checked>
    <br>
    <br>
    <input type="submit" value='Send'>
</form>

<?php
if (!empty($_POST)) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    echo '<br>';
    echo "Your favourite color is: " . $_POST['favouriteColor'];
    echo '<br>';
    echo "Your are: " . $_POST['sex'];
    echo '<br>';
}
?>