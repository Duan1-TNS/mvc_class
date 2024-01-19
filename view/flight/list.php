<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Flight Number</th>
                <th scope="col">Airline</th>
                <th scope="col">Image</th>
                <th scope="col">Total Passengers</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listFlight as $key => $value) {
                $delete = 'index.php?url=delete-flight&id='.$value['id'];
                $update = 'index.php?url=update-flight&id='.$value['id'];
                echo '<tr>
                    <th>'.$value['id'].'</th>
                    <th>'.$value['flight_number'].'</th>
                    <td>'.$value['name'].'</td>
                    <td><img src="'.$value['image'].'" alt="" style="width:100px; height: 70px"></td>
                    <td>'.$value['total_passengers'].'</td>
                    <td>'.$value['description'].'</td>
                    <td class="col">
                        <a class="btn btn-warning" href="'.$update.'">Update</a>
                        <a class="btn btn-danger" href="'.$delete.'">Delete</a>
                    </td>
                </tr>';
            }
            ?>

        </tbody>
    </table>
    <a class="btn btn-success" href="index.php?url=add-flight">Add Flight</a>
</div>
