<?php
include "Product.php";
include "User.php";
include "Task.php";

echo "Task 1 output: <br>";
$test = new Product("test","test",100);

echo "Name: " . $test->getName() . "<br>";
echo "Category: " . $test->getCategory() . "<br>";
echo "Price: " . $test->getPrice() . "<br>";

echo "<br>";

$test->setName("test2");
$test->setCategory("test2");
$test->setPrice(200);

echo "Name: " . $test->getName() . "<br>";
echo "Category: " . $test->getCategory() . "<br>";
echo "Price: " . $test->getPrice() . "<br>";

echo "Discount: " . $test->calculateDiscount(20) . "<br>";

echo "<br><br>";

echo "Task 2 output: <br>";

$userRegistrationSystem = new UserRegistrationSystem();


$userRegistrationSystem->register("test1","test@test.com","test");
$userRegistrationSystem->register("test2","test@test.com","test");
$userRegistrationSystem->register("test3","test@test2.com","test");
$userRegistrationSystem->register("test4","test@test4.com","test");
$userRegistrationSystem->register("test5","test@test2.com","test");



echo "<br><br>";

echo "Task3 output: <br>";

$taskManager = new TaskManager();

$taskManager->createTask("test","test", new DateTime( '26 Feb 2024' ));
$taskManager->createTask("test2","test2", new DateTime( '27 Feb 2024' ));
$taskManager->createTask("test3","test3", new DateTime( '28 Feb 2024' ));


$taskManager->displayTasks();

foreach($taskManager->getTasks() as $task)
{
    $task->setStatus("Completed");
}


$taskManager->displayTasks();

foreach($taskManager->getTasks() as $task)
{
    $taskManager->removeTask($task);
}

$taskManager->createTask("test4","test4", new DateTime( '28 Feb 2024' ));

$taskManager->displayTasks();
?>