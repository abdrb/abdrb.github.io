<?php

// ------------- CONFIGURABLE SECTION ------------------------

$mailto = 'lcit@londoncit.com' ;

$subject = "Register from LCIT website" ;

$formurl = "http://www.londoncit.com/regonline.htm" ;
$errorurl = "http://www.londoncit.com/error.htm" ;
$coderrorurl = "http://www.londoncit.com/codeerror.htm" ;
$thankyouurl = "http://www.londoncit.com/regthanku.htm" ;

$uself = 1;

// -------------------- END OF CONFIGURABLE SECTION ---------------

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$name = $_POST['name'] ;
$T1 = $_POST['T1'] ;
$T2 = $_POST['T2'] ;
$T3 = $_POST['T3'] ;
$newLeft = $_POST['newLeft'] ;
$L1 = $_POST['L1'] ;
$L2 = $_POST['L2'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$txtcd = $_POST['txtcd'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
        header( "Location: $formurl" );
        exit ;
}
if (empty($name) || empty($T1) || empty($L2) || empty($txtcd)) {
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

if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $T1 ) ) {
        header( "Location: $errorurl" );
        exit ;
}

if (get_magic_quotes_gpc()) {
        $comments = stripslashes( $comments );
}

$messageproper =

        "ØáÈ ÅáÊÍÇŞ ÚÈÑ ÇáãæŞÚ:\n" .
        "$http_referrer\n" .
        "------------------------------------------------------------\n" .
        "ÇáÇÓã: $name\n" .
        "Êáİæä ÇáÊæÇÕá: $T1\n" .
        "ÑŞã ÇáÌæÇá: $T2\n" .
        "Êáİæä ÂÎÑ: $T3\n" .
        "ÇáÏæÑÇÊ ÇáãØáæÈÉ: $newLeft\n" .
        "ÈáÏ ÇáãÊÕá: $L1\n" .
        "ÚäæÇä ÇáãáÊÍŞ: $L2\n" .
        "ÇáÈÑíÏ ÇáÅáßÊÑæäí: $email\n" .

        "------------------------- ÇáÊÚáíŞ -------------------------\n\n" .
        $comments .
        "\n\n------------------------------------------------------------\n" ;

mail($mailto, $subject, $messageproper,
        "From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.08" );
header( "Location: $thankyouurl" );
exit ;

?>

