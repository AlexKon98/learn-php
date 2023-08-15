<?php

class ToDoListStorage {
  private $tasks;

  public function __construct($filename = '') {
    if (file_exists($filename)) {
      $fileContent = file_get_contents($filename);
      $this->tasks = json_decode($fileContent, true);
    }
  }

  public function createTask($taskName)
  {
    $this->tasks[] = ['title' => $taskName, 'done' => false, 'date' => new \DateTime()];
  }

  public function removeTask($taskNumber)
  {
    unset($this->tasks[$taskNumber]);
  }

  public function taskDone($taskNumber)
  {
    $this->tasks[$taskNumber]['done'] = true;
  }

  public function saveToJSON($filename)
  {
    $fileContent = json_encode($this->tasks);
    file_put_contents($filename, $fileContent);
  }

  public function printToDoList() {
    foreach ($this->tasks as $key => $task) {
      echo 'Task №' . $key . PHP_EOL;
      echo 'Title: ' . $task['title'] . PHP_EOL;
      echo 'Status: ' . $task['done'] ? 'done' . PHP_EOL : 'in progress' . PHP_EOL;
      echo 'Task\'s date: ' . $task['date']['date'] . PHP_EOL;
    }
  }
}

// $taskList = new ToDoListStorage();
// $taskList->createTask('Do the homework');
// $taskList->createTask('Do the house');
// $taskList->createTask('Walk with dog');
// $taskList->saveToJSON('php.json');

$anotherTaskList = new ToDoListStorage('php.json');
$anotherTaskList->taskDone(0);
$anotherTaskList->removeTask(1);
$anotherTaskList->printToDoList();
