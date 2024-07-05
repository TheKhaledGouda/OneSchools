<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    // Combine data into a string
    $data = "Email: $email\nName: $name\nPhone: $phone\nAge: $age\npassword: $password\n\n";

    // Define the file path
  

    // Log the data to the specified file
    file_put_contents($file, $data, FILE_APPEND);
    print"age:$age"
    // Redirect user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
<?php
// Database connection details
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "mydatabase"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// SQL to insert data into database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
