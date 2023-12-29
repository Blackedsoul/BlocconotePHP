<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <!-- Includi Bootstrap da un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('background-image.jpg') center center fixed;
            background-size: cover;
            color: black;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        form {
            margin-bottom: 20px;
        }

        .task-list {
            list-style-type: none;
            padding: 0;
        }

        .task-item {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }

        .task-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">ToDo List</h1>

        <!-- Aggiungi una nuova attività -->
        <form method="post" action="aggiungitask.php">
            <div class="mb-3">
                <label for="task" class="form-label">Nuova Attività:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="task" required>
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </div>
            </div>
        </form>

        <!-- Visualizza le attività esistenti -->
        <div class="row">
            <?php
            session_start();
            if (isset($_SESSION['tasks'])) {
                foreach ($_SESSION['tasks'] as $taskId => $task) {
                    echo "<div class='col-md-4'><div class='task-item'><span>{$task}</span> <button class='btn delete-btn' onclick='removeTask({$taskId})'>Elimina</button></div></div>";
                }
            }
            ?>
        </div>
    </div>

    <!-- Includi Bootstrap JS da un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Funzione per rimuovere un'attività
        function removeTask(taskId) {
            window.location.href = 'rimuovitask.php?removeTask=' + taskId;
        }
    </script>
</body>
</html>
