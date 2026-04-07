<?php
/*
 * ÉNONCÉ :
 * Un enum est déjà présent, il faudra l'utiliser pour la propriété status de la classe Task.
 * Créez une classe Task avec les propriétés protected title, description et status (par défaut TODO).
 * Ajoutez une méthode markAsDone() qui change le status en DONE.
 * Ajoutez une méthode display() qui affiche les infos de la tâche.
 * Instanciez une tâche, affichez ses infos, puis marquez-la comme terminée et affichez à nouveau.
 * Note : Pour afficher le status, utilisez $this->status->value pour obtenir la valeur de l'enum.
*/

// Enum des status possibles
enum TaskStatus: string
{
    case TODO = "à faire";
    case DONE = "terminée";
}

class Task {
    protected string $title;
    protected string $description;
    protected TaskStatus $status;

    public function __construct(string $title, string $description, TaskStatus $status = TaskStatus::TODO)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    public function markAsDone(): void
    {
        $this->status = TaskStatus::DONE;
    }

    public function display(): void
    {
        echo "Title: " . $this->title . "\n";
        echo "Description: " . $this->description . "\n";
        echo "Status: " . $this->status->value . "\n";
    }
}

$task = new Task("Buy groceries", "Milk, Bread, Eggs");
$task->display();
$task->markAsDone();
$task->display();

