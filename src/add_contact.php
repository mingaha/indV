<?php
include_once 'connexion.php';
if(isset($_POST['btn-save']))
{
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 
 if($crud->create($nom,$prenom))
 {
  header("Location:add_contact.php?inserted");
 }
 else
 {
  header("Location:add_contact.php?failure");
 }
}
?>
<?php include_once 'header.php'; ?>
<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
 ?>
    <div class="container">
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
 </div>
 </div>
    <?php
}
else if(isset($_GET['failure']))
{
 ?>
    <div class="container">
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
 </div>
 </div>
    <?php
}
?>

<div class="clearfix"></div><br />

<div class="container">

  
  <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>nom</td>
            <td><input type='text' name='nom' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>prenom</td>
            <td><input type='text' name='prenom' class='form-control' required></td>
        </tr>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Create 
   </button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; return home</a>
            </td>


        </tr>
 
    </table>
</form>
     
     
</div>

<?php include_once 'footer.php'; ?>