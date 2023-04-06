<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <mata value="keywords" data="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Students</title>
        <link href="mystyle.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="./Content/icon.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</head>

<body>



    <?php
    $link = mysqli_connect("localhost", "root", "", "school");

    if ($link === false) {
        die("Error! Connection Failed");
    }

    if (isset($_POST['submit'])) {

        $Student_fname = $_POST['sfname'];
        $Student_lname = $_POST['slname'];
        $Student_gender = $_POST['sgender'];
        $Student_address = $_POST['saddress'];
        $Student_bloodgroup = $_POST['sblood-group'];
        $Student_medical_condition = $_POST['smedical-condition'];
        $Student_dob = $_POST['sdob'];
        $parents = $_POST['parents'];
        $Student_class = $_POST['class'];


        if ($_POST['sgender'] == 'male') {
            $Student_gender = 'Male';
        } elseif ($_POST['sgender'] == 'female') {
            $Student_gender = 'Female';
        } elseif ($_POST['sgender'] == 'pn') {
            $Student_gender = 'Prefer Not To say';
        }

        $sql = "INSERT INTO pupils (Student_FName, Student_LName, Gender, S_Address, Blood_Group, Medical_Condition, Date_Of_Birth, Parents_ID, Class_ID) VALUES('$Student_fname', '$Student_lname', '$Student_gender', '$Student_address', '$Student_bloodgroup', '$Student_medical_condition', '$Student_dob', '$parents', '$Student_class')";

        if (mysqli_query($link, $sql)) {
            echo "Record added succesfully";
        } else {
            echo "Error in adding data";
        }
    }


    ?>




    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img id="navbar-brand" src="./Content/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Students
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item active" aria-current="page" href="add_students.php">Add
                                    Students</a></li>
                            <li><a class="dropdown-item" href="view_student.php">View Students</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Parents
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="add_parents.php">Add Parents</a></li>
                            <li><a class="dropdown-item" href="view_parents.php">View Parents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Classes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="add_class.php">Add class</a></li>
                            <li><a class="dropdown-item" href="view_classes.php">View Classes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Teachers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="add_teacher.php">Add Teacher</a></li>
                            <li><a class="dropdown-item" href="view_teacher.php">View Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Library
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="library.php">Enrol In Library</a></li>
                            <li><a class="dropdown-item" href="view_library.php">View Library</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.html">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
                <p class="h1">Riston Academy</p>
            </div>
        </div>
        <div id="form" class="container">
            <div class="form">
                <h4 class="h4">Add Students</h4>
                <marquee>
                    <h6 class="h6">For Registering Yourself You need to fill all the required fields</h6>
                </marquee>
                <form id="form" action="add_students.php" method="post">
                    <div id="inner-form" class="container">
                        <input class="form" name="sfname" type="text" placeholder="Enter Your First Name"
                            required /></br></br>
                        <input class="form" name="slname" type="text" placeholder="Enter Your Last Name"
                            required /></br></br>

                        <p id="dob"> Select Your Gender</p>
                        <select name="sgender">
                        <option selected>Select gender</option>
                            <option name="sgender" value="Male" id="Male">Male</option>
                            <option name="sgender" value="Female" id="Female">Female</option>
                            <option name="sgender" value="Prefer_Not_To_Say" id="Prefer_Not_To_Say">Prefer Not To Say
                            </option>

                        </select></br></br>

                        <p id="dob">Select Parents</p>
                        <select name="parents">

                            <?php
                            $sql = mysqli_query($link, "SELECT Pid, PFname, PLname FROM parents");

                            while ($row = $sql->fetch_assoc()) {
                                echo "<option value='{$row['Pid']}'>{$row['Pid']}  {$row['PFname']}  {$row['PLname']} </option>";
                            }
                            ?>

                        </select></br></br>

                        <input class="form" name="saddress" type="text" placeholder="Enter Your Address"
                            required /></br></br>
                        <input class="form" name="sblood-group" type="text" placeholder="Enter Your Blood-group"
                            required /></br></br>
                        <input class="form" name="smedical-condition" type="text"
                            placeholder="Enter Your Medical Condition" required /></br></br>
                        <p id="dob">Enter Your Date Of Birth:</p>
                        <input class="form" name="sdob" type="date" required /></br></br>

                        <p id="dob">Select Class</p>

                        <select name="class">
                            <?php
                            $sql = mysqli_query($link, "SELECT Class_ID, Class_Name FROM classes");
                            while ($row = $sql->fetch_assoc()) {

                                echo "<option value='{$row['Class_ID']}'> {$row['Class_ID']} {$row['Class_Name']} </option>";

                            }
                            ?>
                        </select></br></br>

                    </div>

                    <button id="submit" class="submit" name="submit" type="submit">Submit</button>
            </div>
            </form>
        </div>


    </div>

    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div id="fc1" class="col-sm-12 col-lg-12 col-md-4 col-xl-4 col-xxl-4">
                    <address><b>Address:</b></br>
                        Main Street</br>
                        Long Riston</br>
                        East Yorkshire</br>
                        HU11 5JF</address>
                </div>

                <div id="fc2" class="col-sm-12 col-lg-12 col-md-4 col-xl-4 col-xxl-4">
                    <img id="footer" src="./Content/map.png" alt="location">
                </div>

                <div id="fc3" class="col-sm-12 col-lg-12 col-md-4 col-xl-4 col-xxl-4">
                    <p><b>Contact Us:</b></p>
                    <p><b>Contact Number:</b> <a href="tel:+4401964 562422">+44 01964 562422</a></p>
                    <p><b>Email:</b> <a href="mailtoadmin.ris@ebor.academy">admin.ris@ebor.academy</a></p>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
                    <marquee>
                        <p id="footer">&copy; All Rights Resevred 2023. Riston Academy Primary School</p>
                    </marquee>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>