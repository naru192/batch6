<div class="alert alert-primary h3 text-center">
    Disease Edit form
</div>
<form action="<?=ROOT;?>disease/update/<?=$info['id'];?>" 
method="post">
    <div class="container border">
        <div class="mb-3">
            <label for="name">Disease Name:</label>
            <input type="text" name="name" value="<?=$info['name'];?>" id="name" class="form-control" placeholder="Enter Disease Name">
        </div>
        <div class="mb-3">
             <label for="symptoms">Symptoms:</label>
            <textarea  type="text" name="symptoms" id="symptoms" 
            class="form-control" placeholder="Enter Symptoms"><?=$info['symptoms'];?>
        </textarea>
        </div>
        <div class="mb-3">
            <label for="prescription">prescription:</label>
            <textarea  type="text" name="prescription" id="prescription" 
            class="form-control" placeholder="Enter prescription">
        <?=$info['prescription'];?></textarea>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-success">Update</button>
    </div>
</form>