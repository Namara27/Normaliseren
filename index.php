<?php
/**
 * Created by PhpStorm.
 * User: beuningent
 * Date: 22-05-17
 * Time: 09:52
 */
require_once('Database.php');

$db = new Database();
$commisies =$db->getCommisies();
?>
<!DOCTYPE HTML>
<head>
    <title>Kies commissie</title>
    <script>
        function updateValue(value)
        {
            window.location.replace("commisie.php?commisie=" + value);
        }

    </script>
</head>
<body>
<h1>Kies een commissie</h1>
<?php
if(isset($error)) {
    echo "<p>.$con.</p>";
}
?>
commissie: <select name="commisie" onchange="updateValue(this.value)">
    <option value=''>Kies een commissie
        <?php
        while($row = $commisies->fetch()) {
        ?>
    <option value='<?php echo $row['commisieid'].'\'>'. $row['commisienaam'] ?>
            </option>
        <?php } ?>
    </select>
    </body>
</html>