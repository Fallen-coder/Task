<?php
$tasks = ["ghgf","sdfgfd","uiuii"];

function view(&$tasks){
    $id=1;
    foreach($tasks as $task){
        echo $id.". ".$task."\n";
        $id+=1;
    }
}
function add(&$tasks){
    $add = readline("add===>>>  ")."\n";
    $tasks[] =$add;
}
function destroy(&$tasks){
    $id = readline("id===>>>  ")."\n";
    unset($tasks[$id-1]);
}
while (true){
    $input = readline("input===>>>  ")."\n";
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
                                    
        default:
            echo "no such function \n";
            break;
    }

}