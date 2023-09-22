<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo '<table style="border-collapse: collapse;">';
foreach ($arrs as $item) {
    echo '<tr style="border: 1px solid black;"><td style="padding: 5px;">' . $item . '</td></tr>';
}
echo '</table>';
?>