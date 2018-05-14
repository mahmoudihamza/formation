
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