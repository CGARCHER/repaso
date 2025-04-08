<?php
require_once("model/articulo.php");
require_once("repository/articleRepository.php");

class ArticuloController
{
    public function welcome()
    {
        require_once("view/header.php");
        require_once("view/home.php");
        require_once("view/footer.php");
    }


    public function showList()
    {
        $repository = new ArticleRepository();
        $articulos = $repository->getAll();
        require_once("view/header.php");
        require_once("view/showList.php");
        require_once("view/footer.php");
    }


    public function delete()
    {
        $repository = new ArticleRepository();
        $article = $repository->delete($_REQUEST["id"]);
        header("Location: " . BASE_URL . "/articulo/list");
    }


    public function showActualizar()
    {
        require_once("view/header.php");
        $repository = new ArticleRepository();
        $articulos = $repository->getAll();
        require_once("view/actualizarStock.php");
        require_once("view/footer.php");
    }


    public function update()
    {
        $repository = new ArticleRepository();
        $articulo = $repository->update($_REQUEST["stock"], $_REQUEST["id"]);
        header("Location: " . BASE_URL . "/articulo/list");
    }


    public function showImportar()
    {
        require_once("view/header.php");
        require_once("view/showImportar.php");
        require_once("view/footer.php");
    }


    public function importar()
    {
        $repository = new ArticleRepository();
        $articulos = explode("\n", $_REQUEST['import']);
        // trim elimina espacios delante y detrás, NO entre las palabras de la frase/línea.
        foreach ($articulos as $value) {
            $articulo = explode(",", $value);
            if ($repository->verify(trim($articulo[0]))) {
                echo "Ya existe, merluzo";
            } else {
                $repository->import(trim($articulo[0]), trim($articulo[1]), trim($articulo[2]), trim($articulo[3]));
            }
        }
        $this->showList();
    }
}
