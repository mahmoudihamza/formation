
<?php 
session_start();
if(isset($_SESSION['user']))
{

 ?>
<!DOCTYPE html>
<html>

<head>
<?php include_once("/template/head.php") ?>
</head>

<body>

<?php include_once("/template/header.php") ?>



<div class="control-panel-container">

<?php include_once("/template/menu.php") ?>



</div>

<div class="form-data-container">




<div class="produit-form">



<div class='produit_table_container'>
<?php   include("template/datagrid/table_salle.php"); ?>

</div>
</div>
</div>

<?php //include_once("/template/footer.php") ?>

</body>

</html>
<?php }
else{
    header("Location:login.php");
}

 ?>