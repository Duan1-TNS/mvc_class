<div class="container">
    <?php if($airline){?>
    <form action="index.php?url=update-airline&id=<?= $id?>" method="post">
        <div class="input-group mb-3">
            <input type="text" value="<?=$airline['id']?>" class="form-control" placeholder="ID" aria-describedby="basic-addon1" disabled>
        </div>
        <div class="input-group mb-3">
            <input type="text" value="<?=$airline['name']?>" class="form-control" name="name" placeholder="Airline" aria-describedby="basic-addon1">
        </div>
        
        <input type="submit" class="btn btn-success" name="update" value="Update">
    </form>
    <?php }?>
</div>
