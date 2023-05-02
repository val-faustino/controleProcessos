<?php include 'header.php'; ?>       

        <div class="welcome-gallery small-12 columns">



            <div class="photo-section small-12 columns">
                <img class="homepage-main-photo" src="img/main-photo.jpg" alt="slider imagem 1">
            </div>

            <div class="main-section-title small-10 columns">
                <div class="table">
                    <div class="table-cell">
                        <h1>Bem vindo ao Controle de Processos</h1> 
                        
                    </div>
                </div>
                
            </div>

            <div class="photo-gradient">
                
            </div>

        </div>


    

        <div class="about-us small-11 large-12 columns no-padding small-centered">

            <div class="global-page-container">
                <div id="about-us" class="about-us-title small-12 columns no-padding">
                <h3>Sobre Nós</h3>
                <hr></hr>
                </div>

                
                    <img src="img/fachada.jpg" alt="fachada do restaurante">
                

                <div class="about-us-text">
                <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo mi, 
                        condimentum ac convallis non, porta ac nibh. Morbi volutpat nibh lectus, quis 
                        convallis nunc rutrum vitae. Aenean volutpat aliquam elementum. Nunc consequat 
                        elit odio, vitae suscipit nunc pretium eu. Aenean vitae lacus auctor, condimentum 
                        ipsum at, suscipit erat. Donec dapibus ullamcorper bibendum. Vestibulum posuere 
                        augue in lectus dictum tincidunt. Pellentesque ornare eget enim sed dignissim. 
                        Sed nec nisi suscipit, feugiat risus ac, lacinia elit.
                    </p>
                    
                    <p>
                        Duis fermentum leo enim, eget dignissim dolor imperdiet at. Sed ut rutrum lacus. 
                        Aenean eleifend, urna eu dapibus imperdiet, turpis diam tristique mauris, nec 
                        luctus ante massa eu arcu. Duis tempor risus quis tellus posuere eleifend. 
                        Donec fringilla nulla ac odio sagittis tincidunt. Phasellus tempus id felis et 
                        finibus. Aenean felis ligula, varius nec varius at, feugiat nec felis. Morbi 
                        blandit sapien vel justo consequat laoreet.</p>
                </div>
            
            </div>

        </div>

    
        <div class="cardapio small-11 large-12 columns no-padding small-centered">
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                <h3>Processos</h3>
                <hr></hr>
                </div>
            </div>

            <div class="global-page-container">


                <div class="slider-cardapio">
                    <div class="slider-002 small-12 small-centered columns">

                    <?php
                        $server = 'localhost';
                        $user = 'root';
                        $password = '';
                        $db_name = 'restaurante';
                        $port = '3306';
                        $db_connect = new mysqli($server,$user,$password,
                        $db_name,$port);
                        mysqli_set_charset($db_connect,"utf8");
                        if ($db_connect->connect_error) {
                        echo 'Falha: ' . $db_connect->connect_error;
                        } else {
                        // echo 'Conexão feita com sucesso' . '<br><br>';

                        $sql = "SELECT * FROM pratos where destaque = 1";
                        $result = $db_connect->query($sql);

                        if($result->num_rows >0){

                            while($row =$result->fetch_assoc()){ ?>

                                    <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                        <div class="cardapio-item">
                                            <a href="prato.php?prato=<?php echo $row['codigo']; ?>">
                                                
                                                <div class="cardapio-item-image">
                                                    <img src="img/cardapio/<?php echo $row['codigo']; ?>.jpg" alt="camarao"/>   
                                                </div>

                                                <div class="item-info">
                                                    
                                                
                                                    <div class="title"><?php echo $row['codigo']; ?></div>
                                                </div>

                                                <div class="gradient-filter">
                                                </div>
                                                
                                            </a>
                                        </div>
                                    </div>

                               
                           <?php }

                        }else{
                            echo 'Não há destaques';
                        }
                     }
                    ?>   

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                            <div class="cardapio-item">
                                <a href="camarao-alho.html">
                                    
                                    <div class="cardapio-item-image">
                                        <img src="img/cardapio/<?php echo $row['codigo']; ?>.jpg" alt="camarao"/>   
                                    </div>

                                    <div class="item-info">
                                        
                                    
                                        <div class="title"><?php echo $row['nome']; ?></div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>
                                    
                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                            <div class="cardapio-item">
                                <a href="picanha-brasileira.html">
                                    
                                    <div class="cardapio-item-image">
                                        <img src="img/cardapio/picanha-brasileira.jpg" alt="barbecue"/>   
                                    </div>

                                    <div class="item-info">
                                        
                                    
                                        <div class="title">Picanha à Brasileira</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>
                                    
                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                            <div class="cardapio-item">
                                <a href="cheesecake-cereja.html">
                                    
                                    <div class="cardapio-item-image">
                                        <img src="img/cardapio/cheesecake-cereja.jpg" alt="cheesecake"/>   
                                    </div>

                                    <div class="item-info">
                                        
                                    
                                        <div class="title">Cheesecake de cereja</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>
                                    
                                </a>
                            </div>
                        </div>

                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                            <div class="cardapio-item">
                                <a href="salmao-legumes.html">
                                    
                                    <div class="cardapio-item-image">
                                        <img src="img/cardapio/salmao-legumes.jpg" alt="salmao"/>   
                                    </div>

                                    <div class="item-info">
                                        
                                    
                                        <div class="title">Salmão aos Legumes</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>
                                    
                                </a>
                            </div>
                        </div>

                       
                
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">

            <div class="global-page-container">
                <div class="contact-us-title small-12 columns no-padding">
                <h3>Faça a sua reserva</h3>
                <hr></hr>
                </div>
                

                <div class="reservation-form small-12 columns no-padding">

                    <form action="index.php#contact-us" method="post">

                        <div class="form-part1 small-12 large-8 xlarge-7 columns no-padding">
                    
                            <input type="text" name="nome" class="field" placeholder="Nome completo" required />
                            
                            <input type="email" name="email" class="field" placeholder="E-mail"required />
                            
                            <textarea type="text" name="mensagem" class="field" placeholder="Mensagem"></textarea>


                        </div>

                        <div class="form-part2 small-12 large-3 xlarge-3 end columns no-padding">
                            <input type="text" name="telefone" class="field" placeholder="Telefone"/>
                            
                            <input type="datetime-local" name="data" class="field" placeholder="Data e hora"/>

                            <input type="text" name="num_pessoas" class="field" placeholder="Número de pessoas"/>

                            <input type="submit" name="submit" value="Reservar"/>

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
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];
                        $telefone = $_POST['telefone'];
                        $data = $_POST['data'];
                        $num_pessaos = $_POST['num_pessoas'];
                        

                        $nome = clean_input($nome);
                        $email = clean_input($email);
                        $mensagem = clean_input($mensagem);
                        $telefone = clean_input($telefone);
                        $data = clean_input($data);
                        $num_pessaos = clean_input
                        ($num_pessaos);

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
                        ('valfaustino13@gmail.com', 'Retrô Bar');
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