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

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion des formateurs</h3>

<div class="btn-group" role="group">
  <a href="nouveau_profs.php" class="btn btn-default">Nouveau formateur</a>
  <a href="liste_profs.php" class="btn btn-default">Liste des formateurs</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Nouveau formateur</h4>
<form action="postData/saveprofs.php" method="POST">
<table class="table table-striped">
<tr>
<td>Nom</td><td><input type="text" class="form-control" name="nom" /></td>
</tr>
<tr>
<td>Prenom</td><td><input type="text" class="form-control" name="prenom" /></td>
</tr>
<tr>
<td>Telephone</td><td><input type="text" class="form-control" name="telephone" /></td>
</tr>
<tr>
<td>Email</td><td><input type="text" class="form-control"  name="email"/></td>
</tr>
<tr>
<td>salaire</td><td><input type="text" class="form-control"  name="salaire"/></td>
</tr>
<tr>
<td>specialité</td><td><input type="text" class='form-control' name="specialite" >
 </td>
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
