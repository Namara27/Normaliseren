<?php

$commisie = $_GET['commisie'];
require_once('Database.php');

$db = new Database();
$aantal = $db->getAantal($commisie);
$result = $db->getLeden($commisie);
$naam = $db->getcommisienaam($commisie);
?>
<!DOCTYPE html>

<head>
    <title><?php echo $naam ?></title>

</head>
<body>

<h1>commisie: <?php echo $naam ?></h1>
<?php
if(isset($error)) {
    echo "<p>.$con.</p>";
}
if($aantal == 0) {
    echo "Er zijn geen gegevens gevonden ..!";
}
else {
    ?>

    <table>
        <tr>
            <th>Naam</th>
            <th>Telefoon</th>
        </tr>
        <?php
        while($row = $result->fetch()) {
            ?>
            <tr>
                <td><?php echo $row['naam'] ?></td>
                <td><?php echo $row['telefoon'] ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td>Aantal leden</td>
            <td><?php echo $aantal ?></td>
        </tr>
    </table>
<?php }?>
<button onclick=window.location.replace("index.php")>Kies een andere commisie</button>
</body>
</html>
