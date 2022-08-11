<h1>Add New Task</h1>
<form action="<?=base_url('Home/save')?>" method="post">
<input type="text" name="task_title" placeholder="Title">
<input type="text" name="task_description" placeholder="Description">
<button type="submit">Save</button>
</form>
