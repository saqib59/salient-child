<?php
/*
Template Name: Register Template
*/

get_header();
?>
<div class="container">
<form method="post" id="register_user_form">

	<h3>DEMOGRAPHICS</h3>
		<input class="required" type="text" name="name" placeholder="Name">
		<input class="required" type="email" name="u_email" placeholder="Email">
		<input class="required" type="text" name="d_o_b" placeholder="DOB">
		<input class="required" type="text" name="address" placeholder="Address">
		<input type="hidden" name="action" value="daily_user_registration_form">
	<h3>LICENSES</h3>
		<input class="required" type="text" name="license_type" placeholder="License Type">
		<input class="required" type="text" name="license_state" placeholder="License State">
		<input class="required" type="text" name="license_num" placeholder="License Number">
		<input class="required" type="date" name="effective_date" placeholder="Effective Date">
		<input class="required" type="date" name="expiration_date" placeholder="Expiration Date">
	<h3>MALPRACTICE INSURANCE</h3>	
		<input class="required" type="text" name="malpractice" placeholder="Malpractice Carrier">
		<input class="required" type="date" name="effective_date" placeholder="Effective Date">
		<input class="required" type="date" name="expiration_date" placeholder="Expiration Date">
	<h3>UPLOADS REQUIRED</h3>	
		<label>Color Copy of Driver's License</label>
		<input class="required" type="file" name="drivers_license" >
		<br>
		<label>Copy of Professional License</label>
		<input class="required" type="file" name="professional_license" >
		<br>
		<label>Copy of Certificate of Insurance</label>
		<input class="required" type="file" name="certificate_insurance" >
	<button type="submit" id="register_submit"> Register</button>
	
</form>
</div>
<?php

get_footer();