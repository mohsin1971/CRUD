<?php include 'inc/header.php'; ?>
<?php include 'database.php'; ?>
<?php include 'config.php'; ?>

<?php 
 $db = new database();
 $query = "SELECT * FROM tbl_user";
 $read = $db->select($query);
 
?>
		
<table class="tableone">
    <tr>
        <th width="25%">Name</th>
        <th width="40%">Email</th>
        <th width="10%">Skill</th>
        <th width="25%">action</th>
    </tr>
    <?php if($read){ ?>
        <?php while($row = $read->fetch_assoc()){ ?>
    <tr>
        <td width="25%"><?php echo $row['name'] ?></td>
        <td width="40%"><?php echo $row['email'] ?></td>
        <td width="10%"><?php echo $row['skill'] ?></td>
        <td width="25%"><a href="update.php?id=<?php echo urlencode($row['id'])?>">edit</td></a>
    </tr>
    <?php } ?>
<?php } ?>
</table>		
<a href="create.php"> <p>Create</p></a>






<?php include 'inc/footer.php'; ?>