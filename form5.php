<h2>Form 1 - POST request with Sanitised Fields</h2>
<?php
if (!empty($_GET)) {
    $oldinput = $_GET['favouriteColor'];
}
?>
<form action="form5.php" method="POST">
    <label>What is your favourite color?
        <input type="text" name="favouriteColor" value="<?php htmlentities($oldinput); ?>" />
    </label>
    <input type="submit" value='Send'>
</form>

<?php
if (!empty($_GET)) {
    $oldinput = $_GET['favouriteColor'];
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    echo "Your favourite color is: " . $_GET['favouriteColor'];
}
?>