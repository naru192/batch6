    <div class="alert alert-primary h3 text-center">
    Disease Form
</div>
<form action="<?=ROOT;?>disease/store" method="post" enctype="multipart/form-data">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Disease Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Disease Name">
        </div>
        <div class="mb-3">
             <label for="symptoms">Symptoms:</label>
            <textarea  type="text" name="symptoms" id="symptoms" 
            class="form-control" placeholder="Enter Symptoms"></textarea>
        </div>
        <div class="mb-3">
            <label for="prescription">prescription:</label>
            <textarea  type="text" name="prescription" id="prescription" 
            class="form-control" placeholder="Enter prescription"></textarea>
        </div>
        <div class="mb-3 ">
            <label for="pics">Pictures:</label>
            <input type="file" name="pics" class="form-control" id="pics">
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Save</button>
    </div>
</form>