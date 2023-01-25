<h1>Countries</h1>
<?php foreach ($countries as $data) : ?>
    <h3><?php echo $data->name ?><small><?php echo $data->status == 1 ? "enable" : "disable"; ?></small></h3>
<?php endforeach ?>