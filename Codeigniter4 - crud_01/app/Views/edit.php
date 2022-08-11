<h1>Edit Task</h1>
<form action="<?=base_url('Home/update')?>" method="post">
<input type="hidden" name="id" value="<?=$task['id']?>">
<input type="text" name="task_description" value="<?=$task['description']?>">
<button type="submit">Save</button>
</form>
