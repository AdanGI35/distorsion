<?php

class CategoryManager extends AbstractManager {
    

    public function getAllCategories(): array
    {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $categoriesDB = $query->fetchAll(PDO::FETCH_ASSOC);
        $categoriesTab = [];
        foreach ($categoriesDB as $categoryDB) {
            $category = new Category($categoryDB['category_name']);
            $category->setId($categoryDB['id']);
            $categoriesTab[] = $category;
        }
        return $categoriesTab;
    }

    public function getCategoryById(int $id): ?Category
    {
        $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
        $query->execute(['id' => $id]);
        $categoryDB = $query->fetch(PDO::FETCH_ASSOC);

        $category = new Category($categoryDB['category_name']);
        $category->setId($categoryDB['id']);
        return $category;
    }

    public function createCategory(string $categoryName): void
    {
        $query = $this->db->prepare('INSERT INTO categories (category_name) VALUES (:categoryName)');
        $success = $query->execute(['categoryName' => $categoryName]);
    }

}