<html dir="rtl">
<body bgcolor='#DFF1F6' background='/home/londonci/public_html/images/lcitwebsite_19.gif' text='#000080' style="font-family: Tahoma; font-size: 10pt; color: #000080">
<?
if(!isset($_SESSION['userid'])){
echo "<center><font face='tahoma' size='2' color=red>�����.. ��� ���� � ����� ������<br>������ �� �������� ���� ������� ������� ��������</font></center><br>";
echo "<center><font face='tahoma' size='2' color=blue>��� ������ ����� ��������� ���<br>���� ���� ��� ��� ��������� ���� ���� ��� ������ ��������</font></center><br>";
echo "<center><font face='tahoma' size='2' ><a href=login.php>��� ��� ���� ������ ����� �� ����� ������</a> </center></font><br>";
echo "<center><font face='tahoma' size='2' ><a href=signup.php>�� �� ����� ������ ���� ������ �� ��������</a> </center></font><br>";
exit;
}
?>
<br><p><a href="javascript:history.back()">������ �����</a></p>
