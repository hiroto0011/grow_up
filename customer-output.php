
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP" />
	<title>�������å׳������</title>
	<meta name="description" content="�������å׳�����Ҥ�Web�������ࡦ���饹�ȡ�̡���������ò������ͺ��ɸ����ͺ�Ҳ𥵡��ӥ���ԤäƤ���ޤ���" />
	<meta name="keywords" content="�ͺ��ɸ�,�����̳,Web����,����������,���饹��" />
    <link href="css/reset.css" type="text/css" rel="stylesheet" />
	<link href="css/common.css" type="text/css" rel="stylesheet" />
	<script src="jquery-3.2.1.min.js"></script>
  <!--<script src="scripts.js"></script>-->

</head>

<body>
<script type="text/javascript" src="https://ad.xdomain.ne.jp/js/server-php.js"></script>
<div id="contentsBox">
 <div id="header">

  <div id="top_title" class="clearfix">
		<table>
		<tr>
		<td><a href="top.html" class="mouseHvr"><img src="img/logo.png" width="350" height="50" alt="�������å�"/></a></td>
		<td>
	<div id="top_1">
			<table>
			<tr>
			<td colspan="2">
				<p>�����ȥ������󥰤򤴴�˾����</p>
				<div id="top_link">
				<ul>
		   <li><a href="#" class="mouseHvr">�ô�ȤΤ�ô������</a></li>
				 <li><a href="#" class="mouseHvr">�å����ݥ졼�ȥ�����</a></li>
					 <li><a href="#" class="mouseHvr">�ú��Ѿ���</a></li>
						 <li><a href="#" class="mouseHvr">�å˥塼��</a></li>
						 </ul>
					 </div>
</td>
			</tr>
			<tr>
			<td><a href="customer-input.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
			<td>
				<div class="box2" style="width:160px;">
				<p> <a href="#">Q��A</a>��<a href="#">�����ȥޥå�</a></p>
				</div>


				</td>
			</tr>
			</table>
</div>
		</td>
		</tr>
</table>
<!-- #top_title --></div>
<div id="main">
	<div id="sub">
  <div id="subNav">
		<ul>
   <li><a href="top.html"><img src="img/top_btn.png"  alt="�ȥå�" onmouseover="this.src='img/top_btn_on.png'" onmouseout="this.src='img/top_btn.png'"/></a></li>
   <li><a href="work.html"><img src="img/work_btn.png"  alt="���Ż���õ������" onmouseover="this.src='img/work_btn_on.png'" onmouseout="this.src='img/work_btn.png'"/></a></li>
   <li><a href="hito.html"><img src="img/hito_btn.png" alt="�ͺ��õ������" onmouseover="this.src='img/hito_btn_on.png'" onmouseout="this.src='img/hito_btn.png'"/></a></li>
   <li><a href="company.html"><img src="img/company_btn.png" alt="��Ⱦ���" onmouseover="this.src='img/company_btn_on.png'" onmouseout="this.src='img/company_btn.png'"/></a></li>
   <li><a href="otoiawase.html"><img src="img/qa_btn.png" alt="���䤤��碌" onmouseover="this.src='img/qa_btn_on.png'" onmouseout="this.src='img/qa_btn.png'"/></a></li></ul>
		������<a href="sucseed.zip"><img src="img/dl.png" class="mouseHvr" alt="���������������"/></a>
<!-- #subNav --></div>
<!-- #sub --></div>
<!-- #main --></div>
<div id="border" class="clearfix"><hr style=" margin: 0 -500%;
padding: 0 500%; height:4px; background-color:#7FC3EA;noshade;"></div>





<table>
<div id="menu">
<li>
<a href="top.html">
�������å׳�����ҡ��ȥå�</a> >
</li>
<h1></h1>

<p>


<!-- #content --></div>
</table>

<br>
<br>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
	'staff', 'password');
if (isset($_SESSION['customer'])) {
	$id=$_SESSION['customer']['id'];
	$sql=$pdo->prepare('select * from customer where id!=? and login=?');
	$sql->execute([$id, $_REQUEST['login']]);
} else {
	$sql=$pdo->prepare('select * from customer where login=?');
	$sql->execute([$_REQUEST['login']]);
}
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customer'])) {
		$sql=$pdo->prepare('update customer set name=?, address=?, '.
			'login=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'],
			$_REQUEST['login'], $_REQUEST['password'], $id]);
		$_SESSION['customer']=[
			'id'=>$id, 'name'=>$_REQUEST['name'],
			'address'=>$_REQUEST['address'], 'login'=>$_REQUEST['login'],
			'password'=>$_REQUEST['password']];
		echo '�����;���򹹿����ޤ�����';
	} else {
		$sql=$pdo->prepare('insert into customer values(null,?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['address'],
			$_REQUEST['login'], $_REQUEST['password']]);
		echo '�����;������Ͽ���ޤ�����';
	}
} else {
	echo '������̾�����Ǥ˻��Ѥ���Ƥ��ޤ��Τǡ��ѹ����Ƥ���������';
}
?>

<br>
<br>


<div id="footer">
<div id="footerabout">
	<div id="about">
		<h3><span></span>���������åץꥯ�롼�ȤˤĤ���</h3>
	</div>

		<table>
	<tr>
	<td>
	<p><img src="./img/img_2.png"/></p>
	</td>
	<td>
		<div id="about_t">
		<h3>�˥塼����꡼��</h3>
<p>2017ǯ5��9��</p>
		<p>�Ȼ���ԥ����ӥ���casial@�ޤޤ���ʥ������륢�åȥޥޥ���ˡ٥����ӥ���λ�Τ��Τ餻</p>
		<p>2017ǯ3��23��</p>
			<p>�����ȥ������󥰤Ȥ���Ư����������Ǥ���֤餷���פ˥ե�������������ǥ���<br>
			���������åץꥯ�롼�ȡ֤餷������饤���2017ǯ3��23���������ȡ�</p>
<!-- #about_t --></div>
			<div class="footer_link">
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">��</font>�����ݥ졼�ȥ�����</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">��</font>�˥塼����꡼��</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">��</font>���Ѿ���</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">��</font>��ȤΤ�ô������</a></p>
			<!-- #syousai --></div>

	</td>
	</tr>
	</table>
	</div>


	<div id="banner_link">
		<h3><span></span>����Ϣ���</h3>
	</div>
<div id="banner">
<a href="#"><img src="./img/banner_1.png"></a>
<a href="#"><img src="./img/banner_2.png"></a>
<a href="#"><img src="./img/banner_3.png"></a>
<a href="#"><img src="./img/banner_4.png"></a>
</div>

  <div id="footerContnts">
    <address>Copyright&nbsp;(C)&nbsp;�������å׳������.&nbsp;All&nbsp;Rights&nbsp;Reserved.</address>
  </div>
  </div><!-- #footer -->

<!--jquery-->
<script src="jquery-3.2.1.min.js"></script>

<div id="pagetop" style="position:fixed;right:30px;bottom:20px">
	<a href="#"><img src="img/pagetop.png"></a></div>

<script>
$(function () {
	//#pagetop��ä�
	$('#pagetop').hide();
//�������뤵�줿��#pagetop��ɽ����s�����뤬��ä�����ɽ��
$(window).scroll(function(){
	if($(this).scrollTop() > 45){
		$('#pagetop').fadeIn();
	}else {
		$('#pagetop').fadeOut();}
});
//#pagetop������å����줿�������
$('#pagetop a').click(function(){
$('body').animate({
	scrollTop:0
},600);
	return false;
});});
</script>
<!--jquery-->


</body>
</html>
