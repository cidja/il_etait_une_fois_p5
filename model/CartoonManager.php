<?php
//Tous les commentaires sont en anglais pour la compréhension pour le plus grand nombre
//All comments are in English for the understanding of as many people as possible.
//to support : mail: christian@linternaute-averti.fr

require_once("model/ManagerDb.php"); //calling the file for the connection to the database

class Model_CartoonManager extends Model_ManagerDb
{
    public function allCartoonInfos() // method for retrieving all the information from all the cartoons
    {
        $db =$this->dbConnect();
        $infos = $db->query('SELECT id, title, serie, scriptwriter, designer, isbn, genre, page_count, count_volume
        ,active,finish,comment,rate,cover,DATE_FORMAT(creation_date, "%d/%m/%Y à %Hh%imin%ss") AS creation_date_fr FROM cartoon');
        return $infos;
    }

    public function oneCartoonInfos($id) // method for retrieving all the information from one cartoon with $_GET["id"]
        {
            $db = $this->dbConnect();
            $oneCartoonInfos = $db->prepare('SELECT id, title, serie, scriptwriter, designer, isbn, genre, page_count, count_volume, volume_number, active, 
            finish,comment,rate,cover,DATE_FORMAT(creation_date, "%d/%m/%Y à %Hh%imin%ss") AS creation_date_fr FROM cartoon WHERE id=?');
            $oneCartoonInfos->execute(array($id));
            return $oneCartoonInfos;
        }

    public function cartoonsRead()
    {
        $db = $this->dbConnect();
        $cartoonsFinish = $db->query('SELECT id, title, serie, scriptwriter, designer, isbn, genre, page_count, count_volume
        ,active,finish,comment,rate,cover,DATE_FORMAT(creation_date, "%d/%m/%Y à %Hh%imin%ss") AS creation_date_fr FROM cartoon
        WHERE finish = 1');
        return $cartoonsFinish;
    }

    public function cartoonCurrent()
    {
        $db = $this->dbConnect();
        $cartoonCurrent = $db->query('SELECT id, title, serie, scriptwriter, designer, isbn, genre, page_count, count_volume
        ,active,finish,comment,rate,cover,DATE_FORMAT(creation_date, "%d/%m/%Y à %Hh%imin%ss") AS creation_date_fr FROM cartoon
        WHERE active = 1');
        return $cartoonCurrent;
    }
    public function countCartoons() // method that counts the number of cartoon
        {
            $db = $this->dbConnect();
            $countNovels = $db->query("SELECT COUNT(title) as nb FROM cartoon"); //source: https://openclassrooms.com/forum/sujet/pdo-compter-le-nombre-de-resultats-d-une-requete
            $result = $countNovels->fetch();
            $nbCartoons = $result['nb'];
            return $nbCartoons;
        }
        
        public function countPages() // method that counts the total number of pages in the library
        {
            $db = $this->dbConnect();
            $req = $db->query("SELECT SUM(page_count) as nb_pages FROM cartoon");
            $result = $req->fetch();
            $countPages = $result["nb_pages"];
            return $countPages;
        }

        public function avgPages() // method that counts the average number of pages in the library
        {
            $db = $this->dbConnect();
            $req = $db->query("SELECT AVG(page_count) as avg_nb_pages FROM cartoon");
            $result = $req->fetch();
            $avgPagesCartoon = $result["avg_nb_pages"];
            return $avgPagesCartoon;
        }
}