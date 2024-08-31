<!DOCTYPE html>
<html>

<head>
    <title>Display Application Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center">Display Application Data</h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th>Id</th>
                        <th>Gender</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>CNIC</th>
                        <th>Age</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Speciality</th>
                        <th>Date Of Birth</th>
                        <th>Resume No & Name</th>
                        <th>Post</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conn.php';
                    $q = "SELECT * FROM aplform";
                    $query = mysqli_query($con, $q);
                    while ($res = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="text-center">
                            <td><?php echo $res['id']; ?></td>
                            <td><?php echo $res['gender']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            <td><?php echo $res['cnic']; ?></td>
                            <td><?php echo $res['age']; ?></td>
                            <td><?php echo $res['depart']; ?></td>
                            <td><?php echo $res['skill']; ?></td>
                            <td><?php echo $res['speciality']; ?></td>
                            <td><?php echo $res['dob']; ?></td>
                            <td><?php echo $res['resume']; ?></td>
                            <td><?php echo $res['post']; ?></td>
                            <td><a href="delete.php?id=<?php echo $res['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <br><br>
            <div class="card">
                <button class="btn-primary btn"> <a href="index.php" class="text-white">Insert Information</a></button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabledata').DataTable();
        })
    </script>

</body>

</html>
