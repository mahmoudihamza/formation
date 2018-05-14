<form action="" method="POST">
<table class="table table-striped mytable produitTable">
<tr>
<th></th><th>Numero</th><th>Nom Formation</th><th>Description</th><th>Date</th><th>prix</th><th>image</th><th style="display:none;">Programme</th><th>Categorie</th>
</tr>

<?php
$p=$_GET["p"];

$home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/formationDB.php");

$formationDB = new formationDB();

$p = $_GET["p"];


if (isset($_POST['nom'])){

$result = $formationDB->getFormationsPagination($p,$_POST['nom']);
$cnt_rows = $formationDB->getFormationCount($_POST['nom']);

}else  {

$result = $formationDB->getFormationsPagination($p,'');

$cnt_rows = $formationDB->getFormationCount('');
}



$page_count = $cnt_rows / 5;


for($i=0;$i<count($result);$i++) {
?>

<tr>
<td><input type='checkbox' /></td>
<td><?php echo $result[$i]['ide_for']; ?></td>
<td><?php echo $result[$i]['nom_for']; ?></td>
<td><?php echo $result[$i]['des_for']; ?></td>
<td><?php echo $result[$i]['dat_for']; ?></td>
<td><?php echo $result[$i]['pri_for']; ?></td>
<td><?php echo $result[$i]['img_for']; ?></td>
<td style="display:none"><?php echo $result[$i]['pro_for']; ?></td>
<td><?php echo $result[$i]['nom_cat']; ?></td>



</tr>
<?php
}
?>


</table>
</form>


<div class="modal fade popupf" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modifier Formation</h4>
        </div>
        <div class="modal-body">
              <form action="postData/updateFormation.php" method="POST">
              <table class="table table-striped table-modifier">
              <tr>
              <td></td><td><input type="hidden" class="form-control" name="numero" /></td>
              </tr>
              <tr>
              <td>Nom</td><td><input type="text" class="form-control" name="nom" /></td>
              </tr>
              <tr>
              <td>Description</td><td><textarea name="description" class="form-control"id="" cols="30" rows="10"></textarea></td>
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
              <td>programme</td><td><textarea name="programme" id="" cols="30" rows="10"></textarea></td>
              </tr>
              
              </table>
              
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Enregistrer" style="margin-right:5px;"/>
                </div>
              </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<a href="#" style="margin-right:10px" class="btn btn-default btn-editf"><i class="glyphicon glyphicon-edit" ></i> Editer</a>
<a href="#" class="btn btn-default btn-deletef"><i class="glyphicon glyphicon-share" ></i> Supprimer</a>
<nav aria-label="Page navigation" style="float : right;margin-right:20px;">
  <ul class="pagination">
    <li>
      <?php
  
    $prev = $_GET['p'] - 1;
    
    if ($prev < 1) $prev = 1;
  
  ?>
      <a href="?p=<?php echo $prev  ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
  <?php
 
   for($i=0;$i<$page_count;$i++) {
   
   $n = intval($i+1);
   
   echo "<li><a href='?p=$n'>$n</a></li>";
   
   }
   
   ?>
    <li>
      <?php  
  
  $next = $_GET["p"] + 1;
  
  if ($next > ceil($page_count)) $next = $_GET["p"];
  ?>
      <a href="?p=<?php echo $next ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>












