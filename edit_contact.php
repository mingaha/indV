<?php
include_once 'connexion.php';
if(isset($_POST['btn-update']))
{
 $id = $_GET['edit_id'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 
 if($crud->update($id,$nom,$prenom))
 {
  $msg = "<div class='alert alert-info'>
    <strong>WOW!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
    </div>";
 }
 else
 {
  $msg = "<div class='alert alert-warning'>
    <strong>SORRY!</strong> ERROR while updating record !
    </div>";
 }
}

if(isset($_GET['edit_id']))
{
 $id = $_GET['edit_id'];
 extract($crud->getID($id)); 
}

?>
<?php include_once 'header.php'; ?>

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
 echo $msg;
}
?>
</div>

<div class="clearfix"></div><br />

<div class="container">
  
     <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>First Name</td>
            <td><input type='text' name='nom' class='form-control' value="<?php echo $nom; ?>" required></td>
        </tr>
 
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='prenom' class='form-control' value="<?php echo $prenom; ?>" required></td>
        </tr>
 
    
 
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
     update
    </button>
                <a href="index.php" class="btn btn-large btn-success"> &nbsp; CANCEL</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>

