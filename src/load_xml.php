<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 2/2/2015
 * Time: 1:16 AM
 */

$assignment_array = array();
$file_array = array();

$data_list = simplexml_load_file("../data/svn_list.xml");
$data_log = simplexml_load_file("../data/svn_log.xml");

foreach($data_list->list->entry as $file){
    $entire_path = $file->name;
    $revision = $file->commit['revision'];
    $size = $file->size;
    $author = $file->commit->author;
    $date = $file->commit->date;

    $splitted_path = explode("/", $entire_path);
    if(sizeof($splitted_path) == 1) {
//        Echo $splitted_path[0];
        $assignmment = new assignment($splitted_path[0], $revision, $date, $author);
        array_push($assignment_array, $assignmment);
    }
    $file_name = $splitted_path[sizeof($splitted_path) - 1];
    if(strpos($file_name, '.') !== FALSE){
        $aux_string = explode(".", $file_name);
        $extension = $aux_string[sizeof($aux_string) -1];
        if($extension == "py" || $extension == "java" || $extension == "cpp" || $extension == "json" || $extension == "php"){
            $file_object = new file($file_name, $size, $revision, $author, $date, $extension, $entire_path);
            array_push($file_array, $file_object);
        }
    }
}


foreach ($file_array as $file) { // insert the file data in the right project
    $name_array = explode("/",$file->entire_path);
    foreach($assignment_array as $assignmment){
        if($assignmment->name == $name_array[0]){ // the file belongs to this project
            array_push($assignmment->list_files, $file);
        }
    }
}

class assignment {

    var $name;
    var $revision;
    var $date;
    var $list_files;
    var $author;

    function __construct($name, $revision, $date, $author)
    {
        $this->name = $name;
        $this->revision = $revision;
        $this->date = $date;
        $this->list_files = array();
        $this->author = $author;
    }

}

class file {
    var $name;
    var $size;
    var $revision;
    var $author;
    var $date;
    var $extension;
    var $entire_path;

    function __construct($name, $size, $revision, $author, $date, $extension, $entire_path)
    {
        $this->name = $name;
        $this->size = $size;
        $this->revision = $revision;
        $this->author = $author;
        $this->date = $date;
        $this->extension = $extension;
        $this->entire_path = $entire_path;
    }
}
?>