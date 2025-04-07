<?php
require_once("model/articulo.php");
require_once("repository/articleRepository.php");

class ArticuloController{
    public function welcome(){
        require_once("view/header.php");
        require_once("view/home.php");
        require_once("view/footer.php");
    }

    public function showList() {
        $repository = new ArticleRepository();
        $articulos = $repository->getAll();
        require_once("view/header.php");
        require_once("view/showList.php");
        require_once("view/footer.php");
    }

}

?>