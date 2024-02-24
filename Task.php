<?php

class Task
{
    private int $ID;

    private string $title;

    private string $description;

    private DateTime $endDate;

    private string $status;

    function getTitle() : string
    {
        return $this->title;
    }
    function setTitle(string $title) : void
    {
        $this->title = $title;
    }
    function getDescription() : string
    {
        return $this->description;
    }
    function setDescription(string $description) : void
    {
         $this->title = $description;
    }
    function getEndDate() : DateTime
    {
        return $this->endDate;
    }
    function setEndDate(DateTime $endDate) : void
    {
        $this->endDate = $endDate;
    }

    function getStatus() : string
    {
        return $this->status;
    }
    function setStatus(string $status) : void
    {
        $this->status = $status;
    }


    function getID() : int
    {
        return $this->ID;
    }

    function __construct(int $ID,string $title, string $description, DateTime $endDate,string $status)
    {
        $this->ID = $ID;
        $this->title = $title;
        $this->description = $description;
        $this->endDate = $endDate;
        $this->status = $status;
    }
}


class TaskManager
{
    private int $IDCount = 0;
    private array $tasks = [];
    function getTasks() :array
    {
        return $this->tasks;
    }
    function createTask(string $title, string $description, DateTime $endDate,string $status="In progress") : void
    {
        $this->IDCount++;
        $this->tasks[$this->IDCount] =  new Task($this->IDCount, $title,$description,$endDate,$status);
    }
    function removeTask(Task $task) : void
    {
        unset($this->tasks[$task->getID()]);
    }

    function displayTasks() : void
    {
        foreach ($this->tasks as $task)
        {
            echo "Task: {$task->getID()} <br>";
            echo "Title: {$task->getTitle()} <br>";
            echo "Description: {$task->getDescription()} <br>";
            echo "End Date: {$task->getEndDate()->format("Y-m-d H:i:s")}<br>";
            echo "Status: {$task->getStatus()} <br>";
            echo "<br>";
        }
    }
}

?>