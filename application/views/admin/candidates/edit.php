<form method="post">
	<table class="table-form table-bordered">
		<tr>
			<th>First Name</th>
			<td><input type="text" name="can_first_name" size="30" maxlength="30" value="" /></td>
		</tr>
		<tr>
			<th>Last Name</th>
			<td><input type="text" name="can_last_name" size="30" maxlength="30" value="" /></td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
				<a href="<?php echo site_url('admin/candidates'); ?>" class="btn">Back</a>
			</td>
		</tr>
	</table>
</form>


<script type="text/javascript">
$(function() {		
	$('form').floodling('can_first_name', "<?php echo addslashes($candidate->can_first_name); ?>");		

	$('form').floodling('can_last_name', "<?php echo addslashes($candidate->can_last_name); ?>");		
});
</script>
