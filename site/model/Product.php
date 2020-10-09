<?php

/**
 * Product: class responsible by
 * actions in a database products and
 * bussines rules.
 */
class Product
{

    private $table = 'products'; // table name
    private $stmt; // statement of DB
    private $db; // connection

    /** Attributes */
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;
    public $created;
    public $modified;

    // Get current connection of application
    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    /**
     * readProducts(): get all Products
     * in a database.
     */
    public function readProducts()
    {
        $this->stmt = $this->db->prepare("SELECT * FROM {$this->table} ORDER BY id");

        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            throw $e;
        }

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * readOneProduct(): get one Product
     * in a database.
     */
    public function readOneProduct()
    {
        $this->stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id ORDER BY id");
        $this->stmt->bindParam(':id', $this->id);

        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            throw $e;
        }

        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * createProduct(): Insert a Product
     * in a database.
     */
    public function createProduct()
    {
        $this->stmt = $this->db->prepare("INSERT INTO {$this->table} 
        SET name = :name, description = :description, 
        price = :price, category_id = :category_id, created = :created");

        $this->stmt->bindParam(':name', $this->name);
        $this->stmt->bindParam(':description', $this->description);
        $this->stmt->bindParam(':price', $this->price);
        $this->stmt->bindParam(':category_id', $this->category_id);
        $this->stmt->bindParam(':created', $this->created);

        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            throw $e;
        }

        return true;
    }

    /**
     * updateProduct(): Uppdate a Product
     * in a database.
     */
    public function updateProduct()
    {
        $this->stmt = $this->db->prepare("UPDATE {$this->table} 
        SET name = :name, description = :description, 
        price = :price, category_id = :category_id, created = :created
        WHERE id = :id");

        $this->stmt->bindParam(':id', $this->id);
        $this->stmt->bindParam(':name', $this->name);
        $this->stmt->bindParam(':description', $this->description);
        $this->stmt->bindParam(':price', $this->price);
        $this->stmt->bindParam(':category_id', $this->category_id);
        $this->stmt->bindParam(':created', $this->created);

        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            throw $e;
        }

        return true;
    }

    /**
     * deleteProduct(): Delete a Product
     * in a database.
     */
    public function deleteProduct()
    {
        $this->stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id;");
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->stmt->bindParam(':id', $this->id);

        try {
            $this->stmt->execute();
        } catch (\PDOExcepetion $e) {
            throw $e;
        }

        return true;
    }

    /**
     * searchProducts(): Search a Product
     * in a database that have the 
     * term passed for parameter.
     * 
     */
    public function searchProducts(string $term)
    {
        $this->stmt = $this->db->prepare("SELECT p.id as id,
        p.name as name, p.description as description, 
        p.price as price, c.name as category,
        p.created as created FROM {$this->table} p
        LEFT JOIN categories c ON (p.category_id = c.id)
        WHERE p.name LIKE :term OR p.description LIKE :term OR c.name LIKE :term");

        $term = '%' . $term . '%';
        $this->stmt->bindParam(':term', $term);

        try {
            $this->stmt->execute(); //code...
        } catch (\PDOException $e) {
            throw $e;
        }

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * validateData(): validate
     * the attributes verifying if the are empty.
     * 
     */
    public function validateData(stdClass $data)
    {
        if (
            empty($data->id)
            || empty($data->name)
            || empty($data->description)
            || empty($data->price)
            || empty($data->category_id)
            || empty($data->created)
        ) {
            return false;
        }

        return true;
    }

    // Magic Methods
    public function __get($propertyName)
    {
        var_dump($propertyName);
        die;
        return $this->$propertyName;
    }
}
