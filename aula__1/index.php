<?php

     $mensagem = "eduardo lindão";
     
     echo $mensagem;

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo '<br>';

     echo '<h1>eduardo lindão</h1>';

     $meu__nome = "Datake";
     $idade = "18";
     $tem_o_olhar_do_anjo_caido = true;

     $resultado_ano = 2025 - $idade;

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo '<br>';

     echo $resultado_ano;

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo '<br>';

     $num = 37.5;

     echo $num;

     $num2 = (int) $num;

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo '<br>';

     echo $num2;

     $nota = 5;

     if($nota >= 7){
          echo '<p>Passou na prova</p>';
     }else if($nota = 'pito'){
          echo '<p>como você fez isso?</p>';
     }

     for($i = 0; $i <= 5; $i++){

          //echo '<p> Contagem '. $i . '</p>';

          echo "<p> Contagem: $i </p>";
     };

     $frutas = array('laranja', 'banana', 'tomate','bergas');

     echo $frutas[3] ;

     function saudacao($nome){
          return "Olá $nome";
     };

        echo '<br>';
        echo '<br>';
     
     echo saudacao('enrico')

?>