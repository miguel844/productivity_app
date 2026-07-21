<?php

function getUserByEmail(PDO $pdo, string $email)
{
    try {
        $sql = "
            SELECT * FROM user WHERE email = :email
        ";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        return $stmt->fetch();
    } catch (PDOException $e) {
        die("Error " . $e->getMessage());
    }
}

function createUser(PDO $pdo, string $name, string $email, string $password): bool
{
    try {
        $sql = "
            INSERT INTO user(name, email, password) 
            VALUES (:name, :email, :password)
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' =>     $email,
            ':password'   => $password
        ]);

        return $stmt->rowCount() === 1;
    } catch (PDOException $e) {
        die("Error " . $e->getMessage());
    }
}
