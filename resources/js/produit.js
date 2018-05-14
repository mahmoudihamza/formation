$(function() {

$(".btn-edits").click(function(){
    $(".popups").modal('show');
    var numero = $(this).attr('data-target');
    
    $(".table-modifier").find("input[name='numero']").val(numero);
}); 
$(".btn-deleteformateur").click(function() {


var ids="";

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {

ids += "/"+$(this).find("td:eq(1)").text();
}


})


$.post("postData/deleteformateur.php",{"id":ids},function(data) {

if (data == 1)  {

alert("suprimer avec succés!!");
window.location.href = "";

}else {

console.log(data);
}

})

return false;

});


$(".btn-deletefa").click(function() {


var ids="";

$(".table-bordered").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {

ids += "/"+$(this).find("td:eq(1)").text();
}


})


$.post("postData/deletesale.php",{"id":ids},function(data) {

if (data == 1)  {

alert("suprimer avec succés!!");
window.location.href = "";

}else {

console.log(data);
}

})

return false;

});

//modifier etudiant
$(".btn-edit").click(function(){
$(".popup").modal('show');

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {
    var numero = $(this).find("td:eq(1)").text();
    var nom = $(this).find("td:eq(2)").text();
    var prenom = $(this).find("td:eq(3)").text();
    var telephone = $(this).find("td:eq(4)").text();
    var email = $(this).find("td:eq(5)").text();
    var ville = $(this).find("td:eq(6)").text();


$(".table-modifier").find("input[name='numero']").val(numero);
$(".table-modifier").find("input[name='nom']").val(nom);
$(".table-modifier").find("input[name='prenom']").val(prenom);
$(".table-modifier").find("input[name='telephone']").val(telephone);
$(".table-modifier").find("input[name='email']").val(email);
$(".table-modifier").find("input[name='ville']").val(ville);

}
})



});
//modifier formation

$(".btn-editf").click(function(){
$(".popupf").modal('show');

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {
    var numero = $(this).find("td:eq(1)").text();
    var nom = $(this).find("td:eq(2)").text();
    var description = $(this).find("td:eq(3)").text();
    var date = $(this).find("td:eq(4)").text();
    var prix = $(this).find("td:eq(5)").text();
    var image = $(this).find("td:eq(6)").text();
    var programme = $(this).find("td:eq(7)").text();



$(".table-modifier").find("input[name='numero']").val(numero);
$(".table-modifier").find("input[name='nom']").val(nom);
$(".table-modifier").find("textarea[name='description']").val(description);
$(".table-modifier").find("input[name='date']").val(date);
$(".table-modifier").find("input[name='prix']").val(prix);
$(".table-modifier").find("input[name='image']").val(image);
$(".table-modifier").find("input[name='programme']").val(programme);


}
})



});

//modifier categorie
$(".btn-editc").click(function(){
$(".popupc").modal('show');

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {
    var numero = $(this).find("td:eq(1)").text();
    var nom = $(this).find("td:eq(2)").text();
    var description = $(this).find("td:eq(3)").text();

  


$(".table-modifier").find("input[name='numero']").val(numero);
$(".table-modifier").find("input[name='nom']").val(nom);
$(".table-modifier").find("textarea[name='description']").val(description);



}
})



});

//delete etudiant
$(".btn-delete").click(function() {


var ids="";

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {

ids += "/"+$(this).find("td:eq(1)").text();
}


})


$.post("postData/deleteEtudiant.php",{"id":ids},function(data) {

if (data == 1)  {

alert("suprimer avec succés!!");
window.location.href = "";

}else {

console.log(data);
}

})

return false;

});

//delete formation
$(".btn-deletef").click(function() {


var ids="";

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {

ids += "/"+$(this).find("td:eq(1)").text();
}


})


$.post("postData/deleteFormation.php",{"id":ids},function(data) {

if (data == 1)  {

alert("suprimer avec succés!!");
window.location.href = "";

}else {

console.log(data);
}

})

return false;

});
//delete categorie

$(".btn-deletec").click(function() {


var ids="";

$(".produitTable").find("tr").each(function() {

if( $(this).find("td:eq(0)").find("input[type='checkbox']").is(":checked") ) {

ids += "/"+$(this).find("td:eq(1)").text();
}


})


$.post("postData/deleteCategorie.php",{"id":ids},function(data) {

if (data == 1)  {

alert("suprimer avec succés!!");
window.location.href = "";

}else {

console.log(data);
}

})

return false;

});


$(".btn-detail").click(function(){

  var nom = $(this).attr("data-target");
 
$.post("postData/getformationcategories.php",{"nom":nom},function(data) {

$(".popupcf .table").html(data);
$(".popupcf").modal('show');


})
    



})














});