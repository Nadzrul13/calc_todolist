<?php
header("Content-Type: application/json");
include "db.php";

$method = $_SERVER["REQUEST_METHOD"];
switch ($method) {
    case 'GET':
        $id = isset($_GET["id"]);
        if($id > 0 ){
            $sql = "SELECT * FROM kritiks WHERE id = '$id'";
        }else{
            $sql = "SELECT * FROM kritiks";
        }

        $result = mysqli_query($conn, $sql);
        $data = [];
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        echo json_encode($data);
        break;
    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        $name = $input["name"];
        $email = $input["email"];
        $message = $input["message"];

        $query = "INSERT INTO kritiks (name, email, message) VALUES ('$name', '$email', '$message')";
        if(mysqli_query($conn, $query)){
            echo json_encode(["message" => "Kritik berhasil dikirim."]);
        }else{
            echo json_encode(["error" => "Kritik gagal dikirim."]);
        }
        break;
    case 'PUT':
        $id = isset($_GET["id"]) ? $_GET["id"] : 0;
        if($id > 0){
            $input = json_decode(file_get_contents("php://input"), true);
            $name = $input["name"];
            $email = $input["email"];
        $message = $input["message"];

        $query = "UPDATE kritiks SET name = '$name', email = '$email', message = '$message' WHERE id = '$id'";
        if(mysqli_query($conn, $query)){
            echo json_encode(["message" => "Kritik berhasil diupdate."]);

        }else{
            echo json_encode(["error" => "Kritik gagal diupdate."]);
        }
    
        }
        break;
        case 'DELETE':
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            if($id > 0){
                $query = "DELETE FROM kritiks WHERE id = '$id'";
                if(mysqli_query($conn, $query)){
                    echo json_encode(["message" => "Kritik berhasil dihapus."]);
                }else{
                    http_response_code(500);
                    echo json_encode(["error" => "Kritik gagal dihapus."]);
                }
            }
            break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method tidak dikenal."]);
        break;
}

mysqli_close($conn);
?>

