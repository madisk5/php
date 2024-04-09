<?php
$name = 'Madis Kalmus';
$age = 25;
$height = 1.79;
$height = rand(60,272) / 100;
?>
<p>Nimi: <strong><?php echo $name; ?></strong></p>
<p>Vanus: <?php echo $age; ?></p>
<p>Pikkus: <?php echo $height; ?></p>
<?php
//See pole ilus
if($height >=2) {
    echo 'Hiiglane';

} else {
    echo '<p>Tavaline</p>';

}
?>