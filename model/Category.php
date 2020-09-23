<?php

/**
 * Category: class responsible by
 * actions in a database category and
 * bussines rules.
 */
class Category
{
    private $stmt; // statement of bd
    private $db; // conection of db
    private $table = 'categories'; // table name

    // Get current connection of application
    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    /**
     * readCategories(): get all Categories
     * in a database.
     */
    public function readCategories()
    {
        $this->stmt = $this->db->prepare("SELECT * FROM {$this->table} ORDER BY id");

        try {
            $this->stmt->execute();
        } catch (\PDOException $e) {
            throw $e;
        }

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
