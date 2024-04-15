<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
        <?php
        // クラスを定義する
         class Food {
            // プロパティを定義する                        
             private $name;
             private $price;
             
              // メソッドを定義する
              public function set_price(string $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }

             // コンストラクタを定義する
                public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $Food = new Food('potato', '250');

         // インスタンス$foodの各プロパティの値を出力する
         print_r($Food);
         echo '<br>'; // 改行する
         ?>
       
        <?php 
        // クラスを定義する
         class Animal {
            // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;

            // メソッドを定義する
              public function set_height(string $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }
             
             // コンストラクタを定義する
             public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $Animal = new Animal('dog', '60', '5000');

         // インスタンス$Animalの各プロパティの値を出力する
         print_r($Animal);
         echo '<br>'; // 改行する


        //メソッドの実行
         $Price_Value = new Food('potato', 250);
         $Price_Value->Show_price();
         
         $Height_Value = new Animal('dog', '60', '5000');
         $Height_Value->show_height(60);
         ?>
     </p>
 