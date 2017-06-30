
<table cellspacing="0" cellpadding="10" border="1" align="center">
    <?php for ($i=1;$i<=10;$i++): ?>
        <tr>
            <?php for ($k=1;$k<=10;$k++): ?>
                <td><?=$i*$k?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
