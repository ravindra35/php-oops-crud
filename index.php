<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP OOP CRUD</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php
        include('Model.php');
        $model=new Model();
        $model->savedata();
    ?>

    <div class="card">
        <div class="card-header">
            PHP OOPS
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row col-md-12">
                    <div class="col-md-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="col-md-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="col-md-3">
                        <label for="mobile">Mobile</label>
                        <input type="text" name="mobile" id="mobile">
                    </div>
                    <div class="col-md-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address">
                    </div>
                </div>
                <div class="row col-md-12">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>SL No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            <?php 
            $i=0;
            $records=$model->showAll();
            foreach($records as $record){
                $id=$record['id'];
                $i++;
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$record['name']."</td>";
                echo "<td>".$record['email']."</td>";
                echo "<td>".$record['mobile']."</td>";
                echo "<td>".$record['address']."</td>";
                echo "<td>
                <a href='view.php?id=$id' class='badge badge-success' title='View'>View</a>
                <a href='edit.php?id=$id' class='badge badge-info' title='Edit'>Edit</a>
                <a href='delete.php?id=$id' class='badge badge-danger' title='Delete'>Delete</a>
                </td>";
                echo "</tr>";
                
            }
            ?>
        </table>
        <?php
           

?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>