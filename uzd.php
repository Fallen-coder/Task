<?php
class Task{
    public $task;

    public function __construct($task){
        $this->task=$task;
    }
    public function show(){
        echo "Task: $this->task \n";
    }
    public function __destruct(){
        echo "task deleted --- Task: $this->task\n";
    }
    public function edit($edit){
        $this->task =$edit;
    }
    public function add($add){
        $tasks[] =new Task($add);
    }
}
$tasks = [
    new Task("ghgf"),
    new Task("sdfgfd"),
    new Task("uiuii"),
];

function line(){
    echo "---------------------------\n\n";
}


function view(&$tasks){
    foreach($tasks as $task){
        $task->show();
    }
}
function add(&$tasks){
    $add = readline("add===>>>  ");
    $task->add($add);
}
function destroy(&$tasks){
    $id = readline("id===>>>  ");
    unset($tasks[$id-1]);
    $tasks = array_values($tasks);
}
function main(){
    echo "Task\n";
    echo "1. view all\n";
    echo "2. view one\n";
    echo "3. add\n";
    echo "4. destroy\n";
    echo "5. edit\n";
    echo "6. help\n";
    line();
}
main();
while (true){
    
    $input = readline("input===>>>  ");
    line();
    if ($input == "n"){
        exit;
    }
    switch ($input) {
        case '1':
            view($tasks);
            line();
            break;
        case '2':
            $id = readline("what task(id)===>>>  ");
            $tasks[$id-1]->show();
            line();
        break;
        case '3':
            add($tasks);
            line();
            break;
        case '4':
            destroy($tasks);
            line();
            break;
        case '5':
            $id = readline("id===>>>  ");
            $edit = readline("edit===>>>  ");
            $tasks[$id-1]->edit($edit);
            line();
        break;
        case 'help':
            main();
        break;
                                                      
        default:
            echo "no such function \n";
            line();
            break;
    }

}