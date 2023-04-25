<?php
if(Session::get('gmsg')){
    ?>
    <div class="alert alert-success"id="gs">
        <?php
        echo Session::get('gmsg');
        ?>
    </div>
    <?php
    Session::delete('gmsg');
}
?>
<?php
if(Session::get('emsg')){
    ?>
    <div class="alert alert-danger"id="gs">
        <?php
        echo Session::get('emsg');
        ?>
    </div>
    <?php
    Session::delete('emsg');
}
?>
<table class="table table-striped border">
    <thead class="table-dark">
        <tr>
            <th>S.NO</th>
            <th>Name</th>
            <th>City</th>
            <th>Mobile Number</th>
            <th>Adhar Card</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index=0;
        foreach($data as $info){
        ?>
        <tr>
            <td><?=++$index;?></td>
            <td><?=$info['name'];?></td>
            <td><?=$info['city'];?></td>
            <td><?=$info['phone_number'];?></td>
            <td><?=$info['adhar_card_number'];?></td>
            <td><?=$info['email'];?></td>
            <td>
                <a href="<?=ROOT;?>employee/edit/<?=$info['id'];?>" class="btn btn-primary">Edit</a>
                <a href="#" onclick="confirmt('employee/destroy/<?=$info['id'];?>')" class="btn btn-Danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>

</table>

            