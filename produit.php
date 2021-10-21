
<?php
  require 'conn.php';

  if (isset($_GET['idcat'])) {
    $id=$_GET['idcat'];
  }else {
    $id=1;
  }

    $req=$conn->prepare("SELECT * FROM produits WHERE id_catt= ?");
    $req->execute(array($id));
    $data=$req->fetchAll();


?>
<div class="">
  <table border="4" >
      <tr>
        <th>ID</th>
        <th>Nom</td>
        <th>Description</td>
        <th>prix</td>
        <th>Promo</td>
        <th>Quantite</td>
      </tr>

      <?php foreach ($data as $produit) { ?>
        <!-- <?php var_dump($data); ?> -->
        <tr>
          <td><?php echo $produit['ID_pro'] ?></td>
          <td><?php echo $produit['nom'] ?></td>
          <td><?php echo $produit['description'] ?></td>
          <td><?php echo $produit['prix'] ?></td>
          <td><?php echo $produit['quantité'] ?></td>
          <td><?php echo $produit['promo']?></td>
        </tr>
     <?php }?>


  </table>
</div>
