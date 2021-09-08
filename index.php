<?php 
 

 include('config/db_connect.php');
//gitting the data from DB
//construct the quiry sql to gether all data :
$sql='SELECT title, ingredient, id FROM coffees';

//make the quiry& get data:

$result=mysqli_query($conn,$sql);

//fetch the result as array (each row ) 
$coffees=mysqli_fetch_all($result,MYSQLI_ASSOC);
 
//to free the memory
mysqli_free_result($result);

//to close the connection with DB
mysqli_close($conn);




 ?>

<!DOCTYPE html>
<html>

<?php include('template/header.php');?>

<h4 class="center gray-text">Coffee!!</h4>

<div class="container">
    <div class="row">
    <?php foreach($coffees as $coffee) { ?>   

     <div class="col s6 md3">
        <div class="card z-depth-0">
            <img src="img/cof.png" class="coficon">
            <div class="card-content center">
                <h6><?php echo htmlspecialchars($coffee['title']); ?></h6>
                <ul>
                    <?php foreach (explode(',', $coffee['ingredient']) as $ing) {?>

                        <li>
                            <?php echo htmlspecialchars($ing); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
             <div class="card-action right-align">
                 <a class="brand-text" href="details.php?id=<?php echo $coffee['id'] ?>">more info..</a>
             </div>
        </div>
     </div>


    <?php } ?> 

    </div>

</div>














<?php include('template/footer.php');?>


</html>