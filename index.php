<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 $names = array("juan","gustavo","ladislao","anthony");
 
 foreach ($names as $key => $value) {
    echo "<br>".$value;
}
 echo "<br>holaaaa";
 
 
 

?>
<ul>
    <?php foreach ($names as $key => $value) { ?>
    <li><a href="<?php echo $value ?>.php"><?php echo $value ?></a></li>
    <?php }?>
</ul>
