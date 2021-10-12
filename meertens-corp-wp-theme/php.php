<?php
function transl( $nl, $eng){
  $out = $nl;
  if (get_bloginfo('language') == 'en-GB') {
    $out = $eng;
  }
  echo $out ;
}


 ?>
