<div class="container">
  <?php
    $top = false;
    $middle = false;
    if(isset($_GET['page'])) {
      switch($_GET['page']) {
        case "news":
          // Nieuwe feed
          $feed = new Feed("https://news.google.com/news?cf=all&hl=nl_nl&pz=1&ned=".$feed."&topic=h&output=rss");

          // Feed channel laten zien
          $channel = $feed->getChannel();
          $page = "<h2><a href='".$channel->link."' target='_blank'>".$channel->title."</a></h2>";
          $page .=  "<br />";

          // Feed items laten zien
          foreach($feed->getItems() as $val) {
            $page .= "<p>";
            $page .= $val->title;
            $page .= "<br />";
            $page .= $val->description;
            $page .= "</p>";
          }
          break;
        case "educations":
          $page = educationsPage();
          break;
        case "contact":
          $page = contactPage();
          break;
        default:
          $top = true;
          $middle = true;
          $page = homePage();
          break;
      }
    } else {
      $top = true;
      $middle = true;
      $page = homePage();
    }

    if($top == true){
      echo '<section class="top"><a href="https://app.studielink.nl/front-office/?brinCode=22EX" class="button">Direct aanmelden via Studielink</a></section>';
    }
    if($middle == true){
      echo '<section class="mid">
              <img src="./images/circle.png"  height="100" width="100"></img>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p>Aenean scelerisque magna nibh. Nam ligula lectus,</p>
              <h4>-dasdsad</h4>
            </section>';
    }
  ?>
  <section class="bottom">
    <?php
      echo $page;
    ?>
  </section>
</div>
