<?php
include 'connect.php';

// Mengecek apakah tombol "update" diklik
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $categoryId = $_POST["category"];
    $author = $_POST["author"];
    $stock = $_POST["stock"];

    // Query untuk update data
    $query = "UPDATE books 
              SET title = '$title', 
                  category_id = '$categoryId',
                  author = '$author', 
                  stock = '$stock' 
              WHERE id = '$id'"; // pakai tanda kutip supaya aman

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Mengecek apakah query berhasil dijalankan
    if ($result && mysqli_affected_rows($conn) > 0) {
        header("Location: list_books.php");
        exit;
    } else {
        echo "
        <script>
            alert('Failed to update book: " . mysqli_error($conn) . "');
            window.location='list_books.php';
        </script>";
    }
}
?>
