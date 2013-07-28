<?php

// Example of usage Composer's autoload classmap

require '../vendor/autoload.php';

$user = new User('Victor');
$task1 = new Task('Show how to use classmap in Composer.');
$task2 = new Task('Describe "file" key in Composer autoload property.', 'Need good example.');

$user->addTask($task1);
$user->addTask($task2);

foreach ($user->getTasks() as $task) {
    echo $task . '<br />';
}