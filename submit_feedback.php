<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $query = "INSERT INTO kritiks (name, email, message) VALUES ('$name', '$email', '$message')";
}

if(mysqli_query($conn, $query)){
echo "<script>alert('feedback berhasil dikirim');
document.location.href = 'index.php';
</script>";
}else{
    echo "<script>alert('feedback gagal dikirim');
document.location.href = 'index.php';
</script>";
}
?>