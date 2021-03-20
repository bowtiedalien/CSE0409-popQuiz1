<h2>Form 1 - GET request</h2>
<form action="form1.php" method="GET">
    <label>What is your favourite color?
        <input type="text" name="favouriteColor">
    </label>
    <input type="submit" value='Send'>
</form>

<?php
if (!empty($_GET)) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    echo "Your favourite color is: " . $_GET['favouriteColor'];
}
?>