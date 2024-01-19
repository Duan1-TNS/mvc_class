<div class="container">
    <?php if ($vieUppdate) { ?>
        <form action="index.php?url=update-flight&id=<?= $id ?>" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="text" value="<?= $id ?>" class="form-control" aria-describedby="basic-addon1" disabled>
            </div>

            <div class="mb-3">
                <select id="disabledSelect" name="airline_id" class="form-select">
                    <?php
                    foreach ($listAir as $value) { ?>
                        <option <?php echo ($value['name'] == $vieUppdate['name'] ? 'selected' : '') ?> value="<?= $value['id'] ?>"> <?= $value['name'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <input type="text" value="<?= $vieUppdate['flight_number'] ?>" class="form-control" name="flight_number" placeholder="Flight Number" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <img src="<?php echo $vieUppdate["image"] ?>" style="max-width: 100px;">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>

            <div class="input-group mb-3">
                <input type="text" value="<?= $vieUppdate['total_passengers'] ?>" class="form-control" name="total_passengers" placeholder="Total Passengers" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" value="<?= $vieUppdate['description'] ?>" class="form-control" name="description" placeholder="Description" aria-describedby="basic-addon1">
            </div>

            <input type="submit" class="btn btn-success" name="update" value="Update">
        </form>
    <?php } ?>
</div>