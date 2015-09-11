<?php
  function getPageContentPath($pageParam){
    switch($pageParam){
      case '1':
        return("includes/pages/charSheets.php");
        break;
      case '2':
        return("includes/pages/addStuff.php");
        break;
      default:
        return("includes/pages/start.php");
        break;
    }
  }
?>
