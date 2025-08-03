<?php
  session_start();
  $errors = [];
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $list_name = $_POST["list_name"] ?? "";
    $tasks = $_POST["tasks"] ?? [];
    $priority = $_POST["priority"] ?? "";

    if(empty($list_name)) {
      $errors[] = "Nom de la liste obligatoire";
    }
    $filter = array_filter($tasks, function($task) {
      return !empty($task);
    });
    if(count($filter) < 2) {
      $errors[] = "2 taches minimum par liste";
    }elseif(count($filter) > 4) {
      $errors[] = "4 taches maximum par liste";
    }
    if(empty($priority) || $priority == "priority") {
      $errors[] = "Le type de priorité est obligatoire";
    }

    if(!isset($_SESSION["lists"])) {
      $_SESSION["lists"] = [];
    }

    if(empty($errors)) {

    }
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODOLIST</title>
  <link rel="stylesheet" href="../assets/form.css">
</head>
<body>

  <header>
    <h1>Mes ToDoLists</h1>
  </header>

  <form class="formContainer" action="" method="POST">
    <?php
      if(!empty($errors)) {
        foreach ($errors as $error) {
          echo $error;
        }
      }
    ?>
    <div class="newList">
      <h2>Créer une nouvelle liste :</h2>
      <input
        placeholder="Nommer votre liste"
        type="text"
        id="newList"
        name="list_name"
        maxlength="30"
      >
    </div>

    <div class="newTask">
      <h2>Créer des nouvelles tâches :</h2>

      <div class="taskInput">
        <input
          placeholder="Nommer votre tâche"
          type="text"
          id="firstNewTask"
          name="tasks[]"
          maxlength="30"
        >
      </div>

      <div class="taskInput">
        <input
          placeholder="Nommer votre tâche"
          type="text"
          id="secondNewTask"
          name="tasks[]"
          maxlength="30"
        >
      </div>

      <div class="taskInput">
        <input
          placeholder="Nommer votre tâche"
          type="text"
          id="thirdNewTask"
          name="tasks[]"
          maxlength="30"
        >
      </div>

      <div class="taskInput">
        <input
          placeholder="Nommer votre tâche"
          type="text"
          id="fourthNewTask"
          name="tasks[]"
          maxlength="30"
        >
      </div>
      <div class="taskInput">
        <select name="priority" id="fourthNewTask">
          <option value="priority">Priorité</option>
          <option value="urgent" class="priorityRed">urgent</option>
          <option value="normal" class="priorityBlue">normal</option>
        </select>
      </div>
    </div>

    <div class="submit">
      <input type="submit" value="+ Ajouter">
    </div>
  </form>
</body>
</html>
