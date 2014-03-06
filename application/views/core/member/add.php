<html>
<head>
<title>Add Members</title>
</head>
<body>
	<h2>Add Members</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_member/add'); ?>" method="POST" id="member_add">
		<table class="formtable">
			<tr><td>Member Id</td><td><input type="text" name="member_id" id="member_id" class="textbox" readonly></td></tr>
			<tr><td>College id</td><td><input type="text" name="college_id" name="college_id" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="member_name" name="member_name" class="textbox"></td></tr>
			<tr><td>Branch id</td><td><input type="text" name="branch_id" name="branc_id" class="textbox"></td></tr>
			<tr><td>Year</td><td><input type="text" name="year" name="year" class="textbox"></td></tr>
			<tr><td>Gender</td><td><input type="text" name="gender" name="gender" class="textbox"></td></tr>
			<tr><td>Date of Birth</td><td><input type="text" name="dob" name="dob" class="textbox"></td></tr>
			<tr><td>Contact Number</td><td><input type="text" name="contact_no" name="contact_no" class="textbox"></td></tr>
			<tr><td>Email Id</td><td><input type="text" name="email" name="email" class="textbox"></td></tr>
			<tr><td>Photo</td><td><input type="text" name="photo" name="photo" class="textbox"></td> <td><input type="submit" name="submit" value="Browse" class="submitbutton"></td></tr>
			<tr><td>Position Id</td><td><input type="text" name="position_id" name="position_id" class="textbox"></td></tr>
			<tr><td>Committee Id</td><td><input type="text" name="committee_id" name="commitee_id" class="textbox"></td></tr>
			<tr><td>Password</td><td><input type="text" name="password" name="password" class="textbox"></td></tr>
			<tr><td>role_id</td><td><input type="text" name="role_id" name="role_id" class="textbox"></td></tr>
			<tr><td>Status</td><td><input type="text" name="status" name="status" class="textbox"></td></tr>
			<tr><td>Degree</td><td><input type="text" name="degree_id" name="degree_id" class="textbox"></td></tr>
			
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>