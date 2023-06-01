<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mudulo - 6</title>
</head>

<body>
  <?php

  use Post as GlobalPost;

  class Post
  {
    private int $id;
    private int $likes = 0;
    public array $comments = [];
    public string $author;

    // public function __construct($id)
    // {
    //   $this->id = $$id;
    // }

    public function aumentarLikes()
    {
      $this->likes++;
    }

    public function getId()
    {
      return $this->id;
    }

    public function setId($id)
    {
      $this->id = $id;

      return $this;
    }
  }

  $post1 = new Post(25);
  $post2 = new Post(10);
  $post3 = new Post(11);
  $post4 = new Post(55);

  echo "<br><hr><h3>Typed Properties </h3><br><br>";
  //tipagem 

  $a = $post1->$comments = ["Mizael", "Carol", "Douglas"];

  foreach ($a as $item) {
    echo $item . "<br>";
  }





  echo "<br><hr><h3>Definindo Métodos e Propriedades</h3><br><br>";

  echo $post3->aumentarLikes();
  echo $post4->aumentarLikes();

  // echo "Likes: " . $post3->likes . "<br>";
  // echo "Likes: " . $post4->likes . "<br>";



  echo "<br><hr><h3>Definindo Classes e Objetos</h3><br><br>";

  // $post1->likes = 3;
  // $post2->likes = 10;


  // echo "Likes: " . $post1->likes . "<br>";
  // echo "Likes: " . $post2->likes . "<br>";




  ?>



</body>

</html>