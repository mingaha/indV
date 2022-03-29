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
  $query = "SELECT * FROM info";       
  $records_per_page=3;
  $newquery = $crud->paging($query,$records_per_page);
  $crud->dataview($newquery);
  ?>
    <tr>
        <td colspan="7" align="center">
    <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?> 
         </div>


        </td>
    </tr>
 
</table>
   
       
</div>

<?php include_once 'footer.php'; ?>