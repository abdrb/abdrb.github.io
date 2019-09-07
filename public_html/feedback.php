<?php

// ------------- CONFIGURABLE SECTION ------------------------

// $mailto - set to the email address you want the form
// sent to, eg
//$mailto                = "youremailaddress@example.com" ;

$mailto = 'lcit@londoncit.com' ;

// $subject - set to the Subject line of the email, eg
//$subject        = "Feedback Form" ;

$subject = "Feedback from LCIT website" ;

// the pages to be displayed, eg
//$formurl                = "http://www.example.com/feedback.htm" ;
//$errorurl                = "http://www.example.com/error.htm" ;
//$thankyouurl        = "http://www.example.com/thankyou.htm" ;

$formurl = "http://www.londoncit.com/feedback.htm" ;
$errorurl = "http://www.londoncit.com/error.htm" ;
$coderrorurl = "http://www.londoncit.com/codeerror.htm" ;
$thankyouurl = "http://www.londoncit.com/thankyou.htm" ;

$uself = 1;

// -------------------- END OF CONFIGURABLE SECTION ---------------

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$txtcd = $_POST['txtcd'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
        header( "Location: $formurl" );
        exit ;
}
if (empty($name) || empty($email) || empty($comments) || empty($txtcd)) {
   header( "Location: $errorurl" );
   exit ;
}

$dtime=getdate(time());
$yn=$dtime['hours'] * $dtime['mon'] * $dtime['mday'] + $dtime['year'];
$xn=$txtcd;
if ($yn != $xn)
{
        header( "Location: $coderrorurl" );
        exit ;
}


if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) {
        header( "Location: $errorurl" );
        exit ;
}

if (get_magic_quotes_gpc()) {
        $comments = stripslashes( $comments );
}

$messageproper =

        "ÑÓÇáÉ ÚÈÑ ãæŞÚ ÇáãÑßÒ:\n" .
        "$http_referrer\n" .
        "------------------------------------------------------------\n" .
        "ÇáÇÓã: $name\n" .
        "ÇáÈÑíÏ ÇáÅáßÊÑæäí: $email\n" .
        "------------------------- ÇáÊÚáíŞ -------------------------\n\n" .
        $comments .
        "\n\n------------------------------------------------------------\n" ;

mail($mailto, $subject, $messageproper,
        "From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.08" );
header( "Location: $thankyouurl" );
exit ;

?>
