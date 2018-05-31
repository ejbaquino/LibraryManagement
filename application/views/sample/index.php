<!DOCTYPE html>
<html>
<head>
    <title>Circulation</title>
    <link rel ="stylesheet" type ="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container">
        <h2>Circulation</h2>
        <?php
        if($this->session->flashdata('success_msg')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success_msg'); ?>
            </div>
            <?php
        }
        ?>


        <?php
        if($this->session->flashdata('error_msg')){
            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('error_msg'); ?>
            </div>
            <?php
        }
        ?>
        <a href = "<?php echo base_url('sample/add');?>" class = "btn btn-primary">Add New</a>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <td>ID</td>
                    <th>Circulation ID</th>
                    <th>User ID</th>
                    <th>Book ID</th>
                    <th>Date Borrowed</th>
                    <th>Due Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($records){
                    foreach($records as $record){
                        ?>
                        <tr>
                            <td><?php echo $record->id; ?></td>
                            <td><?php echo $record->circulation_id; ?></td>
                            <td><?php echo $record->user_id; ?></td>
                            <td><?php echo $record->book_id; ?></td>
                            <td><?php echo $record->date_borrowed; ?></td>
                            <td><?php echo $record->due_date; ?></td>
                            <td><?php echo $record->date_returned; ?></td>
                            <td>
                                <a href="<?php echo base_url('sample/edit/'.$record->id); ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo base_url('blog/delete'); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </body>
    </html>
