<div class="alert alert-primary h3 text-center">
    Employee Form
</div>
<form action="<?=ROOT;?>employee/store" method="post">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Employee Name:</label>
            <input type="text" name="name" id="name" required 
            class="form-control" placeholder="Enter Employee Name">
        </div>
        <div class="mb-3">
             <label for="city">City:</label>
            <input  type="text" name="city" id="city" 
            class="form-control" placeholder="Enter city name" required>
        </div>
        <div class="mb-3">
            <label for="mobile">Mobile Number:</label>
            <input  type="text" name="phone_number" id="mobile" 
            class="form-control" placeholder="Enter phone Number" max="10" required>
        </div>
        <div class="mb-3">
             <label for="adhar">Adhar Card Number:</label>
            <input  type="text" name="adhar_card_number" id="adhar" 
            class="form-control" placeholder="Enter Adhar Card Number" required>
        </div>
        <div class="mb-3">
             <label for="email">Email:</label>
            <input  type="email" name="email" id="email" 
            class="form-control" placeholder="Enter Email Addres" required>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Save</button>
    </div>
</form>