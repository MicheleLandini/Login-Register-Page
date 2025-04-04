<?php
session_start(); // Avvia la sessione

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, nome_utente, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $nome_utente, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['nome_utente'] = $nome_utente;

                header("Location: user.php"); // Reindirizza alla pagina dell'utente
                exit();
            }
        }
        header("Location: error.html"); // Se le credenziali sono errate
        exit();
    }
}

$conn->close();
?>
