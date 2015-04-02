<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 2/2/2015
 * Time: 2:15 AM

 */

    class file {
        var $name;
        var $size;
        var $revision;
        var $author;
        var $date;
        var $extension;
        var $entire_path;
        var $file_name;

        function __construct($name, $size, $revision, $author, $date, $extension, $entire_path, $file_name)
        {
            $this->name = $name;
            $this->size = $size;
            $this->revision = $revision;
            $this->author = $author;
            $this->date = $date;
            $this->extension = $extension;
            $this->entire_path = $entire_path;
            $this->file_name = $file_name;
        }
    }
?>