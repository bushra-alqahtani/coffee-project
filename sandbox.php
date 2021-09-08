<?php 
   

//if cond.. ___________________________________________________

// $score=30; 

// if ($score>60 ) {
// 	echo'good';

// }else{ 
// 	echo'fine';

// }


// ternary oprator_________________________________________________

// echo $score >60 ? "high score" :  "low score";



//superglobals______________________________________________________
// $_GET['name'],$_POST['name']
//echo $_SERVER['SERVER_NAME'].'<br/>';
//echo $_SERVER['REQUEST_METHOD'].'<br/>';
//echo $_SERVER['SCRIPT_FILENAME'].'<br/>';
//echo $_SERVER['PHP_SELF'].'<br/>'; go to the corrent page 

//session __________________________________________________

// if (isset($_POST['submit'])) {
    
//     //cookie for gender 
//     setcookie('gender' ,$_POST['gander'], time()+ 86400);

//     session_start();

//     //acess session soper glopal

//     $_SESSION['name']=$_POST['name'];
//     //redirect the user 
//     header('Location:index.php');}


// read file____________________________________________________________________ 

// $file=readfile('readme.txt');

// echo $file;

$file='readme.txt';
// if (file_exists($file)) {

//     echo readfile($file).'<br/>';

//     //take cope to another file 
//     copy($file, 'qcopy.txt');

//     // print path 
//     echo realpath($file).'<br/>';

//     echo filesize($file).'<br/>';
//     // make directory
//     mkdir('ww');



// }else{
//     echo 'file is not exist';




// }


// opening file for reading 
//$handle=fopen($file,'r'); //read only
//$handle=fopen($file,'a+');//read & write

//read the file 
//echo fread($handle,filesize($file));
//echo fread($handle,7);
//rading a sinle line 
//echo fgets($handle);
//fwrite($handle, "\n string gfhjsdrgdfjjjjjjjjjjjjjjjjjujdsx");
//fclose($handle);

//delete a file:
//unlink($file);
 /**
  * 
  */
 //class and opj__________________________________________________________________________________
//  class User //class
//  {
//     public $name;
//     public $email;

//     public function __construct($name,$email) // constract for give value for the variables 
//     {
//        $this->name=$name;
//         $this->email=$email;

//     }

//     public function login(){ // function for that class
//       echo $this->name.'logged in';
//     }
//  }

//  $userOne= new User('bushra','bushra@gmail.com'); //create opject
// echo $userOne -> name;
//  //  echo $userOne -> email;

//  // $userOne->login(); // access to the function 



  //class and opj private _____________________________________________________________________________________________________________________
 // class User //class  
 // {   
 //       private $name; 
 //       private $email;      
 //       public function __construct($name,$email) // constract for give value for the variables      
 //       {        $this->name=$name;
 //                $this->email=$email;      }     
 //                 public function login(){ // function for that class       
 //                 echo $this->name.'logged in';     }     
 //                 public function getName(){       
 //                 return $this->name;     }     
 //                 public function setName($name){       
 //                 if (is_string($name)&& strlen($name)>1) {          
 //                 $this-> name=$name;        
 //                  return "name has been updated to $name " ;              
 //                  }else {  
 //               return " the name is not valid  " ; 
 //                 }   
 //                  } 
 //          } 
 //            $userOne= new User('bushra','bushra@gmail.com'); //create opject  echo 
 //           $userOne->getName(); echo $userOne->setName('fatima');       
 //             //echo $userOne -> email;   
 //             // $userOne->login(); // access to the function 

 
// 











 ?>


 <!--<!DOCTYPE html>
  <html>
  <head>
 	 <meta charset="utf-8">
 	 <title></title>
 </head>
  <body>
     <form action="<?php //echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <select  name="gender">
            <option value="male">male</option>
             <option value="female">female</option>


        </select>
        <input type="name" name="name" placeholder="your name" >
        <input type="submit" name="submit" value="submit">

     </form>
 
 </body>
 </html>