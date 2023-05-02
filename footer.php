<footer id="footer" class="small-12 columns no-padding">
    <div class="global-page-container">
        <div class="small-11 small-centered large-12 columns 
footer-section">
            <div class="follow-us small-5 medium-3 small-offset-1 
medium-offset-0 columns">
                <h4 class="footer-section-title">Siga-nos</h4>
                <a href="http://www.facebook.com"><img src="img/
social-icons/facebook.svg" alt="facebook-icon"></a>
                <a href="http://www.twitter.com"><img src="img/
social-icons/twitter.svg" alt="facebook-icon"></a>
                <a href="http://www.instagram.com"><img src="img/
social-icons/instagram.svg" alt="facebook-icon"></a>
            </div>
            
            <div class="contato small-5 medium-3 small-offset-1 
medium-offset-0 columns">
                <h4 class="footer-section-title">Contato</h4>
                <p>
                    Rua Nossa senhora de Copacabana, 400<br>
                    Rio de Janeiro/RJ<br>
                    T. 2245-0977<br>
                    contato@restobar.com.br
                </p>
            </div>
            
            <div class="horario small-5 medium-3 small-offset-1 
medium-offset-0 columns">
                <h4 class="footer-section-title">Horários</h4>

                <?php  
                $dia_semana = date('w');
                $agora = strtotime('now');
                $inicio_dia = strtotime('today');
                $hora_atual = $agora - $inicio_dia;
                                                    
                                                               
                if ($dia_semana>=1 && $dia_semana <=6){
                    if($hora_atual < 41400){
                        $texto_horario = '(Fechado agora)';
                        $classe_horario = 'horario-fechado';
                    }else{
                        $texto_horario = '(Aberto agora)';
                        $classe_horario = 'horario-aberto';
                    }
                    }elseif($dia_semana == 7){

                    
                    if ($hora_atual > 7200 && $hora_atual < 41400){
                        $texto_horario = '(Fechado agora)';
                        $classe_horario = 'horario-fechado';
                    
                    }elseif($hora_atual > 64800){
                        $texto_horario = '(Fechado agora)';
                        $classe_horario = 'horario-fechado';
                       
                    }else{
                        $texto_horario = '(Aberto agora)';
                        $classe_horario = 'horario-aberto';

                    }

                  }

                ?>


                <p><span class="<?php echo $classe_horario;?>"><?php echo $texto_horario;?></span><br>
                Seg-Sex: 11h30 - 24h00<br>
                Sábado 11h30 - 02h00<br>
                Domingo 11h30 - 18h</p>
            </div>
            
            <div class="como-chegar small-5 medium-3 small-offset-1 
medium-offset-0 columns">
                <h4 class="footer-section-title">Como chegar</h4>
                <div id="map"></div>
            </div>
            
            <hr></hr>
            
            <div class="copyright small-12 columns">
                <?php $ano_atual = date("Y"); ?>
                <?php echo $ano_atual; ?> &copy; Todos os direitos reservados           
            </div>
        </div>
    
    </div>
</footer>