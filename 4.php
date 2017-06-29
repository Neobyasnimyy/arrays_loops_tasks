<?php

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой']; ?>
<table cellspacing="0" cellpadding="5">
    <?php foreach ($arr as $key => $item): ?>
        <tr>
            <td><?=$key?></td><td><?=$item?></td>
        </tr>
    <?php endforeach; ?>  <!--почему тут нельзя использовать такой вид <?php /*endforeach; */?>-->
</table>