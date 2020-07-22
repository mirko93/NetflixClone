<?php

class Entity {

    private $con;
    private $sqlData;

    public function __construct($con, $sqlData)
    {
        $this->con = $con;
        
        if (is_array($sqlData)) {
            $this->sqlData = $sqlData;
        } else {
            $query = $this->con->prepare("SELECT * FROM entities WHERE id = :id");
            $query->binValue(":id", $sqlData);
            $query->execute();

            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function getId()
    {
        return $this->sqlData["id"];
    }

    public function getName()
    {
        return $this->sqlData["name"];
    }

    public function getThumbnail()
    {
        return $this->sqlData["thumbnail"];
    }

    public function getPreview()
    {
        return $this->sqlData["preview"];
    }
}