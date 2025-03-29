<?php

$directory = isset($_GET['dir']) ? $_GET['dir'] : "Files";

function file_directory($dir) {
    $files = array_diff(scandir($dir), array('.', '..'));

    echo "<h2>Contents of $dir</h2>";
    echo "<hr />";
    echo "<ul>";
    foreach ($files as $file) {
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            echo "<li><a href='?dir=" .$filePath. "'>$file</a></li>";
        } else {
            echo "<li><a href='$filePath'>$file</a></li>";
        }
    }
    echo "</ul>";
}

    file_directory($directory);


?>