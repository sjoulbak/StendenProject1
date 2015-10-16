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
  <nav>
    <ul>
      <li><a class="navhome" href="?page=home">Home</a></li>
      <li><a class="navhome" href="?page=educations">Opleidingen</a></li>
      <li><a class="navhome" href="?page=news">Nieuws</a></li>
      <li><a class="navhome" href="?page=contact">Contact</a></li>
    </ul>
  </nav>
</header>
