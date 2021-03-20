<h2>Form 2 - GET request with more fields</h2>
<form action="form2.php" method="GET">
    <label>What is your favourite color?
        <input type="text" name="favouriteColor">
    </label>
    <br>
    <br>
    <label for="age">Your age</label>
    <select name="age" id="age">
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
    </select>
    <br>
    <br>
    <input type="submit" value='Send'>
</form>

<?php
if (!empty($_GET)) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    echo "Your favourite color is: " . $_GET['favouriteColor'];
    echo '<br>';
    echo "You are " . $_GET['age'] . " years old.";
}
?>