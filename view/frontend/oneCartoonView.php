<?php 
//Tous les commentaires sont en anglais pour la compréhension pour le plus grand nombre
//All comments are in English for the understanding of as many people as possible.
//to support : mail: christian@linternaute-averti.fr


ob_start(); // Start of capture to put it in the variable at the end of the script 
foreach($oneCartoonInfos as $data){ // Let's go through the board
    $title = $data["title"]; 
    ?>
    <div class="cover">
        <img class="imgCover +" src="<?= $data["cover"];?>" alt="image de couverture de la bande dessinée" title="image de couverture de <?= $data["title"]; ?>">
    </div>
    <section class="infosNovel">
        <h3>Infos de la bande dessinée </h3>
        <div class="title">
            <div>
                <span>Titre :</span>
                <span><?= $data["title"]; ?></span>
            </div>
        </div>
        <div class="serie">
            <div>
                <span>Série :</span>
                <span><?= $data["serie"]; ?></span>
            </div>
        </div>
        <div class="volume_number">
            <div>
                <span>volume :</span>
                <span><?= $data["volume_number"]; ?></span>
            </div>
        </div>
        <div class="scriptwriter">
            <div>
                <span>scénario :</span>
                <span><?= $data["scriptwriter"]; ?></span>
            </div>
        </div>
        <div class="designer">
            <div>
                <span>Dessin :</span>
                <span><?= $data["designer"]; ?></span>
            </div>
        </div>
        <div class="genre">
            <div>
                <span>Genre : </span>
                <span><?= $data["genre"]; ?></span>
            </div>
        </div>
        <div class="pagesCount">
            <div>
                <span>Nombre de pages :</span>
                <span><?= $data["page_count"]; ?></span>
            </div>
        </div>
        <div class="isbn">
            <div>
                <span>ISBN :</span>
                <span>
                    <?php
                    if ($data["isbn"] == 0){
                        echo "non renseigné";
                    } else{
                        echo $data["isbn"];
                    } 
                    ?>
                </span>
            </div>
        </div>
        <div class="finish">
            <div>
                <span>Fini ? :</span>
                <span>
                    <?php 
                        if($data["finish"] == 0){
                            echo "pas fini";
                        }
                        else{
                            echo "fini";
                        } ?>
                </span>
            </div>
        </div>
        <div class="rate">
            <div>
                <span>Note :</span>
                <span><?= $data["rate"]; ?></span>
            </div>
        </div>
        <div class="comment">
            <div>
                <span>Commentaires :</span>
                <span><?=$data["comment"]; ?></span>
            </div>
        </div>
        <div class="creation_date">
            <div>
                <span>Date d'ajout :</span>
                <span><?= $data["creation_date_fr"]; ?></span>
            </div>
        </div>
    </section>
<?php
}


$content = ob_get_clean();
require("templateCartoon.php");
/*This code does 3 things:

    It defines the title of the page in $title. This will be integrated in the <title> tag in the template.

    It defines the content of the page in $content. It will be integrated in the <body> tag in the template.
    As this content is a bit big, we use a trick to put it in a variable. We call 
    the ob_start() function (line 3) which "memorizes" all the HTML output that follows, then, at the end, we retrieve 
    the content generated with ob_get_clean() (line 28) and put it in $content .

    Finally, it calls the template with a require. This one will retrieve the variables $title and $content that we just created... to display the page!

Translated with www.DeepL.com/Translator (free version)*/
?>