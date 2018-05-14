<?php 
session_start();
if(isset($_SESSION['user']))
{

 ?>
<!DOCTYPE html>
<html>

<head>
<?php include_once("/template/head.php") ?>
<style>


.image:hover  {
  opacity: 1;
  display: block;
  width: 300px;
  height: 200px;
  
}

</style>

</head>

<body>


<?php include_once("/template/header.php") ?>

<div class="control-panel-container">

<?php include_once("/template/menu.php") ?>

</div>

<div class="form-data-container">

<h3 class="h3"><i class="glyphicon glyphicon-th"></i> Page Index</h3>
<div class="price-box col-lg-4 well " style="height:230px;"><a href="liste_etudiants.php"><img src="img\etudiant.jpg"  class=" image img-responsive"></a></div>
<div class="price-box col-lg-4  well"style="height:230px;"><a href="liste_formations.php"><img  src="img\Formation.jpg"class=" image img-responsive"></a></div>
<div class="price-box col-lg-4  well "style="height:230px;"><a href="liste_profs.php"><img  src="img\canv.jpg" class=" image img-responsive"></a></div>
<div class="price-box col-lg-4 well "style="height:230px;"><a href=""><img height="200" class="image" src="img\stock.jpg"></a></div>
<div class="price-box col-lg-4 well "style="height:230px;"><a href="#"><img class=" image img-responsive" src="img\sta.jpg"></a></div>
<div class="price-box col-lg-4 well "style="height:230px;"><a href="liste_salles.php"><img height="200" class="image" src="img\classroom.jpg"></a></div>

</div>

<?php include_once("/template/footer.php") ?>

</body>

</html>
<?php }
else{
    header("Location:login.php");
}

 ?>