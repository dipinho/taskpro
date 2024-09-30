<?php
// Incluir configuração do banco de dados
include('config/database.php');

$error = '';
$success = '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header('Location: view_tasks.php'); // Redirecionar se ID inválido
    exit;
}

// Buscar a tarefa existente
$stmt = $conn->prepare("SELECT title, description FROM tasks WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header('Location: view_tasks.php'); // Redirecionar se não encontrar a tarefa
    exit;
}

$task = $result->fetch_assoc();
$title = $task['title'];
$description = $task['description'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    
    // Validação simples
    if (empty($title)) {
        $error = "O título é obrigatório.";
    } else {
        // Preparar para prevenir SQL Injection
        $stmt = $conn->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $description, $id);

        if ($stmt->execute()) {
            $success = "Tarefa atualizada com sucesso!";
        } else {
            $error = "Erro ao atualizar tarefa: " . $stmt->error;
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa - TaskPro</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Tarefa</h2>
        
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($description); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Tarefa</button>
            <a href="view_tasks.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
