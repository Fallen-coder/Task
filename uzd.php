<?php
$tasks = ["ghgf","sdfgfd","uiuii"];

function view(&$tasks){
    $id=1;
    foreach($tasks as $task){
        echo $id.". ".$task."\n";
        $id+=1;
    }
}
function add($tasks){
    $add = readline("add===>>>  ");
    $tasks[] =$add;
}
function destroy(&$tasks){
    $id = readline("id===>>>  ");
    unset($tasks[$id-1]);
    $tasks = array_values($tasks);
}
function update(&$tasks){
    $id = readline("id===>>>  ");
    $edit = readline("edit===>>>  ");
    $tasks[] = $edit;
}
while (true){
    $input = readline("input===>>>  ");
    if ($input == "n"){
        exit;
    }
    switch ($input) {
        case '1':
            view($tasks);
            break;
        case '2':
            add($tasks);
            break;
        case '3':
            destroy($tasks);
            break;
        case '4':
            update();
        break;
                                                      
        default:
            echo "no such function \n";
            break;
    }

}