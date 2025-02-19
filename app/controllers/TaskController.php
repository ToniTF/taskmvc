<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Task;

class TaskController extends Controller {
    public function index(...$params) {
        $task = Task::all();
        $this->view("task_list", $task);
    }

    public function new(...$params) {
        if (isset($_POST["title"])) {
            // Lógica para crear una nueva tarea
            $task = new Task();
            $task->title = $_POST["title"];
            $task->description = $_POST["description"];
            $task->creation_date = $_POST["creation_date"];
            $task->save();

            // Redirigir a la lista de tareas después de guardar
            header("Location: /task/index");
            exit();
        } else {
            $this->view("new_task");
        }
    }
    public function edit(...$params) {
        if (isset($_POST["title"])) {
            // Lógica para editar una tarea
            $task = Task::find($params[0]);
            $task->title = $_POST["title"];
            $task->description = $_POST["description"];
            $task->creation_date = $_POST["creation_date"];
            $task->save();

            // Redirigir a la lista de tareas después de guardar
            header("Location: /task/index");
            exit();
        } else {
            $task = Task::find($params[0]);
            $this->view("edit_task", $task);
        }
    }

    // Método para eliminar una tarea existente
    public function delete($id) {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
            // Redirigir a la lista de tareas después de eliminar
            header("Location: /taskmvc/task/");
            exit();
        } else {
            echo "Tarea no encontrada";
        }
    }
}
?>