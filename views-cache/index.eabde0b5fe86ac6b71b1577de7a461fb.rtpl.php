<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content">
    <div class="content-inside">
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="background-color: #5FB404;color: white" class="nav-link active" id="home-tab"
                        data-toggle="tab" role="tab" aria-controls="home" aria-selected="false"><b>Painel<b></a>
                </li>
            </ul>

            <div class="card-body color1">
                <div class="float-left">
                    <h3>
                        <center><span class="count">Chamados Pendentes</span></center>
                    </h3>
                    <br><center> <i class="fas fa-exclamation-triangle" aria-hidden="true"></i></center>
                </div>

            </div>
            <!--Widget End-->
            <!--Widget Start-->
            <div class="card-body color2">
                <div class="float-left">
                    <h3>
                        <h3>
                            <center><span class="count">Chamados em Andamento</span></center>
                        </h3>
                        <br><center> <i class="fas fa-hourglass-half" aria-hidden="true"></i></center>
                </div>

            </div>
            <!--Widget End-->
            <!--Widget Start-->
            <div class="card-body color3">
                <div class="float-left">
                    <h3>
                        <h3>
                            <center><span class="count">Chamados Finalizados</span></center>
                        </h3>
                        <br><center> <i class="fas fa-check-square" aria-hidden="true"></i></center>
                </div>

            </div>
            <!--Widget End-->
            <!--Widget Start-->
            <div class="card-body color4">
                <div class="float-left">
                    <h3>
                        <h3>
                            <center><span class="count">Usuários Cadastrados</span></center>
                        </h3>
                        <br><center> <i class="fas fa-users" aria-hidden="true"></i></center>
                        <?php if( totalUsers() == 0 ){ ?>

                         <center><p style="font-size: 20px;">Nenhum usuário</p></center>
                        
                        <?php }elseif( totalUsers() == 1 ){ ?>

                         <center><p style="font-size: 20px;"><?php echo totalUsers(); ?> Usuário</p></center>
                        
                        <?php }else{ ?>

                         <center><p style="font-size: 20px;"><?php echo totalUsers(); ?> Usuários</p></center>
                        
                        <?php } ?>

                </div>

            </div>
            <!--Widget End-->

            <hr class="my-4" />


        </div>
    </div>
</div>