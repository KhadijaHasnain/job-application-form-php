<?php
include 'conn.php';

if (isset($_POST['done'])) {
    $gender = $_POST['gender'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $age = $_POST['age'];
    $exp = $_POST['exp'];
    $skill = $_POST['skill'];
    $speciality = $_POST['speciality']; 
    $depart = $_POST['depart'];
    $dob = $_POST['dob'];
    $post = $_POST['post'];

   
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

    //  #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    //   #upload directory path
    $uploads_dir = 'upload';
    //  #TO move the uploaded file to a specific location
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    #SQL query fire for insert data
    $q = "INSERT INTO `aplform` (`gender`, `name`, `email`, `phone`, `cnic`, `age`, `depart`, `skill`, `speciality`, `resume`, `dob`, `post`) 
          VALUES ('$gender', '$name', '$email', '$phone', '$cnic', '$age', '$depart', '$skill', '$speciality', '$pname', '$dob', '$post')";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Job Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card-header bg-dark">
            <h1 class="text-white text-center">Job Application Form</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="form-group d-flex">
                            <label for="exampleFormControlSelect2">Name:</label>

                            <select class="form-control mr-2" name="gender" id="exampleFormControlSelect2">
                                <option>Mr</option>
                                <option>Mrs</option>
                            </select>
                            <input class="form-control form-name-field" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567890" required>
                        </div>
                        <div class="form-group">
                            <label for="cnic">CNIC:</label>
                            <input type="tel" class="form-control" id="cnic" name="cnic" placeholder="36304-6574499-7" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">location:</label>
                            <select class="form-control" name="skill" id="exampleFormControlSelect1">
                                <option>Karachi</option>
                                <option>FSD</option>
                                <option>LHR</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect3">Subject/Speciality</label>
                            <select class="form-control" name="speciality" id="exampleFormControlSelect3">
                                <option>Data Scientist</option>
                                <option>Php Developer</option>
                                <option>Graphic Designer/UI/UX</option>
                                <option>Project Manager</option>
                                <option>Team Leader</option>
                                <option>HR-Executive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="resume">Resume:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="form-group">
                        <label for="age">Date Of Birth:</label>
                        <input type="date" class="form-control" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect5">Department Applied For</label>
                        <select class="form-control" name="depart" id="exampleFormControlSelect5">
                            <option>IT</option>
                            <option>HR</option>
                            <option>Finance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect6">Post Applied For</label>
                        <select class="form-control" name="post" id="exampleFormControlSelect6">
                            <option>Data Scientist</option>
                            <option>Php Developer</option>
                            <option>Graphic Designer/UI/UX</option>
                            <option>Project Manager</option>
                            <option>Team Leader</option>
                            <option>HR-Executive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <button class="mr-3 btn btn-success" type="submit" name="done" onclick="show_alert();"> Submit </button><br>


        <button class="btn-primary btn"> <a href="display.php" class="text-white"> Display All Data </a> </button>

        <br> <br>
    </div>
    </form>
    </div>
    </div>
</body>

</html>