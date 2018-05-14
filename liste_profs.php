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

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion de formateurs</h3>

<div class="btn-group" role="group">
  <a href="nouveau_profs.php" class="btn btn-default">Nouveau formateur</a>
  <a href="liste_profs.php" class="btn btn-default">Liste des formateurs</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Liste des formateurs</h4>
<div class="search"><i class="fa fa-search search-position"></i><input type='text' id='search_input' placeholder='Rechercher' class='form-control search-professeur'/></div>
<!-- <label for="">Trier par</label><input type='text' id='tri_input'  class='form-control'/>
 -->
<div class='produit_table_container'>
<?php   include("template/datagrid/table_formateur.php"); ?>
<a href="#" style="margin-right:10px" class="btn btn-default btn-edit"><i class="glyphicon glyphicon-edit" ></i> Editer</a>
<a href="#" class="btn btn-default btn-deleteformateur"><i class="glyphicon glyphicon-share" ></i> Supprimer</a>

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