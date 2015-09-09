<?php
  function getPageContentPath($pageParam){
    switch($pageParam){
      case '1':
        return("");
        break;
      default:
        return("includes/pages/start.php");
        break;
    }
  }
?>
