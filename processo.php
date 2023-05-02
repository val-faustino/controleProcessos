<?php include 'header.php'; ?>       

        <div class="product-page small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">
                <?php 
                     $cod_processo = $_GET['processo'];
                    $server = 'localhost';
                    $user = 'root';
                    $password = '';
                    $db_name = 'processo';
                    $port = '3306';
                    $db_connect = new mysqli($server,$user,$password,
                    $db_nome,$port);
                    mysqli_set_charset($db_connect,"utf8");
                    if ($db_connect->connect_error) {
                    echo 'Falha: ' . $db_connect->connect_error;
                    } else {
                        // echo 'Conexão feita com sucesso' . '<br><br>';
                    $sql = "SELECT * FROM processo where codigo = '$cod_processo'";
                    $result = $db_connect->query($sql);
                    if($result->num_rows >0){
                        while($row =$result->fetch_assoc()){ 
                                     $processso_tipo= $row['tipo'];
                                     $processo_descricao= $row['descricao']; 
                                     $processo_nota_fiscal= $row['nota_fiscal']; 
                                     $processo_andamento= $row['andamento']; 
                                                                                        
                                                             
                                    }
                                                           
                                }
                              }
                            ?>

              <?php  if( $processso_tipo != NULL){ ?>
                <div class="product-section">
                    <div class="product-info small-12 large-5 columns no-padding">
                        <h3><?php echo $processso_tipo ;?></h3>
                        <h4><?php echo $processo_descricao; ?></h4>
                        <p><?php echo $processo_nota_fiscal; ?></p>
                        <p><?php echo $processo_andamento; ?></p>
                        
                    </div>

                    <div class="product-picture small-12 large-7 columns no-padding">
                        <img src="img/cardapio/<?php echo $cod_processo; ?>.jpg" alt="Foto do prato:<?php echo $processso_tipo ;?> ">
                    </div>

                </div>

             <?php }else{
                echo 'Processo não encontrado!' . '<br>';
              } ?>   
               

                <div class="go-back small-12 columns no-padding">
                    <a href="cardapio.php"><< Voltar ao Cardápio</a>
                </div>

            </div>
        </div>
                                                                                       <?php include 'footer.php'; ?>                                                                                                                                                      <script src="js/vendor/jquery.js"></script>
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