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

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion des Categories</h3>

<div class="btn-group" role="group">
  <a href="nouveau_categorie.php" class="btn btn-default">Nouveau categorie</a>
  <a href="liste_categories.php" class="btn btn-default">Liste des categories</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Nouveau categorie</h4>
<form action="postData/saveCategorie.php" method="POST">
<table class="table table-striped">
<tr>
<td>Nom</td><td><input type="text" class="form-control" name="nom" /></td>

</tr>
<tr>
    <td>description</td><td><textarea name="description" class="form-control"id="" cols="30" rows="10"></textarea></td>

</tr>

<tr>
<td></td><td>
<input type="submit" class="btn btn-default" value="Enregistrer" style="margin-right:5px;"/>

<input type="reset" class="btn btn-default" value="Annuler"/>
</td>
</tr>
</table>
</form>

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


