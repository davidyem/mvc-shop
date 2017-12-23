<?php


/**
 * Контроллер CatalogController
 * Каталог товаров
 */
class CatalogController
{
    /**
     * Action для страницы "Каталог товаров"
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        // Список последних товаров
        $latestProducts = Product::getLatestProducts(12);
        // Подключаем вид
        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }
    /**
     * Action для страницы "Категория товаров"
     */
    public function actionCategory($categoryId, $page = 1)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        // Список товаров в категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = Product::getTotalProductsInCategory($categoryId);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        // Подключаем вид
        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

    public function actionSearch($categoryId, $page = 1)
    {
            $searchProducts = Product::getSearchItems($page = 1);
            // Общее количетсво товаров (необходимо для постраничной навигации)
            $total = Product::getTotalProductsInCategory($categoryId);
            // Создаем объект Pagination - постраничная навигация
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            // Подключаем вид
            require_once(ROOT . '/views/search_result/search.php');
            return true;

    }


}