
<?php
// Get the user input from the form
$name = $_POST['name'];

// Check if the name is empty or not
if (empty($name)) {
    $errorMessage = "Name is required";
} else {
    // Validate the name to make sure it only contains letters and spaces
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errorMessage = "Only letters and spaces are allowed in the name";
    }
}

// If there is no error, proceed with the registration
if (empty($errorMessage)) {
    // Save the user to the database
    $query = "INSERT INTO users (name) VALUES (:name)";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
}
?>