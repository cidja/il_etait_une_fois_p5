<?php
//Tous les commentaires sont en anglais pour la compréhension pour le plus grand nombre
//All comments are in English for the understanding of as many people as possible.
//to support : mail: christian@linternaute-averti.fr
require("model/NovelManager.php"); //call the class novelManager require_once (once only)

    trait ToolsFrontend{

            public static function listNovel()
            {
                $novelManager = new Model_NovelManager(); // creation of the novelManager object
                $infos = $novelManager->allNovelInfos(); // call of the method allNovelInfos of the NovelManager object
                require("view/frontend/allNovelView.php"); // Displays a list of all novels 
            }
            public static function oneNovelInfos($id)
            {
                $novelManager = new Model_NovelManager();
                $oneInfos = $novelManager->oneNovelInfos($id); // $oneInfo which is called in oneNovelView.php
                require("view/frontend/oneNovelView.php");
            }
            
            public static function novelRead()
            {
                $novelManager = new Model_NovelManager();
                $novelsRead = $novelManager->novelsRead(); // $result which is called in novelReadView.php
                require("view/frontend/novelReadView.php");
            }
            public static function novelCurrent()
            {
                $novelManager = new Model_NovelManager();
                $novelCurrent = $novelManager->novelCurrent();
                require("view/frontend/novelCurrentView.php");
            }
        }