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

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion de formations</h3>

<div class="btn-group" role="group">
  <a href="nouveau_formation.php" class="btn btn-default">Nouveau formation</a>
  <a href="liste_formations.php" class="btn btn-default">Liste des formations</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Liste des formations</h4>
<div class="search"><i class="fa fa-search search-position"></i><input type='text' id='search_input' placeholder='Rechercher' class='form-control search-formation'/></div>

<div class='produit_table_container'>
<?php   include("template/datagrid/table_formation.php"); ?>

</div>
</div>
</div>

<?php include_once("/template/footer.php") ?>

</body>

</html>
<?php }
else{
    header("Location:login.php");
}

 ?>