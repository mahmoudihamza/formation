<?php 
session_start();
if(isset($_SESSION['user']))
{

 ?>
<!DOCTYPE html>
<html>

<head>
<?php include_once("/template/head.php") ?>
<script src="ckeditor/ckeditor.js"></script>
</head>

<body>

<?php include_once("/template/header.php") ?>




<div class="control-panel-container">
<?php include_once("/template/menu.php") ?>

</div>

<div class="form-data-container">

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Gestion de Formation</h3>

<div class="btn-group" role="group">
  <a href="nouveau_formation.php" class="btn btn-default">Nouveau formation</a>
  <a href="liste_formations.php" class="btn btn-default">Liste des formations</a>
</div>


<div class="produit-form">
<h4 class="h4"><i class="glyphicon glyphicon-triangle-right"></i>Nouveau formation</h4>
<?php  
if($_SERVER['REQUEST_METHOD']=='POST')
{?>
   <div class="alert alert-success">nous recevons votre message</div>
<?php  
}
?>
<form action="postData/saveFormation.php" method="POST">
<table class="table table-striped">
<tr>
<td>Categorie</td><td><select class='form-control' name="categorie" id="">
           <?php $home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/categorieDB.php");

$categorieDB = new categorieDB();
$result = $categorieDB->getCategories();

for($i=0;$i<count($result);$i++) {
            ?>
            <option value="<?php echo $result[$i]['nom_cat']; ?>"><?php echo $result[$i]['nom_cat']; ?></option>
           <?php
            }
            ?>
        </select></td>
</tr>
<tr>
<td>Nom</td><td><input type="text" class="form-control" name="nom" /></td>
</tr>
<tr>
<td>Description</td><td><textarea name="description" id="" class="form-control"cols="30" rows="10"></textarea></td>
</tr>
<tr>
<td>Date</td><td><input type="date" class="form-control" name="date" /></td>
</tr>
<tr>
<td>Prix</td><td><input type="text" class="form-control"  name="prix"/></td>
</tr>
<tr>
<td>image</td><td><input type="file" class="form-control"  name="image"/></td>
</tr>
<tr>
<td>programme</td><td><textarea name="programme" class="ckeditor" id="" cols="30" rows="10"></textarea></td>
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


