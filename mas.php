$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE user = :user');
$stmt->execute(['user' => $user]);
