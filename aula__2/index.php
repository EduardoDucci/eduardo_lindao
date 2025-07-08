<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="">

       <label for="numero__primo">Verifica se é número primo:</label>
       <input type="number" id="numero__primo" name="numero__primo" required>
       <button type="submit" name="verificar__primo">Verificar</button>

       <?php

       if($_SERVER['REQUEST_METHOD'] == 'POST'){
         echo '<br>';
          echo '<br>';
     
         if(isset($_POST['verificar__primo'])){
            $numero = $_POST['numero__primo'];
            
            $eh__primo = true;

            if($numero <=1){
                $eh__primo = false;
            }else{
                for ($i= 2; $i <= sqrt($numero); $i++){
                    if( $numero % $i ==0){

                        $eh__primo = false;
                        break;
                    };
                    
                    



                };
            };
            echo "O número $numero". ($eh__primo ? ' é Primo': ' Não é primo');
         };
       };
       
       
       ?>

    </form>

</body>
</html>