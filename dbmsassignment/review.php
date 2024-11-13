<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'];
    $user_name = "Anonymous"; // You can replace this with actual user data if you implement login
    $review = $_POST['review'];

    // Insert review into the database
    $sql = "INSERT INTO reviews (book_id, user_name, rating, review) 
            VALUES ('$book_id', '$user_name', 5, '$review')"; // You can replace '5' with dynamic rating

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
        header("Location: book_detail.php?id=" . $book_id);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>