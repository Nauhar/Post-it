<?php

echo "<h2>Liste des évènements</h2>";

echo "</br>";
?>

    <div class="container-fluid" style='margin-left: 10px;'>
            <?php $i = 0 ?>

    <?php foreach ($evenements as $evenement):
        echo "<div class='row'>";
        echo "<div class='col-lg-3'>".$evenement['NomEvenement']."</div>"?> <?php echo "<div class='col-lg-2'>".$evenement['Lieu']."</div>"?> <?php echo "<div class='col-lg-2'>".$evenement['VilleEvenement']."</div>"?> <?php echo "<div class='col-lg-1'>".$evenement['DateEvenement']."</div>"?> <?php echo "<div class='col-lg-1'><a href='/messages/index/$evenement[URLEvenement]'>"."Livewall"."</a></div>"?> <?php echo "<div class='col-lg-1'>"."Modération"."</div>"?>
    </div>
    <?php endforeach ?>
    </div>


<?php echo "</br>";
echo '<form><input type="button" value="Créer un évènement" OnClick="window.location.href=\'creation_evenement\'"></form>';
echo "</br></br></br>";
?>