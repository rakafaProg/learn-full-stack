<?php
    class Movie {
        private $name;
        private $director;
        private $src;

        function __construct($movieName, $directorName, $src) {
            $this->director = new Director($directorName);
            $this->name = $movieName;
            $this->src = $src;
        }
        
        function getName() {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }

        function getSrc() {
            return $this->src;
        }

        function setSrc($src) {
            $this->src = $src;
        }

        function getDirector() {
            return $this->director->getName();
        }

        function setDirector($name) {
            $this->director = new Director($name);
        }
    }

    class Director {
        private $name;

        function __construct($name) {
            $this->name = $name;
        }

        function getName() {
            return $this->name;
        }

        function setName($name) {
            $this->name = $name;
        }
    }
?>