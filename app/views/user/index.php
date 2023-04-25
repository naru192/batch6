<div class="alert alert-primary h3 text-center">
    Login Form
</div>
<?php
if(Session::get('emsg')){
    ?>
    <div class="alert alert-danger" id="gs">
        <?php
        echo Session::get('emsg');
        ?>
    </div>
    <?php
    Session::delete('emsg');
}
?>
<form action="<?=ROOT;?>user/" method="post">
    <div class="container border">
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" 
            placeholder="Enter Email" required>
        </div>
        <div class="mb-3">
             <label for="password">Password:</label>
            <input  type="password" name="password" id="password" 
            class="form-control" placeholder="Enter Password" required  >
             
          

        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Login</button>
    </div>
</form>

