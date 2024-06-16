<?php
// Database connection details
$host = 'localhost'; // Host name
$dbname = 'BOOKINGdb'; // Database name
$username = 'your_username'; // Database username
$password = 'your_password'; // Database password

// Establishing the connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    $apartment = htmlspecialchars($_POST['apartment']);

    try {
        // Prepare SQL statement to insert data into database
        $stmt = $pdo->prepare("INSERT INTO bookings (name, email, phone, message, apartment) VALUES (:name, :email, :phone, :message, :apartment)");

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':apartment', $apartment);

        // Execute the statement
        $stmt->execute();

        // Success message
        echo "<script>alert('Booking submitted successfully!');</script>";
        echo "<script>window.location.replace('index.html');</script>"; // Redirect after successful submission

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
