<!-- <?php
// Define variables and initialize with empty values
$name = $email = $address = $gender = "";
$name_err = $email_err = "";

// Process form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate name (only letters and spaces allowed)
    if (empty($_POST["name"])) {
        $name_err = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
        $name_err = "Only letters and white space allowed in name";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $email_err = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Get other fields (no strict validation needed here)
    $address = htmlspecialchars($_POST["address"]);
    $gender = htmlspecialchars($_POST["gender"]);

    // Check for any errors
    if (empty($name_err) && empty($email_err)) {
        // Save the data (for simplicity, saving to a text file on the server)
        $data = "Name: $name, Email: $email, Address: $address, Gender: $gender\n";
        file_put_contents('user_data.txt', $data, FILE_APPEND);
        
        // Display success message
        echo "User details submitted successfully!";
    } else {
        // Display error messages
        echo "Error: " . $name_err . "<br>";
        echo "Error: " . $email_err . "<br>";
    }
}
?> -->


