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
  foreach($_GET as $key => $val) {
    if($key != "lang") {
      $langUrl .= $key."=".$val."&";
    }
  }

  function generateJavascriptErrors($id, $error){
    $script = '
      var error = document.createElement("span");
        error.setAttribute("class", "error");
        error.innerHTML = "'.$error.'";
      document.getElementById("'.$id.'").appendChild(error);
      if("'.$id.'" == "message") {
        var textarea = document.getElementById("'.$id.'").querySelector("textarea");
          textarea.style.background = "#FF5555";
      } else {
        var input = document.getElementById("'.$id.'").querySelector("input");
          input.style.background = "#FF5555";
      }';
    return $script;
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
   <link href="css/contact.css" rel="stylesheet">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body>
  <?php
    require_once('contents/header.php');
    require_once('contents/content.php');
    require_once('contents/footer.php');
  ?>
</body>
</html>
