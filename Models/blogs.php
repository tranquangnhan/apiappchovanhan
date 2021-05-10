<?php

namespace Models;
use Systems\Model_db;

class Blogs extends  Model_db
{
    private $Model_db;

    public function __construct()
    {
        $this -> Model_db = new Model_db();
    }
    function showAllBlog()
    {
        $SQL ="SELECT * FROM blogs";
        return $this->Model_db->result1(0,$SQL);
    }
   
}

?>