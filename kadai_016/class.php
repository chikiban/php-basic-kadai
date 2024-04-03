<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php
    class Food {
     private $name;
     private $price;

      public function show_price(string $name,int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      public function show_name() {
        echo $this->price . '<br>';
      }
    }

    $Food = new Food();

    $Food->show_price('potato',250);

    print_r($Food);

    echo '<br>';

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height(string $name,int $height,int $weight) {
        $this->name=$name;
        $this->height=$height;
        $this->weight=$weight;
      }
      public function show_weight() {
        echo $this->height . '<br>';
      }
    }

    $Animal = new Animal();

    $Animal->show_height('dog',60,5000);

    print_r($Animal);

    echo '<br>';

    $Food->show_name();
    $Animal->show_weight();
    ?>
  </p>
</body>
</html>