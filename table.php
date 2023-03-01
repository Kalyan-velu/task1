<?php
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $crud->getInputs()
?>
<table id="table" class="table table-hover table-striped-columns">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Text Input</th>
         <th scope="col">Number Input</th>
         <th scope="col">Image</th>
      </tr>
   </thead>
   <?php
   while ($r = $results->fetch(PDO::FETCH_ASSOC)) {
   ?>
   <tr>
      <th scope="row"><?php echo $r['id'] ?></th>
      <td><?php echo $r['textinput'] ?></td>
      <td><?php echo $r['numberinput'] ?></td>
      <td>
         <img alt="name" class="image" src="<?php echo $r['file'] ?>">
      </td>
   </tr>
   <?php } ?>
</table>