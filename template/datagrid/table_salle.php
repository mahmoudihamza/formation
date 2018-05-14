
<?php

$home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/salleDB.php");
 $salleDB = new salleDB();
?>

<div class="container">
  <h2>Table des salles</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Salle 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Salle 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Salle 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <img src="salle.jpg"width="904" height="336">
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Salle 1</h3>
	  
	
	<form action="postData\deletesale.php" method="post">
      <table class="table table-bordered A"style="width:990px;">
	  
<tr>
<th></th><th colspan="2"><h4 class="text-center">Matin</h4></th><th colspan="2"><h4 class="text-center">Apres-midi</h4></th>
</tr>
<tr>
<td>lundi</td>

<td>
<?php $result=$salleDB->getsalles(10);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
<a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="10"> </a><?php }?>


</td>

<td>

<?php $result=$salleDB->getsalles(11);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">

<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="11"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(12);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="12"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(13);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="13"></a><?php } ?> </td>




</tr>
<tr>
<td>Mardi</td>
<td>
<?php $result=$salleDB->getsalles(14);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="14"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(15);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="15"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(16);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="16"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(17);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="17"></a><?php } ?> </td>
</tr>
<tr>
<td>Mercredi</td>
<td>
<?php $result=$salleDB->getsalles(20);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="20"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(21);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="21"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(22);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="22"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(23);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="23"></a><?php } ?> </td>




</tr>
<tr>
<td>Jeudi</td>
<td>
<?php $result=$salleDB->getsalles(24);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="24"></a><?php } ?> </td>




<td>
<?php $result=$salleDB->getsalles(31);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="31"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(32);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="32"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(33);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="33"></a><?php } ?> </td>
</tr>

<tr>
<td>Vendredi</td></td>
<td>
<?php $result=$salleDB->getsalles(40);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="40"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(41);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="41"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(42);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="42"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(43);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="43"></a><?php } ?> </td>
<tr>
<td>Samedi</td>
<td>
<?php $result=$salleDB->getsalles(50);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="50"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(51);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="51"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(52);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="52"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(53);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="53"></a><?php } ?> </td>
</tr>
<tr>
<td>Dimanche</td>
<td>
<?php $result=$salleDB->getsalles(60);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="60"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(61);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="61"></a><?php }?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(62);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="62"></a><?php }?> </td>


<td>
<?php $result=$salleDB->getsalles(63);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="63"></a><?php } ?> </td>
</tr>

</table>
<input type="submit" value="supprimer"></form>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Salle 2</h3>
    

<?php   include("table_salle2.php"); ?>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Salle 3</h3>
      <table class="table table-bordered">

	  <?php   include("table_salle3.php"); ?>

</table>

    </div>
  </div>
</div>




  <div class="modal fade popups" id="myModal tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Reservation salle </h4>
        </div>
        <div class="modal-body">
              <form action="postData/Addsalle.php" method="POST">
              <table class="table table-striped table-modifier">
              <tr>
              <td></td><td><input type="hidden" class="form-control" name="numero" /></td>
              </tr>
              <tr>
              <td>Nom de cour</td><td><select class='form-control' name="cour" id="">
           <?php $home = $_SERVER['DOCUMENT_ROOT'];

require_once($home."/centreFormation/dbaction/formationDB.php");

$formationDB = new formationDB();
$result = $formationDB->getFormations();

for($i=0;$i<count($result);$i++) {
            ?>
            <option value="<?php echo $result[$i]['nom_for']; ?>"><?php echo $result[$i]['nom_for']; ?></option>
           <?php
            }
            ?>
        </select></td>
              </tr>
              <tr>
              <td>Nom de prof</td><td><select class='form-control' name="prof" id=""> <?php $home = $_SERVER['DOCUMENT_ROOT'];
require_once($home."/centreFormation/dbaction/formateurDB.php");
$formateurDB = new formateurDB();
$result = $formateurDB->getFormateur();

for($i=0;$i<count($result);$i++) {
            ?>
            <option value="<?php echo $result[$i]['pre_form']; ?>"><?php echo $result[$i]['pre_form']; ?></option>
           <?php
            }
            ?>
        </select>

	  
			  </td>
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

</div>

