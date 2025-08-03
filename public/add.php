<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
   <link rel="stylesheet" href="../assets/form.css">
</head>
<body>
<Header>
    <h1> Mes ToDoLists<h1>
</Header>

 <form class="formContainer" action="" method="POST">
                <div class="newList">
                    <h2> Créer une nouvelle liste :</h2>
                    <input placeholder="Nommer votre liste" type="text" id="newList" name="newList" maxlength="30">
                </div>
               <div class="newTask"> 
                    <h2> Créer des nouvelles tâches :</h2>
                    <div class="taskInput">
                    <input placeholder="Nommer votre tâche" type="text" id="firstNewTask" name="firstNewTask" maxlength="30">
                    <select name="firstNewTask" id="firstNewTask">
                        <option value="priority" >> Priorité</option>
                        <option  value="urgent" class="priorityRed">urgent</span></option>
                        <option  value="normal" class="priorityBlue">normal</option>
                        <option value="cool" class="priorityGreen">cool</option>
                    </select>
                    </div>
                    <div  class="taskInput">
                    <input placeholder="Nommer votre tâche" type="text" id="secondNewTask" name="secondNewTask" maxlength="30">
                    <select name="secondNewTask" id="secondNewTask">
                        <option value="priority">> Priorité</option>
                        <option value="urgent" class="priorityRed">urgent</option>
                        <option value="normal" class="priorityBlue">normal</option>
                        <option value="cool" class="priorityGreen">cool</option>
                    </select>
                     </div>
                     <div  class="taskInput">
                    <input placeholder="Nommer votre tâche" type="text" id="thirdtNewTask" name="thirdNewTask" maxlength="30">
                    <select name="thirdNewTask" id="thirdNewTask">
                        <option value="priority">> Priorité</option>
                        <option value="urgent" class="priorityRed">urgent</option>
                        <option value="normal" class="priorityBlue">normal</option>
                        <option value="cool" class="priorityGreen">cool</option>
                    </select>
                    </div>
                    <div  class="taskInput">
                    <input placeholder="Nommer votre tâche" type="text" id="fourthNewTask" name="fourthNewTask" maxlength="30">
                    <select name="fourthNewTask" id="fourthNewTask">
                        <option value="priority">> Priorité</option>
                        <option value="urgent" class="priorityRed">urgent</option>
                        <option value="normal" class="priorityBlue">normal</option>
                        <option value="cool" class="priorityGreen"> cool</option>
                    </select>
                     </div>
              </div>
               <div class="submit">
                <input type="submit" value="+ Ajouter">
             </div>
            </form>

    
</body>
</html>