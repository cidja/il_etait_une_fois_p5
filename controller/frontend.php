<?php
//Tous les commentaires sont en anglais pour la compréhension pour le plus grand nombre
//All comments are in English for the understanding of as many people as possible.
//to support : mail: christian@linternaute-averti.fr
require_once("model/NovelManager.php"); //call the class novelManager require_once (once only)

    trait toolsFrontend1
        {
            public static function listNovel()
            {
                $novelManager = new NovelManager(); // creation of the novelManager object
                $infos = $novelManager->allNovelInfos(); // call of the method allNovelInfos of the NovelManager object
                require("view/frontend/allNovelView.php"); // Displays a list of all novels 
            }
        }