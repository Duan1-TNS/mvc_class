<div class="container">
    <?php
        if(isset($_SESSION['error_messages'])){
            $error_messages = $_SESSION['error_messages'];
        }
    ?>
    <form action="index.php?url=add-airline" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="ID" aria-describedby="basic-addon1" disabled>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Airline" aria-describedby="basic-addon1">
        </div>
        <?php
            echo (!empty($error_messages['name']['required'])) ? '<span style="color=red;">'.$error_messages['name']['required'].'</span>':'';
            echo (!empty($error_messages['name']['length'])) ? '<span style="color=red;">'.$error_messages['name']['length'].'</span>':'';
        ?>
        <input type="submit" class="btn btn-success" name="add" value="ADD">
    </form>
</div>
