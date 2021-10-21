$(document).ready(function(){
  getCategorie();
})
function getCategorie(){
  $.get('categories.php',function(catego){
    //afficher categorie dans la div (divCate);
    $('.divCate').html(catego);
    //changer la categorie du produits
    $('#cats').change(function(){
      getProduits($(this).val());
    });
  });
}

function getProduits(idc){
  $.get('produit.php?idcat='+idc,function(response){
    //afficher les produits dans la div (divCate);
    $('#divProdut').html(response).slideDown();
  });
}
