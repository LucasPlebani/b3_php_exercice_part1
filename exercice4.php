<?php

class Article {

    public $title;
    public $content;

   
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

  
    public function getSummary($maxLength) {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '...';
        } else {
            return $this->content;
        }
    }
}

$article = new Article("Mon Premier Article", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum");

echo "<h1>" . $article->title . "</h1>";
echo "<p>" . $article->getSummary(30) . "</p>";

?>

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
