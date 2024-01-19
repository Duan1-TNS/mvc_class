<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listAir as $key => $value) {
                $delete = 'index.php?url=delete-airline&id='.$value['id'];
                $update = 'index.php?url=update-airline&id='.$value['id'];
                echo '<tr>
                    <th>'.$value['id'].'</th>
                    <td>'.$value['name'].'</td>
                    <td class="col-4">
                        <a class="btn btn-warning" href="'.$update.'">Update</a>
                        <a class="btn btn-danger" href="'.$delete.'">Delete</a>
                    </td>
                </tr>';
            }
            ?>

        </tbody>
    </table>
    <a class="btn btn-success" href="index.php?url=add-airline">Add Airline</a>
</div>