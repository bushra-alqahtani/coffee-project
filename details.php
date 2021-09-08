<?php 
include('config/db_connect.php');

if(isset($_POST['delete'])){

	$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
	$sql = "DELETE FROM coffees WHERE id= $id_to_delete";
    
    if (mysqli_query($conn,$sql)){

    	//success
    	header('location: index.php');}
    {

    	//failure
    	echo 'qury error:'.mysqli_error($conn);
    }

}


//check GETA REQ id param.. ~_~
if (isset($_GET['id'])){
	$id=mysqli_real_escape_string($conn,$_GET['id']);

	//make SQL
	$sql="SELECT * FROM coffees WHERE id =$id";

	//GET the q r
	$result=mysqli_query($conn,$sql);

	//fetch res
	$coffee=mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);

}
 ?>


 <!DOCTYPE html>
 <html>

<?php include('template/header.php');?>

<div class="container center" style="color: gray;" >
	<?php if ($coffee): ?>
     
     <h5><?php echo htmlspecialchars($coffee['title']); ?></h5>
     <p>created py : <?php htmlspecialchars($coffee['email']); ?></p>
     <p> created at: <?php echo date($coffee['created_at']); ?></p>
     <h5>ingredient:</h5>
     <p><?php echo htmlspecialchars($coffee['ingredient']); ?></p>

      <!-- delete form -->
      <form action="details.php" method="POST">
      	<input type="hidden" name="id_to_delete" value="<?php echo $coffee['id'] ?>">
      	<input type="submit" name="delete" value="delete" class="btn brand z-depth-0">
      </form>

	<?php else: ?>	

<h5>no such coffee exist</h5>

	<?php endif; ?>	
	







</div>
<?php include('template/footer.php');?>
 </html>