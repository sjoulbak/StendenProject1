<header>
  <div class="lang">
    <ul>
      <li><a href="<?php echo $langUrl; ?>lang=en"><img src="images/en.png" /></a></li>
      <li><a href="<?php echo $langUrl; ?>lang=nl"><img src="images/nl.png" /></a></li>
      <?php
        echo "<li>Graden: ".$w->main->temp." &deg;  </li>";
        echo "<li>Zonsopkomst: ".$sunrise->format('H:i:s')."</li>";
      ?>
    </ul>
  </div>
  <?php require('contents/navigation.php'); ?>
</header>
