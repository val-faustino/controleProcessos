
<?php include 'header.php'; ?>           
        <div class="cardapio-list small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">
                <div class="cardapio-title small-12 columns no-padding">
                    <h3>Cardapio</h3>
                    <hr></hr>
                </div>

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

                        $sql = "SELECT DISTINCT categoria FROM pratos" ;
                        $result = $db_connect->query($sql);

                        if($result->num_rows >0){

                            while($row =$result->fetch_assoc()){ 
                                $categoria = $row['categoria'];?>
                                <div class="category-slider small-12 columns no-padding">
                                    <h4><?php echo $categoria ; ?></h4>

                                    <div class="slider-cardapio">
                                        <div class="slider-002 small-12 small-centered columns">
                                            <?php

                                                $sql2 = "SELECT * FROM pratos WHERE categoria = '$categoria'" ;
                                                $result2 = $db_connect->query($sql2);

                                                if($result2->num_rows >0){   
                                                    while($row2 =$result2->fetch_assoc()){ ?>
                                                          <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                                            <div class="cardapio-item">
                                                                <a href="prato.php?prato=<?php echo $row2['codigo']; ?>">
                                                                    
                                                                    <div class="item-image">
                                                                        <img src="img/cardapio/<?php echo $row2['codigo'] ;?>.jpg" alt="cogumelos"/>   
                                                                    </div>

                                                                    <div class="item-info">
                                                                        
                                                                    
                                                                        <div class="title"><?php echo $row2['nome']; ?></div>
                                                                    </div>

                                                                    <div class="gradient-filter">
                                                                    </div>
                                                                    
                                                                </a>
                                                            </div>
                                                        </div>


                                                   <?php }
                                                }

                                            ?>
                                        
                                        </div>
                                    </div>
                                </div>

                               
                        <?php  }

                        }else{
                            echo 'Não há pratos';
                        }
                     }
                ?>   

                

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