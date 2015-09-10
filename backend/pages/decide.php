<?php
  function getPageContentPath($pageParam){
    switch($pageParam){
      case '1':
        return("includes/pages/charSheets.php");
        break;
      default:
        return("includes/pages/start.php");
        break;
    }
  }
?>
