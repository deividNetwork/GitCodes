<?php

    /**
     * Created by PhpStorm.
     * User: DeividNetwork
     * Date: 21/08/2016
     * Time: 17:19
     */

    class CourseGit {
        private $name;
        private $aboutMore;

        public function __construct() {
            $this->setName("git version 2.9.2.windows.1");
            $this->setAboutMore("Learn more in: https://git-scm.com/documentation");
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setAboutMore($aboutMore) {
            $this->aboutMore = $aboutMore;
        }

        public function getAboutMore() {
            return $this->aboutMore;
        }

        public function __toString() {
            return "Lear Git and GitHub";
        }
    }