<form action="" method="POST">
<table class="table table-striped mytable produitTable">
<tr>
<th></th><th>Numero</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Email</th><th>Salaire</th><th>Spécialite</th>
</tr>

<?php
$p=$_GET["p"];

$home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/formateurDB.php");

$formateurDB = new formateurDB();

$p = $_GET["p"];


if (isset($_POST['nom'])){

$result = $formateurDB->getformateursPagination($p,$_POST['nom']);
$cnt_rows = $formateurDB->getformateursCount($_POST['nom']);

}else  {

$result = $formateurDB->getformateursPagination($p,'');

$cnt_rows = $formateurDB->getformateursCount('');
}



$page_count = $cnt_rows / 5;


for($i=0;$i<count($result);$i++) {
?>

<tr>
<td><input type='checkbox' /></td>
<td><?php echo $result[$i]['ide_form']; ?></td>
<td><?php echo $result[$i]['nom_form']; ?></td>
<td><?php echo $result[$i]['pre_form']; ?></td>
<td><?php echo $result[$i]['tel_form']; ?></td>
<td><?php echo $result[$i]['ema_form']; ?></td>
<td><?php echo $result[$i]['sal_form']; ?></td>
<td><?php echo $result[$i]['Spe_form']; ?></td>

</tr>
<?php
}
?>


</table>
</form>

</div>
<div class="modal fade popup" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modifier formateur</h4>
        </div>
        <div class="modal-body">
              <form action="postData/updateformateur.php" method="POST">
              <table class="table table-striped table-modifier">
              <tr>
              <td></td><td><input type="hidden" class="form-control" name="numero" /></td>
              </tr>
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
              <td>Salaire</td><td><input type="text" class="form-control"  name="salaire"/></td>
              </tr>
			  <tr>
              <td>Specialite</td><td><input type="text" class="form-control"  name="specialite"/></td>
              </tr>
              <tr>
              <td></td><td>

              </td>
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






