<div class="alert alert-primary h3 text-center">
    Employee Edit Form
</div>
<form action="<?=ROOT;?>employee/update/<?=$info['id'];?>" method="post">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Employee Name:</label>
            <input type="text" name="name" id="name" required value="<?=$info['name'];?>"
            class="form-control" placeholder="Enter Employee Name">
        </div>
        <div class="mb-3">
             <label for="city">City:</label>
            <input  type="text" name="city" id="city" value="<?=$info['city'];?>"
            class="form-control" placeholder="Enter city" required>
        </div>
        <div class="mb-3">
            <label for="mobile">Mobile Number:</label>
            <input  type="text" name="phone_number" id="mobile" value="<?=$info['phone_number'];?>"
            class="form-control" placeholder="Enter phone Number" max="10" required>
        </div>
        <div class="mb-3">
             <label for="adhar">Adhar Card Number:</label>
            <input  type="text" name="adhar_card_number" id="adhar" value="<?=$info['adhar_card_number'];?>"
            class="form-control" placeholder="adhar_card_number" required>
        </div>
        <div class="mb-3">
             <label for="email">Email:</label>
            <input  type="email" name="email" id="email" value="<?=$info['email'];?>"
            class="form-control" placeholder="Enter city" required>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Update</button>
    </div>
</form>