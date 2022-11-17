<?php

namespace Lib\Manager;

require dirname(__DIR__, 2) . '/config/database.php';
abstract class AbstractManager
{
// la méthode connect retourne la connexion à la bdd, établie via un objet de la classe PDO
    private function connect(): \PDO {
        $db = new \PDO(
            "mysql:host=" . DB_INFOS['host'] . ";port=" . DB_INFOS['port'] . ";dbname=" . DB_INFOS['dbname'],
            DB_INFOS['username'],
            DB_INFOS['password']
        );
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES utf8");
        return $db;
    }

    private function executeQuery(string $query, array $params = []): \PDOStatement {
        $db = $this->connect();
        $stmt = $db->prepare($query);
        foreach ($params as $key => $param) $stmt->bindValue($key, $param);
        $stmt->execute();
        return $stmt;
    }
 // fonction pour transformer un nom de classe en nom de table
    // ex: App\Entity\Plant serait converti en article
    private function classToTable(string $class): string {
        $tmp = explode('\\', $class);
        return strtolower(end($tmp));
    }

    // méthodes générales pour le CRUD
    protected function findOne(string $class, array $filters): mixed {
        $query = 'SELECT * FROM ' . $this->classToTable($class) . ' WHERE ';
        foreach (array_keys($filters) as $filter) {
            $query .= $filter . " = :" . $filter;
            if ($filter != array_key_last($filters)) $query .= 'AND ';
        }
        $stmt = $this->executeQuery($query, $filters);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }
    protected function findMany(string $class, array $filters = [], array $order = [], int $limit = null, int $offset = null): mixed {
        $query = 'SELECT * FROM ' . $this->classToTable($class);
        if (!empty($filters)) {
            $query .= ' WHERE ';
            foreach (array_keys($filters) as $filter) {
                $query .= $filter . " = :" . $filter;
                if ($filter != array_key_last($filters)) $query .= 'AND ';
            }
        }
        if (!empty($order)) {
            $query .= ' ORDER BY ';
            foreach ($order as $key => $val) {
                $query .= $key . ' ' . $val;
                if ($key != array_key_last($order)) $query .= ', ';
            }
        }
        if (isset($limit)) {
            $query .= ' LIMIT ' . $limit;
            if (isset($offset)) {
                $query .= ' OFFSET ' . $offset;
            }
        }
        var_dump($query);
        $stmt = $this->executeQuery($query, $filters);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    // create
    protected function create(string $class, array $fields): \PDOStatement {
        $query = "INSERT INTO " . $this->classToTable($class) . " (";
        foreach (array_keys($fields) as $field) {
            $query .= $field;
            if ($field != array_key_last($fields)) $query .= ', ';
        }
        $query .= ') VALUES (';
        foreach (array_keys($fields) as $field) {
            $query .= ':' . $field;
            if ($field != array_key_last($fields)) $query .= ', ';
        }
        $query .= ')';
        return $this->executeQuery($query, $fields);
    }
}