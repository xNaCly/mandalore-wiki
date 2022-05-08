<?php
function format_title($file_path){
    // get *.php from file_path
    $file_name_with_ext = basename($file_path);
    // split file_name_wit_ext into 'file_name' and 'php'
    $file_name = explode(".", $file_name_with_ext)[0];

    if (strcmp($file_name, "index") == 0) {
        $file_name = "wiki";
    } else if (strcasecmp($file_name, "notfound") == 0){
        $file_name = "404";
    } 
    
    // convert filename to titlecase: 'file_name' -> 'File_name'
    $page_name = ucwords($file_name);
    return $page_name;
}
?>
