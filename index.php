<?php
  session_start();
  // Naam van de website
  $businessName = "Hogeschool Meppel";

  // include Feed.php (voor het verwerken van de feed)
  require_once("includes/Feed.php");
  // include Weather.php (voor het verwerken van het weer)
  require_once("includes/Weather.php");
  // include Language.php (voor het verwerken van de urls)
  require_once("includes/Language.php");

  // Nieuwe feed
  $feed = new Feed("https://news.google.com/news?cf=all&hl=nl_nl&pz=1&ned=nl_nl&topic=h&output=rss");
  // Nieuwe weer
  $weather = new Weather();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $businessName; ?></title>
</head>
<body>
  <div class="container">
    <h1><?php echo $businessName; ?></h1>
    <?php
    // Feed channel laten zien
    $channel = $feed->getChannel();
    echo "<h2><a href='".$channel->link."' target='_blank'>".$channel->title."</a></h2>";
    echo "<br />";

    // Feed items laten zien
    foreach($feed->getItems() as $val){
        echo "<p>";
        echo $val->title;
        echo "<br />";
        echo $val->description;
        echo "</p>";
    }

    // Temperatuur en zonsopkomstt in Meppel
    $weather->setLocation("Meppel");
    $w = $weather->getWeather();
    $sunrise = new DateTime();
    $sunrise->setTimezone(new DateTimeZone('europe/amsterdam'));
    $sunrise->setTimestamp($w->sys->sunrise);

    echo "<p>";
    echo "Graden: ".$w->main->temp." &deg; <br />";
    echo "Zonsopkomst: ".$sunrise->format('H:i:s');
    echo "</p>";

    ?>
  </div>
</body>
</html>
