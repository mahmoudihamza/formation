<form action="" method="POST">
<table class="table table-striped mytable produitTable">
<tr>
<th></th><th>Numero</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Email</th><th>Ville</th><th>Nom Formation</th>
</tr>

<?php
$p=$_GET["p"];

$home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/etudiantDB.php");

$etudiantDB = new etudiantDB();

$p = $_GET["p"];


if (isset($_POST['nom'])){

$result = $etudiantDB->getEtudiantsPagination($p,$_POST['nom']);
$cnt_rows = $etudiantDB->getEtudiantCount($_POST['nom']);

}else  {

$result = $etudiantDB->getEtudiantsPagination($p,'');

$cnt_rows = $etudiantDB->getEtudiantCount('');
}



$page_count = $cnt_rows / 5;


for($i=0;$i<count($result);$i++) {
?>

<tr>
<td><input type='checkbox' /></td>
<td><?php echo $result[$i]['ide_etu']; ?></td>
<td><?php echo $result[$i]['nom_etu']; ?></td>
<td><?php echo $result[$i]['pre_etu']; ?></td>
<td><?php echo $result[$i]['tel_etu']; ?></td>
<td><?php echo $result[$i]['mail_etu']; ?></td>
<td><?php echo $result[$i]['vil_etu']; ?></td>
<td><?php echo $result[$i]['idF']; ?></td>

</tr>
<?php
}
?>


</table>
</form>


<div class="modal fade popup" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modifier Etudiant</h4>
        </div>
        <div class="modal-body">
              <form action="postData/updateEtudiant.php" method="POST">
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
              <td>Ville</td><td><input type="text" class="form-control"  name="ville"/></td>
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












