<?php
$driver         = 'mysql';
$dbHost         = 'localhost';
$dbName         = 'testpdo';
$dbUsername     = 'root';
$dbUserPassword = '';

try {
    $pdo = new PDO("$driver:host=$dbHost;dbname=" . $dbName, $dbUsername, $dbUserPassword);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}

/*
* функция для сохранения данных в БД
* $name - имя пользователя
* $email - електронный адрес
 */

function addDB($name, $email)
{
    global $pdo;
    $sql = 'INSERT INTO mybdtest(name, email) VALUE(:name, :email)';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name, 'email' => $email]);
}

/*
функция для фильтрации данных полученных через POST запрос
$name- переменная для фильтрации данных
*/

function filter($name)
{
    return htmlspecialchars(strip_tags(trim($name)));
}

/*
функция для получения всех данных из БД
Возвращает результат запроса с данными
*/

function getAll()
{
    global $pdo;
    return $pdo->query("SELECT * FROM mybdtest");

}

/*
 * /
 * Функция для получения данных по id записи
 * $id -id записи в базе данных
 */
function get_date($id)
{
    global $pdo;
    return $pdo->query("select * from mybdtest where id ='$id'");
}

function update($name, $email, $id)
{
    global $pdo;
    $sql = "UPDATE mybdtest SET name = ?, email = ? WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $id]);
}

function delete($id)
{
    global $pdo;
    $sql = "DELETE FROM mybdtest WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$id]);
}