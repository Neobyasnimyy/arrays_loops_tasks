<?php

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row = random_int(1,10);
$col = random_int(1,20);
?>
<table cellspacing="1" cellpadding="10" border="1" align="center">
    <?php for ($i=0;$i<$row;$i++): ?>
        <tr>
            <?php for ($k=0;$k<$col;$k++): ?>
                <td style="background-color: <?php print $colors[array_rand($colors,1)]?>"><?php echo rand(1,100)?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>