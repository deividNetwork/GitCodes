<?php

    /**
     * Created by PhpStorm.
     * User: DeividNetwork
     * Date: 21/08/2016
     * Time: 17:19
     */
    class CourseGit {
        private $name;

        public function __construct() {
            $this->setName("git version 2.9.2.windows.1");
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function __toString() {
            // TODO: Implement __toString() method.
            return "Lear Git and GitHub";
        }
    }