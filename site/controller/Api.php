<?php

require 'model/Product.php';
require 'model/Category.php';

/**
 * Api: Class responsible for 
 * get result of API requisitions. 
 */
class Api
{
    private $product;
    private $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }

    /**
     * actionRead(): returns all products 
     * in a json format
     */
    public function actionRead()
    {
        $productsArr = array();
        $products = $this->product->readProducts();

        if (empty($products)) {
            $this->callBack(404, 'No products founded.');
            die;
        }

        foreach ($products as $product) {
            extract($product);

            $productItem = [
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'category_id' => $category_id,
                'created' => $created,
                'modified' => $modified
            ];

            array_push($productsArr, $productItem);
        }

        $this->callBack(200, $productsArr);
    }

    /**
     * actionReadOne(): returns the product
     * required in a requisition and
     * in a json format.
     */
    public function actionReadOne(int $id)
    {
        $productItem = array();
        $this->product->id = $id;

        $product = $this->product->readOneProduct();

        if (empty($product)) {
            $this->callBack(404, 'product was not found.');
            die;
        }

        extract($product);

        $productItem = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'category_id' => $category_id,
            'created' => $created,
            'modified' => $modified
        ];

        $this->callBack(200, $productItem);
    }

    /**
     * actionSearch(): returns the search of
     * term required in a requisition and
     * in a json format.
     */
    public function actionSearch(string $term)
    {
        $term = htmlspecialchars(strip_tags($term));
        $arrayProducts = array();
        $products = $this->product->searchProducts($term);

        if (empty($products)) {
            $this->callBack(400, 'No one result founded.');
            die;
        }

        foreach ($products as $product) {
            extract($product);

            $arrayProduct = [
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'category' => $name,
                'created' => $created
            ];

            array_push($arrayProducts, $arrayProduct);
        }

        $this->callBack(200, $arrayProducts);
    }

    /**
     * actionCreate(): returns the result
     * of insertion of a product in database
     * in a json format.
     */
    public function actionCreate(stdClass $data)
    {
        if (!$this->product->validateData($data)) {
            $this->callBack(400, 'Data icomplete.');
            die;
        }

        $this->product->name = htmlspecialchars(strip_tags($data->name));
        $this->product->description = htmlspecialchars(strip_tags($data->description));
        $this->product->price = htmlspecialchars(strip_tags($data->price));
        $this->product->category_id = htmlspecialchars(strip_tags($data->category_id));
        $this->product->created = htmlspecialchars(strip_tags($data->created));

        if (!$this->product->createProduct()) {
            $this->callBack(503, 'Unable to create product.');
            die;
        }

        $this->callBack(201, 'Product was created.');
    }

    /**
     * actionUpdate(): returns the result
     * of update of a product in database
     * in a json format.
     */
    public function actionUpdate(stdClass $data)
    {
        if (!$this->product->validateData($data)) {
            $this->callBack(400, 'Data icomplete.');
            die;
        }

        $this->product->id = $data->id;

        if (empty($this->product->readOneProduct())) {
            $this->callBack(400, 'Product doesn\'t exists.');
            die;
        }

        $this->product->name = htmlspecialchars(strip_tags($data->name));
        $this->product->description = htmlspecialchars(strip_tags($data->description));
        $this->product->price = htmlspecialchars(strip_tags($data->price));
        $this->product->category_id = htmlspecialchars(strip_tags($data->category_id));
        $this->product->created = htmlspecialchars(strip_tags($data->created));

        if (!$this->product->updateProduct()) {
            $this->callBack(503, 'Unable to create product.');
            die;
        }

        $this->callBack(201, 'Product was udate.');
    }


    /**
     * actionUpdate(): returns the result
     * of deletion of a product in database
     * in a json format.
     */
    public function actionDelete(int $id)
    {
        if ($id <= 0) {
            $this->callBack(404, 'invalid Id!');
            die;
        }

        $this->product->id = $id;

        if (!$this->product->readOneProduct()) {
            $this->callBack(404, 'Product doesn\'t exists.');
            die;
        }

        if (!$this->product->deleteProduct()) {
            $this->callBack(503, 'unable delete Product.');
            die;
        }

        $this->callBack(200, 'Product was deleted.');
    }

    /**
     * actionReadCategories(): returns all categories 
     * in a json format
     */
    public function actionReadCategories()
    {
        $arrayCategories = [];
        $categories = $this->category->readCategories();

        if (empty($categories)) {
            $this->callBack(404, 'No one category founded.');
            die;
        }

        foreach ($categories as $category) {
            extract($category);

            $arrayCategory = [
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'created' => $created
            ];

            array_push($arrayCategories, $arrayCategory);
        }

        $this->callBack(200, $arrayCategories);
    }

    /**
     * callBack(): returns code and message/result
     * of a requisition in a json format.
     */
    private function callBack(int $code, $result)
    {
        http_response_code($code);

        if (!is_array($result)) {
            echo json_encode(
                array('message' => $result)
            );
        } else {
            echo json_encode($result);
        }
    }
}
