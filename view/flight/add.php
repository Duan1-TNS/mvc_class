<div class="container">
    <form action="index.php?url=add-flight" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ID" aria-describedby="basic-addon1" disabled>
        </div>

        <div class="mb-3">
            <select id="disabledSelect" name="airline_id" class="form-select">
                <?php
                    foreach($listAir as $value){
                        echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                    }
                ?>
            </select>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="flight_number" placeholder="Flight Number" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="total_passengers" placeholder="Total Passengers" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="description" placeholder="Description" aria-describedby="basic-addon1">
        </div>

        <input type="submit" class="btn btn-success" name="add" value="ADD">
    </form>
</div>