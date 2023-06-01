<?php



interface Forma
{
  public function getTipo();
  public function getArea();
}


class Quadrado implements Forma
{
  private $largura;
  private $altura;

  public function __construct($l, $a)
  {
    $this->largura = $l;
    $this->altura = $a;
  }

  public function getTipo()
  {
    return "quadrado";
  }
  public function getArea()
  {
    return $this->largura * $this->altura;
  }
}

class Circulo implements Forma
{
  private $raio;

  public function __construct($r)
  {
    $this->raio = $r;
  }

  public function getTipo()
  {
    return "Circulo";
  }
  public function getArea()
  {

    return pi() * ($this->raio * $this->raio);
  }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);


$objetos = [
  $quadrado,
  $circulo
];

foreach ($objetos as $objeto) {
  $tipo = $objeto->getTipo();
  $area = $objeto->getArea();

  echo "Area: " . $tipo . " : " . $area . "<br>";
}



// interface DataBase
// {
//   public function listarProdutos();
//   public function adicionarProduto();
// }


// class MySqlDB implements DataBase
// {
//   public function listarProdutos()
//   {
//   }
//   public function adicionarProduto()
//   {
//     echo "Adicionando com  Mysql";
//   }
//   public function alterarProduto()
//   {
//   }
// }

// class OracleDB implements DataBase
// {
//   public function listarProdutos()
//   {
//   }
//   public function adicionarProduto()
//   {
//     echo "Adicionando com  Oracle";
//   }
//   public function alterarProduto()
//   {
//   }
// }

// $db = new MySqlDB();

// $db->adicionarProduto();


// class Matematica
// {
//   public static string $nome = "Mizael";

//   public static function somar(int $x, $y)
//   {
//     return $x + $y;
//   }
// }

// echo Matematica::somar(20, 30) . "<br>";
// echo Matematica::$nome;






// echo "<br><br><br><br><br><br>";





// class Post
// {
//   private int $id;
//   private int $likes = 0;
//   private array $comments = [];
//   private string $author;

//   public function __construct($id)
//   {
//     $this->id = $id;
//   }



//   public function setAuhor($n)
//   {
//     if (strlen($n) >= 3) {
//       $this->author = $n;
//     }
//   }

//   public function getAuthor()
//   {
//     return $this->author ?? 'Visitante';
//   }

//   public function getLikes()
//   {
//     return $this->likes;
//   }


//   public function setLikes($likes)
//   {
//     $this->likes = $likes;

//     return $this;
//   }
// }

// $post1 = new Post(1);
// $post2 = new Post(1);
// $post1->setAuhor("Mizael");


// echo "Post 1: " . "Nome Do Autor: " . $post1->getAuthor() . "<br>";
// echo "Post 2: " . "Nome Do Autor: " . $post2->getAuthor() . "<br>";
