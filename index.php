<?php

require_once('includes/header.php');
?>

<div class="derniers">
    <h4>
        Derniers T-Shirt </h4>
    <?php

    $select = $db->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,3");
    $select->execute();

    while($s=$select->fetch(PDO::FETCH_OBJ)){

        $lenght=50;

        $description = $s->description;
        $new_description=substr($description,0,$lenght)."...";
        $description_finale=wordwrap($new_description,50,'<br/>',false);
    }

        ?>


</div>
<?php
require_once('includes/footer.php');
?>
