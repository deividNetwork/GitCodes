<?php

    /**
     * Created by PhpStorm.
     * User: DeividNetwork
     * Date: 21/08/2016
     * Time: 19:28
     */


    use src\CourseGit as Course;

    class Main {
        public function __construct() {
            $course = new Course();
            
            echo $course->getName();
            echo $course->getAboutMore();
        }
    }