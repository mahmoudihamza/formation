
     <form action="" method="POST">
      <table class="table table-striped mytable produitTable">
      <tr>
      <th></th><th>Numero</th><th>Nom Categorie</th><th>Description</th><th>Details</th>
      </tr>

      <?php
      $p=$_GET["p"];

      $home = $_SERVER['DOCUMENT_ROOT'];

      require_once($home."/centreFormation/dbaction/categorieDB.php");

      $categorieDB = new categorieDB();

      $p = $_GET["p"];


      if (isset($_POST['nom'])){

      $result = $categorieDB->getCategoriesPagination($p,$_POST['nom']);
      $cnt_rows = $categorieDB->getCategorieCount($_POST['nom']);

      }else  {

      $result = $categorieDB->getCategoriesPagination($p,'');

      $cnt_rows = $categorieDB->getCategorieCount('');
      }



      $page_count = $cnt_rows / 5;


      for($i=0;$i<count($result);$i++) {
      ?>

      <tr>
      <td><input type='checkbox' /></td>
      <td><?php echo $result[$i]['ide_cat']; ?></td>
      <td><?php echo $result[$i]['nom_cat']; ?></td>
       <td><?php echo $result[$i]['des_cat']; ?></td>

      <td><a href="#" class="btn btn-primary btn-detail" data-target="<?php echo $result[$i]['nom_cat']; ?>"><i class="fa fa-plus"></i>SHOW</a></td>


      </tr>
      <?php
      }
      ?>


      </table>
      </form>
<div class="modal fade popupcf" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Listes des Formations</h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped ">
     <tr>
          <th>ID</th>
          <th>FORMATION</th>
          <th>Date</th>
          <th>Prix</th>
          
     </tr>
      <?php $home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/categorieDB.php");
require_once($home."/centreFormation/dbmodel/categorie.php");


$categorieDB = new categorieDB();
$categorie = new categorie();
if (isset($_POST['nom'])){
  $result = $categorieDB->getFormationCategories($_POST['nom']);
}




for($i=0;$i<count($result);$i++) {
            ?>
            <tr>
              <td><?php echo $result[$i]['ide_for']; ?></td>
              <td><?php echo $result[$i]['nom_for']; ?></td>
              <td><?php echo $result[$i]['dat_for']; ?></td>
              <td><?php echo $result[$i]['pri_for']; ?></td>
            </tr>
           <?php
            }
            ?>

   </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
   

  




<div class="modal fade popupc" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modifier Categorie</h4>
        </div>
        <div class="modal-body">
              <form action="postData/updateCategorie.php" method="POST">
              <table class="table table-striped table-modifier">
              <tr>
              <td></td><td><input type="hidden" class="form-control" name="numero" /></td>
              </tr>
              <tr>
              <td>Nom</td><td><input type="text" class="form-control" name="nom" /></td>
              </tr>
              <tr>
              <td>Description</td><td><textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea></td>
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












