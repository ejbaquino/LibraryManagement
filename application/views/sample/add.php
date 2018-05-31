
<h2>Add Record</h2>


<br></br>

<form action="<?php echo base_url('sample/submit') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="circulation_id" class="col-md-1.5 text-right">Circulation ID</label>
			<div class="col-md-5">
				<input type="text" name="txt_circulation_id" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="user_id" class="col-md-1 text-right">User ID</label>
			<div class="col-md-5">
				<input type="text" name="txt_user_id" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="book_id" class="col-md-1 text-right">Book ID</label>
			<div class="col-md-5">
				<input type="text" name="txt_book_id" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="date_borrowed" class="col-md-1.5 text-right">Date Borrowed</label>
			<div class="col-md-3">
				<input type="date" name="txt_date_borrowed" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="due_date" class="col-md-1.5 text-right">Due Date</label>
			<div class="col-md-3">
				<input type="date" name="txt_due_date" class="form-control" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
                <a href = "<?php echo base_url('sample/index');?>" class = "btn btn-primary">Back</a>
			</div>
		</div>

</form>
