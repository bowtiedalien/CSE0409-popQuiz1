<h2>Form 4 - POST request with more fields</h2>
<form action="form4.php" method="POST">
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
    <label>You like:
        <br>
        <input type="checkbox" id="pizza" name="favouriteFood[]" value='pizza'>
        <label for="pizza">Pizza</label>
        <input type="checkbox" id="mango" name="favouriteFood[]" value='mango'>
        <label for="mango">Mango</label>
        <input type="checkbox" id="cake" name="favouriteFood[]" value='cake'>
        <label for="cake">Cake</label>
        <input type="checkbox" id="vegetables" name="favouriteFood[]" value='veggies'>
        <label for="pizza">Vegetables</label>
    </label>
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
//     echo 'You like: ';       --not working for some reason
//     echo '<br>';
//     if (is_array($_POST['favouriteFood[]'])) {

//         foreach ($_POST['favouriteFood[]'] as $value) {
//             echo 'Checked: ' . $value . '<br/>';
//         }
//     }
// }
?>