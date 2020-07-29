<?php
include 'connection.php';

$d=$_GET['x'];
$sel_district=mysql_query("select * from train_mangmt where dist='$d'");
if(mysql_num_rows($sel_district)>0)
{
    ?>
<select name="station" class="form-control" required="required" >
<option value="">Choose One</option>
<?php
while($r_district=mysql_fetch_row($sel_district))
{
    ?>
<option value="<?php echo $r_district[0] ?>"><?php echo $r_district[4] ?></option>
<?php
}
?>
</select>
<?php
}
else{
    ?>
<select name="station" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>