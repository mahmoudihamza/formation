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

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion des salles</h3>

<div class="btn-group" role="group">
  <a href="nouveau_salle.php" class="btn btn-default">ajout un formation</a>
  <a href="liste_salles.php" class="btn btn-default">Liste des salles</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Nouveau formation</h4>
<form action="postData/savesalle.php" method="POST">
<table class="table table-striped">
<tr>
<td>Numero</td><td><input type="text" class="form-control" name="num_sal" /></td>
</tr>
<tr>
<td>nom de cours</td><td><input type="text" class="form-control" name="cour_sal" /></td>
</tr>
<tr>
<td>la Date</td><td><input type="date" class="form-control" name="date" /></td>
</tr>
<tr>
<td>date de depart</td><td><input type="time" class="form-control"  name="depart"/></td>
</tr>
<tr>
<td>date de fin</td><td><input type="time" class="form-control"  name="fin"/></td>
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

