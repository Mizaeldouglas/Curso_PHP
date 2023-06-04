<?php
require_once 'models/Usuario.php';

class UsuarioDaoMysql implements UsuarioDAO
{
  private $pdo;

  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }

  public function findByEmail($email)
  {
    $sql = $this->pdo->prepare("SELECT * from usuarios where email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $data = $sql->fetch();

      $usuario = new Usuario();
      $usuario->setId($data['id']);
      $usuario->setNome($data['nome']);
      $usuario->setEmail($data['email']);

      return $usuario;
    } else {
      return false;
    }
  }

  public function add(Usuario $usuario)
  {

    $sql = $this->pdo->prepare('INSERT INTO usuarios(nome,email) VALUES (:nome,:email)');
    $sql->bindValue(':nome', $usuario->getNome());
    $sql->bindValue(':email', $usuario->getEmail());
    $sql->execute();

    $usuario->setId($this->pdo->lastInsertId());
    return $usuario;
  }

  public function findAll()
  {
    $arr = [];

    $sql = $this->pdo->query("SELECT * FROM usuarios");
    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach ($data as $item) {
        $usuario = new Usuario();
        $usuario->setId($item['id']);
        $usuario->setNome($item['nome']);
        $usuario->setEmail($item['email']);

        $arr[] = $usuario;
      }
    }

    return $arr;
  }

  public function findById($id)
  {
    $sql = $this->pdo->prepare("SELECT * from usuarios where id =:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $data = $sql->fetch();

      $usuario = new Usuario();
      $usuario->setId($data['id']);
      $usuario->setNome($data['nome']);
      $usuario->setEmail($data['email']);

      return $usuario;
    } else {
      return false;
    }
  }

  public function update(Usuario $usuario)
  {
    $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(":nome", $usuario->getNome());
    $sql->bindValue(":email", $usuario->getEmail());
    $sql->bindValue(":id", $usuario->getId());
    $sql->execute();

    return true;
  }

  public function delete($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id =:id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }
}