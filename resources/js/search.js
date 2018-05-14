$(function() {

 

$(".search-etudiant").keyup(function() {

var value=$(this).val();

$.post("template/datagrid/table_etudiant.php",{nom:value},function(data) {


$(".produit_table_container").html(data);


})

})

$(".search-formation").keyup(function() {

var value=$(this).val();

$.post("template/datagrid/table_formation.php",{nom:value},function(data) {


$(".produit_table_container").html(data);


})

})

$(".search-categorie").keyup(function() {

var value=$(this).val();

$.post("template/datagrid/table_categorie.php",{nom:value},function(data) {


$(".produit_table_container").html(data);


})

})

$(".search-professeur").keyup(function() {

var value=$(this).val();

$.post("template/datagrid/table_formateur.php",{nom:value},function(data) {


$(".produit_table_container").html(data);


})

})

});