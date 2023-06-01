 <?php

  // class Calculadora
  // {
  //   public int $soma;
  //   public int $sub;
  //   public int $multply;
  //   public int $divide;

  //   public function add()
  //   {
  //     $this->soma = 0;
  //   }

  //   public function total()
  //   {
  //     echo $this->soma + $this->soma;
  //   }
  //   } 


  class Calculadora
  {
    private $valor = 0;

    public function add($n)
    {
      $this->valor = $this->valor + $n;
    }
    public function sub($n)
    {
      $this->valor = $this->valor - $n;
    }
    public function multiply($n)
    {
      $this->valor = $this->valor * $n;
    }
    public function divide($n)
    {
      $this->valor = $this->valor / $n;
    }
    public function total()
    {
      return $this->valor;
    }
  }
