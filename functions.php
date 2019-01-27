<?php

function generateRange($start, $end) {
  echo "<strong>Generating range from $start to $end</strong>\n\n";
  echo "<ul>";
  for ($i = $start; $i <= $end; $i++) {
    echo "<li>The number is: $i</li>";
  }
  echo "</ul>";
}
