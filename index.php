<?php include 'header.php'; ?>       

        <div class="welcome-gallery small-12 columns">



            <div class="photo-section small-12 columns">
                <img class="homepage-main-photo" src="img/main-photo.jpg" alt="slider imagem 1">
            </div>

            <div class="main-section-title small-10 columns">
                <div class="table">
                    <div class="table-cell">
                        <h2>Controle de Processos</h2> 
                        
                    </div>
                </div>
                
            </div>

            <div class="photo-gradient">
                
            </div>

        </div>      
                <h2>Cadastro de processo</h2>
                <hr></hr>
                </div>
                

                <div class="reservation-form small-12 columns no-padding">

                    <form action="index.php#contact-us" method="post">

                        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                            <input type="text" tipo="tipo" class="field" placeholder="Tipo de Processo" required />
                            
                            <input type="text" name="nota fiscal" class="field" placeholder="Nota fiscal"required />
                            
                            <textarea type="text" name="descricao" class="field" placeholder="Descrição"></textarea>


                        </div>

                        <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
                            <input type="text" name="descricao" class="field" placeholder="Descricao"/>
                            
                            <input type="datetime-local" name="data" class="field" placeholder="Data e hora"/>

                            <input type="text" name="nota_fiscal" class="field" placeholder="Número de pessoas"/>

                            <input type="submit" name="submit" value="Cadastrar"/>

                        </div>


                    </form>
                    <?php
                     // Inserir Arquivos do PHPMailer
                        require 'phpmailer/Exception.php';
                        require 'phpmailer/PHPMailer.php';
                        require 'phpmailer/SMTP.php';
                        // Usar as classes sem o namespace
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;
                                     


                     function clean_input($input){
                        $input = trim($input);
                        $input = stripcslashes($input);
                        $input = htmlspecialchars($input);

                        return $input;
                     }

                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $codigo = $_POST['codigo'];
                        $tipo = $_POST['tipo'];
                        $nota_fiscal = $_POST['nota_fiscal'];
                        $descricao = $_POST['descricao'];
                        $data = $_POST['data'];
                        $andamento = $_POST['andamento'];
                        

                        $codigo = clean_input($codigo);
                        $tipo = clean_input($tipo);
                        $nota_fiscal = clean_input($nota_fiscal);
                        $descricao = clean_input($descricao);
                        $andamento = clean_input($andamento);
                        
                        $texto_msg= 'E-mail enviado do sistema de reservas do site' . '<br></br>'.
                        'Nome :' . $nome . '<br>'.
                        'E-mail :' . $email . '<br>'.
                        'Telefone :' . $telefone . '<br>'.
                        'Data :' . $data . '<br>' .
                        'Numero de pessoa :'. $num_pessaos . '<br>'.
                        'Mensagem :'. $mensagem . '<br>';

                         // Criação do Objeto da Classe PHPMailer 
                       
                        $mail = new PHPMailer(true);
                        $mail->CharSet="UTF-8";


                        try {
                        //Retire o comentário abaixo para   soltar detalhes do envio 
                        //$mail->SMTPDebug = 2;             
                        // Usar SMTP para o envio
                        $mail->isSMTP ();                                                    
   
                        // Detalhes do servidor (No exemplo é o Google)
                        $mail->Host = 'smtp.gmail.com';
                        // Permitir autenticação SMTP
                        $mail->SMTPAuth = 
                        true;                               
                         // Nome do usuário
                        $mail->Username = 
                        'valfaustino13@gmail.com';        
                         // Senha do E-mail         
                        $mail->Password = 
                        '121073axpv';                        
   
                        // Tipo de protocolo de segurança
                        $mail->SMTPSecure = 'tls';   
                        // Porta de conexão com    servidor                        
                        $mail->Port = 587;
                        // Garantir a autenticação com o    Google
                        $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                         )
                         );
                         // Remetente
                         $mail->setFrom($email, 
                        $nome);
                         // Destinatário
                         $mail->addAddress
                        ('valdemir.git@outlook.com', 'Retrô Bar');
                        // Conteúdo
                        // Define conteúdo como HTML
                        $mail->isHTML
                        (true);                            
  
                        // Assunto
                         $mail->Subject = 'Novo pedido de reserva';
                         $mail->Body    = $texto_msg;
                         $mail->AltBody = $texto_msg; 
                        'em texto 
                        puro para emails que não aceitam 
                        HTML';
                        // Enviar E-mail
                        $mail->send();
                        $confirmaicao = 'Mensagem enviada com sucesso';
                       } catch (Exception $e) {
                        $confirmaicao = 'A mensagem não pôde ser enviada ';
                   }        
                 }                                                 
                ?>
                                                 
                </div>

            </div>
        </div>

        <?php include 'footer.php'; ?>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/slick.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            function initMap() {
            var local = {lat: -22.971068, lng: -43.186851};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: local,
                styles: 
                [
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [
                        {
                            "visibility": "off"
                        }
                        ]
                    }
                ]
                
            });
            var marker = new google.maps.Marker({
                position: local,
                map: map
            });
            }
        </script>
        <script 
            async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlo2Bml6zmqP1_xtT3aLybZdWZNP7l8CM&callback=initMap">
        </script>
        <script>
            $(document).foundation();
        </script>
    </body>

</html>