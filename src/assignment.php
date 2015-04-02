<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 4/2/2015
 * Time: 2:36 AM
 */

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