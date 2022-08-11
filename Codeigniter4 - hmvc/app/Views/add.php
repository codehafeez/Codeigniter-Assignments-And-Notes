<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<h1>Add New Task</h1>
<?php $validation = \Config\Services::validation(); ?>
<?php if($validation->getError('task_title')) {?>
    <div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('task_title'); ?>
    </div>
<?php }?>
<?php if($validation->getError('task_description')) {?>
    <div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('task_description'); ?>
    </div>
<?php }?>



<form action="<?=base_url('Home/save')?>" method="post">
<input type="text" name="task_title" value="<?=$task_title?>" placeholder="Title">
<input type="text" name="task_description" value="<?=$task_description?>" placeholder="Description">
<button type="submit">Save</button>
</form>
