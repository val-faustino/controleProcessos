    
   
    <?php

        $processos = array (

            array (
                'codigo' => '3',
                'tipo' => 'inex',
                'nota_fiscal' => 002,
                'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales justo eu mauris tincidunt, id dignissim magna elementum. Sed euismod efficitur tortor eu facilisis. Proin augue nunc, luctus hendrerit velit sit amet, iaculis porta velit. In vulputate tristique urna. Praesent tempus ipsum augue, sit amet tristique lacus semper cursus.',
                'andamento' => 'inicio',
                                                   

            )


        );

    ?>


    <?php

        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db_name = 'processo';
        $port = '3306';

        $db_connect = new mysqli($server,$user,$password,$db_name,$port);
        mysqli_set_charset($db_connect,"utf8");

        if ($db_connect->connect_error) {
            echo 'Falha: ' . $db_connect->connect_error;
        } else {
            echo 'Conexão feita com sucesso' . '<br><br>';

            foreach ($processos as $processo){
                $codigo = $processo['codigo'];
                $tipo = $processo['tipo'];
                $nota_fiscal = $processo['nota_fiscal'];
                $descricao = $processo['descricao'];
                $andamento = $processo['andamento'];
               
                $sql = "INSERT INTO processo(
                    codigo,tipo,nota_fiscal,descricao,andamento) VALUES ('$codigo','$tipo','$nota_fiscal',' $descricao','$andamento')";


                if ($db_connect->query($sql)){
                    echo $tipo . 'Inserido com sucesso'.'<br><br>';
                }else{
                    echo "Não foi possival inserir". $tipo .'<br>';
                }

            }
            
        }
    ?>   

 