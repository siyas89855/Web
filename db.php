// Example using PDO to connect to a database
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$stmt = $pdo->prepare('SELECT password FROM users WHERE username = ?');
$stmt->execute([$username]);
$stored_password = $stmt->fetchColumn();

if (password_verify($password, $stored_password)) {
    // Password is correct
}
