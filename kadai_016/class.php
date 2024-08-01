<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>php kadai_016</title>
 </head>
 
 <body>
     <p>
     <?php
       // クラスを定義する
       class Food {
        // プロパティを定義する                        
        private $name;
        private $price;

        // コンストラクタを定義する
        function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
         //メソッドを定義する
         public function set_price(int $price) {
            $this->price = $price;
        }
        public function show_price() {
            echo $this->price . '<br>';

        }
        }

        // クラスを定義する
        class Animal {
        // プロパティを定義する                        
        private $name;
         private $hight;
         private $weight;

         // コンストラクタを定義する
         function __construct(string $name, int $hight, string $weight) {
             $this->name = $name;
             $this->hight = $hight;
             $this->weight = $weight;
            }   

         //メソッドを定義する
         public function set_weight(int $weight) {
         $this->weight = $weight;
         }
         public function show_weight() {
             echo $this->weight . '<br>';

         }
         }

     // インスタンス化する
     $food = new Food('トマト', 150);
     $animal = new Animal('ねこ', 50, 10);


      // インスタンス$userの各プロパティの値を出力する
     print_r($food);
     echo '<br>';
     print_r($animal);
     echo '<br>';

     // メソッドにアクセスして実行する
     $food->set_price(300);
     $food->show_price();
  
     $animal->set_weight(10);
     $animal->show_weight();
     ?>
     </p>
 </body>
 
 </html>  