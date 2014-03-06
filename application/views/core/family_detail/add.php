<html>
<head>
<title>Add Family Details</title>
</head>
<body>
	<h2>Add Family Details</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_family_detail/add'); ?>" method="POST" id="family_details_add">
		<table class="formtable">
			<tr><td>Family Id</td><td><input type="text" name="family_id" id="family_id" class="textbox" readonly></td></tr>
			<tr><td>Alumni id</td><td><input type="text" name="alumni_id" name="alumni_id" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="name_of_member" name="name_of_member" class="textbox"></td></tr>
			<tr><td>Relation id</td><td><input type="text" name="relation_id" name="relation_id" class="textbox"></td></tr>
			<tr><td>occupation</td><td><input type="text" name="occupation" name="occupation" class="textbox"></td></tr>
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>