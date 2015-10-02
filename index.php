<?php
    // Naam van de website
    $businessName = "Hogeschool Meppel";

    // include feed.php (voor het verwerken van de feed)
    require_once("Feed.php");

    // Nieuwe feed
    $feed = new Feed("https://news.google.com/news?cf=all&hl=nl_nl&pz=1&ned=nl_nl&topic=h&output=rss");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $businessName; ?></title>
</head>
<body>
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
    ?>


</body>
</html>