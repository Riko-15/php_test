<?php
for ( $i = 1; $i <= 9; $i++ ) {

  print '<tr>';
  print '<th>' . $i . '</th>';

    for ( $j = 1; $j <= 9; $j++ ) {
      print '<td>' . $i*$j . '</td>';
    }
  print '</tr>' . "\n";
}
