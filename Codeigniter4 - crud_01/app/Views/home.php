<a href="<?=base_url('Home/add')?>">Add New Task</a>
<?php foreach($task as $data){

    echo "<ul>";
    echo "<li>".$data["description"]."</li>";
    echo "<li><a href=".base_url("Home/edit/".$data['id']).">Edit</a></li>";
    echo "<li><a href=".base_url("Home/delete/".$data['id']).">Delete</a></li>";
    echo "</ul>";
        
 } ?>
