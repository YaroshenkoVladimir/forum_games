<?php 
ULogin(1);
Head('Профіль користувача') ?>
<body>
<div class="wrapper">
<div class="header"></div>
<div class="content">
<?php Menu();
MessageShow() 
?>
<div class="Page">


<?php 
echo '
ID '.$_SESSION['USER_ID'].'
<br>Имя '.$_SESSION['USER_NAME'].'
<br>Дата регистрации '.$_SESSION['USER_REGDATE'].'
<br>E-mail '.$_SESSION['USER_EMAIL'].'
<br>Страна '.$_SESSION['USER_COUNTRY'].'
<br>Аватар '.$_SESSION['USER_AVATAR'].'
';


?>
</div>
</div>

<?php Footer() ?>
</div>
</body>
</html>