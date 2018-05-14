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

<?php $result=$salleDB->getsalles(1);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">

<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="1"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(2);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="2"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(3);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="3"></a><?php } ?> </td>




</tr>
<tr>
<td>Mardi</td>
<td>
<?php $result=$salleDB->getsalles(4);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="4"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(5);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="5"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(6);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="6"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(7);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="7"></a><?php } ?> </td>
</tr>
<tr>
<td>Mercredi</td>
<td>
<?php $result=$salleDB->getsalles(2000);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="2000"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(2100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="2100"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(2200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="2200"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(2300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="2300"></a><?php } ?> </td>




</tr>
<tr>
<td>Jeudi</td>
<td>
<?php $result=$salleDB->getsalles(3000);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="3000"></a><?php } ?> </td>




<td>
<?php $result=$salleDB->getsalles(3100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="3100"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(3200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="3200"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(3300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="3300"></a><?php } ?> </td>
</tr>

<tr>
<td>Vendredi</td></td>
<td>
<?php $result=$salleDB->getsalles(4000);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#" class="btn  btn-edits glyphicon glyphicon-plus" data_target="4000"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(4100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="4100"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(4200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="4200"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(4300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="4300"></a><?php } ?> </td>
<tr>
<td>Samedi</td>
<td>
<?php $result=$salleDB->getsalles(5000);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="5000"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(5100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="5100"></a><?php } ?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(5200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="5200"></a><?php } ?> </td>


<td>
<?php $result=$salleDB->getsalles(5300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="5300"></a><?php } ?> </td>
</tr>
<tr>
<td>Dimanche</td>
<td>
<?php $result=$salleDB->getsalles(6000);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>



<a href="#"  class="btn  btn-edits glyphicon glyphicon-plus" data_target="6000"></a><?php } ?>
 </td> 




<td>
<?php $result=$salleDB->getsalles(6100);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="6100"></a><?php }?> </td>

 
 


<td>
<?php $result=$salleDB->getsalles(6200);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="6200"></a><?php }?> </td>


<td>
<?php $result=$salleDB->getsalles(6300);if(!empty($result)){?>
<input type="checkbox" name="chek" value="<?php echo $result[0]['id_sal']; ?>">
<?php echo $result[0]['cour_sal']; ?></br>
<?php echo $result[0]['prof_sal']; ?></br>
<?php echo $result[0]['dep_sal']; ?></br>
<?php echo $result[0]['fin_sal']; ?></br>
<?php }else{ ?>
 <a href="#" class="btn btn-edits glyphicon glyphicon-plus" data-target="6300"></a><?php } ?> </td>
</tr>

</table>
<input type="submit" value="supprimer"></form>