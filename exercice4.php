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


