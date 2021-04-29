<?php
    class Post {
        private $db;
        // подключаемся к БД
        function __construct(){
            $this->db = new Database();
        }

        // Получаем данные из БД
        function getPosts() {
            $this->db->query('SELECT * FROM post');
            return $this->db->resultSet();
        }
    }