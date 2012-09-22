<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 $names = array("juan","gustavo","ladislao","anthony");
 $i = 0;
 foreach ($names as $key => $value) { $i++;
    echo "<br>".$i." ".$value;
}
 echo "<br>holaaaa";
 
 

 $nombre="gustavo";
 echo $nombre;

?>
<ul>
    <?php foreach ($names as $key => $value) { ?>
    <li><a href="<?php echo $value ?>.php"><?php echo $value ?></a></li>
    <?php }?>
</ul>
