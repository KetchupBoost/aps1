<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <?php

                        $nome = "Yago";
                        $sobrenome = "Réptil";
                        $endereco = "Av tracajá";
                        $n_casa = "3212";
                        $bairro = "Quebrada";
                        $cidade = "Pvh";
                        $estado = "RO";
                        $e_mail = "cascudo@gostoso.com.br";

                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Nome </span> = $nome</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Sobrenome </span> = $sobrenome</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Endereço </span> = $endereco</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Núm. Casa </span> = $n_casa</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Bairro </span> = $bairro</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Cidade </span> = $cidade</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Estado </span> = $estado</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> E-mail </span> = $e_mail</p>";

                    ?>
                </div>
                <div class="col-6">
                    <?php
                        $telefone = "123456789";
                        $nome_pais = "Edvaldo Crocodilo e Francivalda Macaca";
                        $data_nascimento = "12/12/12";
                        $data_atual = date("d/m/Y");
                        $estado_civil = "corno";

                        function idade($data_nascimentoVar) {

                            $data = new DateTime($data_nascimentoVar);
                            $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
                            return $resultado->format( '%Y anos' );

                        }

                        $idade_atual = idade($data_nascimento);

                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Estado </span> = $estado</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> E_mail </span> = $e_mail</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Telefone </span> = $telefone</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Nome dos Pais </span> = $nome_pais</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Data de Nascimento </span> = $data_nascimento</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Data Atual </span> = $data_atual</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Estado Civil </span> = $estado_civil</p>";
                        echo "<p class='text-white-50'> <span class='font-weight-bold'> Idade Atual </span> = $idade_atual</p>";
                    ?>
                </div>
            </div>
            <?php 
                $cadastro_ativo = "1234567";

                echo "<p class='text-white-50'> <span class='font-weight-bold'> Cadastro Ativo </span> = $cadastro_ativo</p>";
            ?>
        </div>
    </main>
</body>
</html>