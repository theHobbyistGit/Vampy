<?php
  require("includes/phpScripts/requiredScripts.php");
  if (isset($_GET["page"])){ $pageUrl = getPageContentPath($_GET["page"]);
  }else{                     $pageUrl = getPageContentPath(""); }
?>
<html>
  <?php require("includes/layout/head.php"); ?>
  <body>
    <h1>Welcome to Vampy editor and printer</h1>
    <?php
      require("includes/layout/navigation.php");
      require($pageUrl);
    ?>
  </body>
</html>
