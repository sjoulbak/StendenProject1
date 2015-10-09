<?php
  session_start();
  // Naam van de website
  $businessName = "Hogeschool Meppel";
  $feed = "en_en";
  // include Feed.php (voor het verwerken van de feed)
  require_once("includes/Feed.php");
  // include Weather.php (voor het verwerken van het weer)
  require_once("includes/Weather.php");
  // include Language.php (voor het verwerken van de urls)
  require_once("includes/Language.php");

  // Nieuwe weer
  $weather = new Weather();

    // Temperatuur en zonsopkomstt in Meppel
    $weather->setLocation("Meppel");
    $w = $weather->getWeather();
    $sunrise = new DateTime();
    $sunrise->setTimezone(new DateTimeZone('europe/amsterdam'));
    $sunrise->setTimestamp($w->sys->sunrise);

    //var_dump($url);
    $langUrl = "?";
    foreach($_GET as $key => $val){
        if($key != "lang"){
            $langUrl .= $key."=".$val."&";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $businessName; ?></title>
  <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/index_body.css" rel="stylesheet">
   <link href="css/index_header.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body>
  <header>
    <div id="lang">
      <a href="<?php echo $langUrl; ?>lang=en"><img src="images/en.png" /></a>
      <a href="<?php echo $langUrl; ?>lang=nl"><img src="images/nl.png" /></a>
    </div>
    <nav>
      <ul>
        <li><a class="navhome" href="?page=home">Home</a></li>
        <li><a class="navhome" href="?page=educations">Opleidingen</a></li>
        <li><a class="navhome" href="?page=news">Nieuws</a></li>
        <li><a class="navhome" href="?page=contact">Contact</a></li>
      </ul>
    </nav>
      <div class="temp">
          <?php
          echo "<p>";
          echo "Graden: ".$w->main->temp." &deg; <br />";
          echo "Zonsopkomst: ".$sunrise->format('H:i:s');
          echo "</p>";
          ?>
      </div>
  </header>
  <div class="container">
        <?php
        $top = true;
        $middle = true;
        $page = homePage();
        if(isset($_GET['page'])){

            switch($_GET['page']){
                case "news":

                    // Nieuwe feed
                    $feed = new Feed("https://news.google.com/news?cf=all&hl=nl_nl&pz=1&ned=".$feed."&topic=h&output=rss");

                    // Feed channel laten zien
                    $channel = $feed->getChannel();
                    $page = "<h2><a href='".$channel->link."' target='_blank'>".$channel->title."</a></h2>";
                    $page .=  "<br />";

                    // Feed items laten zien
                    foreach($feed->getItems() as $val){
                        $page .= "<p>";
                        $page .= $val->title;
                        $page .= "<br />";
                        $page .= $val->description;
                        $page .= "</p>";
                    }


                    $top = false;
                    $middle = false;
                    break;
                case "educations":
                    $page = educationsPage();
                    $top = false;
                    $middle = false;
                    break;
                case "contact":
                    $page = contactPage();
                    $top = false;
                    $middle = false;
                    break;
                default:
                    $page = homePage();
                    break;
            }

        }



        if($top == true){
            echo '

              <section class="top">
              </section>
            ';
        }
        if($middle == true){
            echo '
              <section class="mid">
                  <img src="./images/circle.png"  height="100" width="100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                      Aenean scelerisque magna nibh. Nam ligula lectus,<br>
                  <h4>-dasdsad</h4>
              </section>
            ';
        }
        ?>
    <section class="bottom">
        <?php
            echo $page;
        ?>
    </section>
  </div>
  <footer>

  </footer>
</body>
</html>
