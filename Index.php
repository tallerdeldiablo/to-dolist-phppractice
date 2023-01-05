<?php

// Create an array to store the to-do list

$tasks = array();

// Add some tasks to the list

$tasks[] = "Take out the trash";

$tasks[] = "Do the dishes";

$tasks[] = "Vacuum the living room";

$tasks[] = "Mow the lawn";

// Display the to-do list

echo "<h1>To-Do List</h1>";

echo "<ul>";

foreach ($tasks as $task) {

  echo "<li>$task</li>";

}

echo "</ul>";

?>

