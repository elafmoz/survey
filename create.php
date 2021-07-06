<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
        .mt-10 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!--NAVBAR LINK    -->
    <?php include "views/_navbar.php" ?>

    <div class="container" >
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                      <img src="logo.jpg" alt="Sharpnet Logo">

                        <h2> Hello new Employee:)</h2>
                    </div>

                    <form action="controllers/AddingEmp.php" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <label for="name">Employee Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter employee's name" required>

                            <label for="Id" class="mt-10">Employee ID:</label>
                            <input type="number" name="Id" id="Id" class="form-control" placeholder="Enter employee's ID" required>

                            <label for="Department" class="mt-10">Employee Department:</label>
                            <textarea name="Department" id="Department" class="form-control" placeholder="Enter employee's Department" required></textarea>

                            <label for="image" class="mt-10">upload Employee Image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" style="background-color:deeppink" class="btn btn-primary btn-block">Save employee's info </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
