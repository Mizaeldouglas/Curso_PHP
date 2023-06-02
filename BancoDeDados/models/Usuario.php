<?php
class Usuario
{
  private $id;
  private $nome;
  private $email;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = trim($id);

    return $this;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($nome)
  {
    $this->nome = ucwords(trim($nome));

    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = strtolower(trim($email));

    return $this;
  }
}


interface UsuarioDAO
{
  public function add(Usuario $usuario);
  public function findAll();
  public function findByEmail($email);
  public function findById($id);
  public function update(Usuario $usuario);
  public function delete($id);
}
