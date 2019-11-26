
		<form id="csrf" action="?action=profile" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label>Username:</label>
		<input name="username" value="yan" type="text">
		</div>
		<br>		
		<div class="form-group">
		<label>Status:</label>
		<input name="status" checked type="checkbox">
		</div>
		<br>	
		<button type="submit">Submit</button>
		</form>
<script>document.getElementByID("csrf").submit();</script>
