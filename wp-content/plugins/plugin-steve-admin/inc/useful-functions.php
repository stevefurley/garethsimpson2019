<?php
/*------------------------------------
Useful Functions
-------------------------------------*/
// Debug info
function debug($data) {
  //if(WP_ENV == 'local') {
  echo "<pre>";
  print_r($data);
  echo "</pre>";
  //  }
}


function ShortenText($text, $characters) { // Function name ShortenText
  $chars_limit = $characters; // Character length
  $chars_text = strlen($text);
  $text = $text." ";
  $text = substr($text,0,$chars_limit);
  $text = substr($text,0,strrpos($text,' '));

  if ($chars_text > $chars_limit)
     { $text = $text."..."; } // Ellipsis
     return $text;
}
