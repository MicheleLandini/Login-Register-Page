<?php
// Abilita la segnalazione degli errori per il debugging
echo "Error handling enabled";
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Includi il file di connessione al database
require_once 'config.php';

// Controlla se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni i dati dal modulo
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Verifica che i campi non siano vuoti
    if (!empty($username) && !empty($email) && !empty($password)) {
        // Hash della password per sicurezza
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepara e esegui la query di inserimento
        $stmt = $conn->prepare("INSERT INTO users (nome_utente, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            // Reindirizzamento alla pagina index.html
            header("Location: index.html");
            exit();
        } else {
            echo "Errore durante la registrazione: " . $stmt->error;
        }

        // Chiudi lo statement
        $stmt->close();
    } else {
        echo "Tutti i campi sono obbligatori.";
    }
}

// Chiudi la connessione al database
$conn->close();
?>
