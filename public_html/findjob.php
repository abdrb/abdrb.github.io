<?php

// ------------- CONFIGURABLE SECTION ------------------------

$mailto = 'lcit@londoncit.com' ;

$subject = "Find job by LCIT website" ;

$formurl = "http://www.londoncit.com/findjob.htm" ;
$errorurl = "http://www.londoncit.com/error.htm" ;
$coderrorurl = "http://www.londoncit.com/codeerror.htm" ;
$thankyouurl = "http://www.londoncit.com/findjobthanku.htm" ;

$uself = 1;

// -------------------- END OF CONFIGURABLE SECTION ---------------

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$name = $_POST['name'] ;
$txt1 = $_POST['txt1'] ;
$txt2 = $_POST['txt2'] ;
$txt3 = $_POST['txt3'] ;
$txt4 = $_POST['txt4'] ;
$txt5 = $_POST['txt5'] ;
$txt6 = $_POST['txt6'] ;
$txt7 = $_POST['txt7'] ;
$txt8 = $_POST['txt8'] ;
$txt9 = $_POST['txt9'] ;
$txt10 = $_POST['txt10'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$txtcd = $_POST['txtcd'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
        header( "Location: $formurl" );
        exit ;
}
if (empty($name) || empty($txt3) || empty($txt10) || empty($txtcd)) {
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

if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $txt3 ) ) {
        header( "Location: $errorurl" );
        exit ;
}

if (get_magic_quotes_gpc()) {
        $comments = stripslashes( $comments );
}

$messageproper =

        "����� �� ����� ��� ������:\n" .
        "$http_referrer\n" .
        "------------------------------------------------------------\n" .
        "����� ������: $name\n" .
        "�����: $txt1\n" .
        "�����: $txt2\n" .
        "������: $txt3\n" .
        "�������: $txt4\n" .
        "��� ������: $txt5\n" .
        "����� �������: $txt6\n" .
        "������ �������: $txt7\n" .
        "���� ������� �������: $txt8\n" .
        "�������: $txt9\n" .
        "��� �������: $txt10\n" .
        "������ ����������: $email\n" .
        "------------------------- ����� -------------------------\n\n" .
        $comments .
        "\n\n------------------------------------------------------------\n" ;

mail($mailto, $subject, $messageproper,
        "From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.08" );
header( "Location: $thankyouurl" );
exit ;

?>
