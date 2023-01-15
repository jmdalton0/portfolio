<?php

class Project {
    private $id;
    private $name;
    private $description;
    private $image;
    private $versions;

    function __construct($id, $name, $description, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->versions = array();
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_name($name) {
        $this->name = $name;
    }
    
    function set_description($description) {
        $this->description = $description;
    }

    function set_image($image) {
        $this->image = $image;
    }

    function get_id() {
        return $this->id;
    }

    function get_name() {
        return $this->name;
    }

    function get_description() {
        return $this->description;
    }

    function get_image() {
        return $this->image;
    }

    function get_versions() {
        return $this->versions;
    }

    function add_version($tech, $link) {
        array_push($this->versions, array($tech, $link));
    }
}