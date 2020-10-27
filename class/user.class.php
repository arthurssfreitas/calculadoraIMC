<?php
require_once '../util/connection.php';
class User
{
  private $pdo;

  public function __construct()
  {
    session_start();
    $this->pdo = Connection::getInstance();
  }
  public function createUser($user)
  {
    try {
      $this->verifyRegister($user['user']);
      $this->verifyPassword($user['pass'], $user['confirmPass']);
      $stmt = $this->pdo->prepare('INSERT INTO users (login,password) VALUES (:user,:pass)');
      $stmt->execute(array(
        ':user' => $user['user'],
        ':pass' => md5($user['pass'])
      ));
      return "Usuário cadastrado com sucesso!";
    } catch (\Exception  $e) {
      return $e->getMessage();
    }
  }

  private function verifyPassword($password, $confirmPassword)
  {
    if ($password !== $confirmPassword) {
      throw new Exception('As senhas são diferentes!');
    }
  }

  private function verifyRegister($reg)
  {
    $users = $this->getUsers();
    foreach ($users as $key => $user) {
      if ($user['login'] === $reg) {
        throw new Exception('Usuário já cadastrado');
      }
    }
  }

  public function getUsers()
  {
    $stmt = $this->pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getUserByLogin($login)
  {
    try {
      $stmt = $this->pdo->prepare('SELECT * FROM users WHERE login = (:user) ');
      $stmt->execute(array(':user' => $login));
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    } catch (\Exception  $e) {
      return $e->getMessage();
    }
  }

  public function login($user)
  {
    try {
      $userDatabase = $this->getUserByLogin($user['login']);
      if (($user['login'] === $userDatabase['login']) && ($user['pass'] === $userDatabase['password'])) {
        header("Location:dashboard.php");
        return $_SESSION['user_logged'] = $userDatabase;
      } else {
        throw new Exception("Usuário ou senha incorretos");
      }
    } catch (\Exception  $e) {
      return $e->getMessage();
    }
  }

  public function logout()
  {
    $_SESSION['user_logged'] = '';
    session_destroy();
    return header("Location:index.php");
  }

  public function setWeight($weight)
  {
    $user = $_SESSION['user_logged'];
    try {
      $stmt = $this->pdo->prepare('INSERT INTO user_weight (weight,fk_user) VALUES (:userWeight,:userId)');
      $stmt->execute(array(
        ':userWeight' => $weight,
        ':userId' => $user['id']
      ));
      return "Peso cadastrado com sucesso!";
    } catch (\Exception  $e) {
      return $e->getMessage();
    }
  }

  public function getAllWeight()
  {
    $user = $_SESSION['user_logged'];
    $stmt = $this->pdo->prepare('SELECT * FROM user_weight WHERE fk_user = (:id)');
    $stmt->execute(array(':id' => $user['id']));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
