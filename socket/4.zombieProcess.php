<?php
/**
 * Created by PhpStorm.
 * User: vaniot
 * Date: 18-3-26
 * Time: 上午11:29
 */
$pid = pcntl_fork();

if ($pid) {
    //父进程
    echo "This is parent process\n";
    sleep(30);
} elseif ($pid == 0) {
    //子进程
    echo "This is child process\n";
} else {
    die("fork failed\n");
}