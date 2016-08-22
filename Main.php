<?php

    /**
     * Created by PhpStorm.
     * User: deividNetwork
     * Date: 21/08/2016
     * Time: 19:28
     */

    use CourseGit as Course;

    class Main {
        public function __construct() {
            $course = new Course();

            $course = null; //ERRROR DAQUI ADIANTE
            
            echo $course->getName();
            echo $course->getAboutMore();
        }
    }