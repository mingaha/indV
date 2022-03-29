<?php
include_once 'connexion.php';
?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<a href="add_contact.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
    <div>
        
    </div>
     <table class='table table-bordered table-responsive'>
     <tr>
     <th>#</th>
     <th>NOM</th>
     <th>PRENOM</th>
     <th colspan="2" align="center">Actions</th>
     </tr>
     <?php
//   $query = "SELECT * FROM info";  
$nom = $_GET['rech'];

$query=$crud->rechere($nom);
  ?>

 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>