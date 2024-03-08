<!-- <?php
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$instname = $_POST['instname'];
$course = $_POST['course'];
$qualification = $_POST['qualification'];

$conn = new mysqli('localhost', 'root', '', 'demo', 3307);
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}

else{
    $stmt = $conn->prepare("INSERT INTO InfinityCorridor (email, mobileno, firstname, lastname, gender, instname, course, qualification) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $email, $mobileno, $firstname, $lastname, $gender, $instname, $course, $qualification);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    // Redirect to success.html
    header("Location: success.html");
    exit();
}
?> -->


<!-- <?php
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$instname = $_POST['instname'];
$course = $_POST['course'];
$qualification = $_POST['qualification'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'demo', 3307);
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}

// Check if email or phone number already exists
$stmt_check = $conn->prepare("SELECT email, mobileno FROM InfinityCorridor WHERE email = ? OR mobileno = ?");
$stmt_check->bind_param("ss", $email, $mobileno);
$stmt_check->execute();
$stmt_check->store_result();

echo "Number of rows found: " . $stmt_check->num_rows; // Debugging statement

if ($stmt_check->num_rows > 0) {
    $stmt_check->close();
    $conn->close();
    // Redirect to error.html or display an error message
    header("Location: error.html");
    exit();
} else {
    $stmt_check->close();
    
    // Insert new record
    $stmt_insert = $conn->prepare("INSERT INTO InfinityCorridor (email, mobileno, firstname, lastname, gender, instname, course, qualification) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert->bind_param("ssssssss", $email, $mobileno, $firstname, $lastname, $gender, $instname, $course, $qualification);
    $stmt_insert->execute();
    $stmt_insert->close();
    $conn->close();
    
    // Redirect to success.html
    header("Location: success.html");
    exit();
} 
?>-->


<?php
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$instname = $_POST['instname'];
$course = $_POST['course'];
$qualification = $_POST['qualification'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'demo', 3307);
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}

// Check if email or phone number already exists
$stmt_check = $conn->prepare("SELECT email, mobileno FROM InfinityCorridor WHERE email = ? OR mobileno = ?");
$stmt_check->bind_param("ss", $email, $mobileno);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    $stmt_check->close();
    $conn->close();
    header("Location: error.html");
    exit();
} else {
    $stmt_check->close();
    
    // Insert new record
    $stmt_insert = $conn->prepare("INSERT INTO InfinityCorridor (email, mobileno, firstname, lastname, gender, instname, course, qualification) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert->bind_param("ssssssss", $email, $mobileno, $firstname, $lastname, $gender, $instname, $course, $qualification);
    $stmt_insert->execute();
    $stmt_insert->close();
    $conn->close();
    header("Location: success.html");
    exit();
}
?>