<form action="postData\deletesale.php" method="post">
      <table class="table table-bordered A"style="width:990px;">
	  
<tr>
<th></th><th colspan="2"><h4 class="text-center">Matin</h4></th><th colspan="2"><h4 class="text-center">Apres-midi</h4></th>
</tr>
<tr>
<td>lundi</td>

<td>
<?php $result=$salleDB->getsalles(100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
<a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="100"> </a><?php }?>


</td>

<td>

<?php $result=$salleDB->getsalles(110);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">

<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="110"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(120);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="120"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(130);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="130"></a><?php } ?> </td>




</tr>
<tr>
<td>Mardi</td>
<td>
<?php $result=$salleDB->getsalles(140);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="140"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(150);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="150"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(160);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="160"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(170);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="170"></a><?php } ?> </td>
</tr>
<tr>
<td>Mercredi</td>
<td>
<?php $result=$salleDB->getsalles(200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="200"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(210);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="210"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(220);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="220"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(230);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="230"></a><?php } ?> </td>




</tr>
<tr>
<td>Jeudi</td>
<td>
<?php $result=$salleDB->getsalles(300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="300"></a><?php } ?> </td>



<td>
<?php $result=$salleDB->getsalles(310);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="310"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(320);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="320"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(330);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="330"></a><?php } ?> </td>
</tr>

<tr>
<td>Vendredi</td></td>
<td>
<?php $result=$salleDB->getsalles(400);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="400"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(410);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="410"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(420);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="420"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(430);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="430"></a><?php } ?> </td>
<tr>
<td>Samedi</td>
<td>
<?php $result=$salleDB->getsalles(500);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="500"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(510);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="510"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(520);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="520"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(530);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="530"></a><?php } ?> </td>
</tr>
<tr>
<td>Dimanche</td>
<td>
<?php $result=$salleDB->getsalles(600);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="600"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(610);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="610"></a><?php }?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(620);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="620"></a><?php }?> </td>


<td>
<?php $result=$salleDB->getsalles(630);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="630"></a><?php } ?> </td>
</tr>

</table>
<input type="submit" value="supprimer"></form>