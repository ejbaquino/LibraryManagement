
<h2>Edit Record</h2>


<br></br>

<form action="<?php echo base_url('sample/update') ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $record->id; ?>">
		<div class="form-group">
			<label for="circulation_id" class="col-md-1.5 text-right">Circulation ID</label>
			<div class="col-md-5">
				<input type="text" value="<?php echo $record->circulation_id; ?>" name = "txt_circulation_id" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="user_id" class="col-md-1 text-right">User ID</label>
			<div class="col-md-5">
				<input type="text" value="<?php echo $record->user_id; ?>" name="txt_user_id" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="book_id" class="col-md-1 text-right">Book ID</label>
			<div class="col-md-5">
				<input type="text" value="<?php echo $record->book_id; ?>" name="txt_book_id" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="date_borrowed" class="col-md-1.5 text-right">Date Borrowed</label>
			<div class="col-md-3">
				<input type="date" value="<?php echo $record->date_borrowed; ?>" name="txt_date_borrowed" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label for="due_date" class="col-md-1.5 text-right">Due Date</label>
			<div class="col-md-3">
				<input type="date" value="<?php echo $record->due_date; ?>" name="txt_due_date" class="form-control" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
                <a href = "<?php echo base_url('sample/index');?>" class = "btn btn-primary">Back</a>
			</div>
		</div>

</form>
