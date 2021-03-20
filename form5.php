<h2>Form 1 - POST request with Sanitised Fields</h2>
<?php
$oldinput = $_GET['favouriteColor'];
?>
<form action="form5.php" method="POST">
    <label>What is your favourite color?
        <input type="text" name="favouriteColor" value="<?php echo htmlspecialchars($oldinput); ?>" />
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