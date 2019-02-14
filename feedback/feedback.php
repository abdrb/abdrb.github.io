<?php

// ------------- CONFIGURABLE SECTION ------------------------

// $mailto - set to the email address you want the form
// sent to, eg
//$mailto                = "youremailaddress@example.com" ;

$mailto = 'email@example' ;

// $subject - set to the Subject line of the email, eg
//$subject        = "Feedback Form" ;

$subject = "Feedback from https://abdrb.github.io website" ;

// the pages to be displayed, eg
//$formurl                = "http://www.example.com/feedback.htm" ;
//$errorurl                = "http://www.example.com/error.htm" ;
//$thankyouurl        = "http://www.example.com/thankyou.htm" ;

$formurl = "https://abdrb.github.io/feedback/feedback.htm" ;
$errorurl = "https://abdrb.github.io/feedback/error.htm" ;
$coderrorurl = "https://abdrb.github.io/feedback/codeerror.htm" ;
$thankyouurl = "https://abdrb.github.io/feedback/thankyou.htm" ;

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

        "&Ntilde;&Oacute;&Ccedil;&aacute;&Eacute; &Uacute;&Egrave;&Ntilde; &atilde;&aelig;&THORN;&Uacute; &Ccedil;&aacute;&atilde;&Ntilde;&szlig;&Ograve;:\n" .
        "$http_referrer\n" .
        "------------------------------------------------------------\n" .
        "&Ccedil;&aacute;&Ccedil;&Oacute;&atilde;: $name\n" .
        "&Ccedil;&aacute;&Egrave;&Ntilde;&iacute;&Iuml; &Ccedil;&aacute;&Aring;&aacute;&szlig;&Ecirc;&Ntilde;&aelig;&auml;&iacute;: $email\n" .
        "------------------------- &Ccedil;&aacute;&Ecirc;&Uacute;&aacute;&iacute;&THORN; -------------------------\n\n" .
        $comments .
        "\n\n------------------------------------------------------------\n" ;

mail($mailto, $subject, $messageproper,
        "From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.08" );
header( "Location: $thankyouurl" );
exit ;

?>
