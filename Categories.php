<?php
    require 'conn.php';

    $rep= $conn->prepare('SELECT * FROM categorie');
    $rep->execute();
    $result=$rep->fetchAll();

 ?>
 <div class="">
   <select id="cats" name="">
      <?php foreach ($result as $data) { ?>
         <option value="<?php echo $data['ID_cat'] ;?>"><?php echo $data['nom'];?></option>
     <?php }?>
   </select>
 </div>
