
<?php 

include('config/db_connect.php');



 $title=$email=$ingredient='';
 $errors=array('email'=>'','title'=>'','ingredient'=>'');
 if(isset($_POST['submit'])){


 //check email
if(empty($_POST['email'])){
$errors['email']=" email is required!  <br/>";

}else{
	$email=$_POST['email'];
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$errors['email']="email must be a validate email address <br/>";	}
}

//check title
if(empty($_POST['title'])){
$errors['title']= " title is required! <br/>";
}else{
	$title=$_POST['title'];
	if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
		$errors['title']= 'title must be letters and spaces onle! <br>';
	}
}

 //check ingredient
if(empty($_POST['ingredient'])){
$errors['ingredient']= " ingredient is required! <br/>";

}else{
	$ingredient=$_POST['ingredient'];
	if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)) {
		$errors['ingredient']= 'ingredient must be comma separated list! <br>';
	}
}

if (array_filter($errors)) {
}else{

$email=mysqli_real_escape_string($conn,$_POST['email']);
$title=mysqli_real_escape_string($conn,$_POST['title']);
$ingredient=mysqli_real_escape_string($conn,$_POST['ingredient']);

//make q
$sql="INSERT INTO coffees(title,email,ingredient) VALUES('$title','$email','$ingredient')";

//save in db and check
 if (mysqli_query($conn,$sql)) {
header('location:index.php');
 }else{

 	echo 'error :'.mysql_error($conn);
 }



	
}


}






 ?>
<!DOCTYPE html>
<html>

<?php include('template/header.php');?>
<section class="container gray-tex">
	
<h4 class="center">Add Coffee</h4>
<form class="white" action="add.php" method="POST">
	<label> Your Email:</label>
	<input type="text" name="email" value=<?php echo htmlspecialchars($email) ?>>
    <div class="red-text"> <?php echo $errors['email']; ?></div>
	
	<label>coffee title:</label>
	<input type="text" name="title" value=<?php echo htmlspecialchars($title)?>>
     <div class="red-text"> <?php echo $errors['title']; ?></div>


	<label> ingredient (with comma):</label>
	<input type="text" name="ingredient" value=<?php echo htmlspecialchars($ingredient)?>>
    <div class="red-text"> <?php echo $errors['ingredient']; ?></div>

	<div class="center">
		
		<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">


	</div>
</form>


</section>



<?php include('template/footer.php');?>


</html>