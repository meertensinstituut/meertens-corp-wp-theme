<?php
function transl( $nl, $eng){
  $out = $nl;
  if (get_bloginfo('language') == 'en-GB') {
    $out = $eng;
  }
  echo $out ;
}

function removeEngStr($str) {
  $newstr = str_replace("_eng_", "", $str);
  return $newstr;

}


 ?>
