<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("lista.xml");

$x=$xmlDoc->getElementsByTagName('property');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('meaning');
    $z=$x->item($i)->getElementsByTagName('letter');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<b>" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          $y->item(0)->childNodes->item(0)->nodeValue . "</b>";
        } else {
          $hint=$hint . "<br /><b>" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          $y->item(0)->childNodes->item(0)->nodeValue . "</b>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>