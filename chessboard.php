<table width="400px" border="2px" cellspacing="0" cellpadding="0">
    <?php
    for ($i = 0; $i <= 8; $i++) {
        echo "<tr>";

        for ($j = 0; $j <= 8; $j++) {
            $total = $i + $j;
            if ($total % 2 == 0) {
                echo "<td width='35px' height='30px' bgcolor='black'></td>";
            } else {
                echo "<td width='35px' height='30px' bgcolor='white'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
