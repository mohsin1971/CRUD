<?php include 'inc/header.php'; ?>
<?php include 'database.php'; ?>
<?php include 'config.php'; ?>

<?php 
 $db = new database();
 if(isset($_POST['submit'])){
     $name = ($_POST['name']);
     $email = ($_POST['email']);
     $skill = ($_POST['skill']);
     if($name =='' || $email=='' || $skill == ''){
         $error ="Field must not be empty";
     }else{
         $query = "INSERT INTO tbl_user(name, email, skill) value('$name','$email','$skill')";
         $create = $db->INSERT($query);
     }

 }
 
?>
<form action="" method="post">
        <table class="tableone">
            <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
            </tr>

            <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
            </tr>

            <tr>
            <td>Skill</td>
            <td><input type="text" name="skill"></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit"></td>
            <td><input type="reset" name="cancle"></td>
           
        </table>
        <a href="index.php"> <p>Go back</p></a>
</form> 









		

<?php include 'inc/footer.php'; ?>