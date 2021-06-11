
<table border="1" cellpadding="0" style="border-collapse : collapse">
  <?php
  for ($a = 1; $a <= 9; $a++) {
    print '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      print '<td>' . $a * $b . '<td>';
    }
    print '</tr>';
  }
  ?>
</table>