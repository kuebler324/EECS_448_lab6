<?php
    $output = '<table><tbody>';
    for($y = 0; $y <= 100; ++$y) {
        $output .= '<tr>';
        for($x = 0; $x <= 100; ++$x) {
            $output .= '<td>' . ($y === 0 ? ($x === 0 ? '' : $x) : ($x === 0 ? $y : $x * $y)) . '</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</tbody></table>';
    echo $output;
?>