<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="content">
    <div class="content-inside">
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="background-color: #088A08;color: white" class="nav-link active" id="home-tab"
                        data-toggle="tab" role="tab" aria-controls="home" aria-selected="false"><b>Alterar Dados - Usuário <b><?php echo $user["person"]; ?></b></a>
                </li>
            </ul>
              <center><img src="res/user/img/logo.png"  alt=""></center>
            
         <?php if( $profileMsg != '' ){ ?>

            <div class="alert alert-success">
                <b><?php echo $profileMsg; ?></b>
            </div>
            <?php } ?>


            <?php if( $errorRegister != '' ){ ?>

            <div class="alert alert-danger">
               <b> <?php echo $errorRegister; ?></b>
            </div>
            <?php } ?>


            <form class="form-group" action="/admin/users/update/<?php echo $user["iduser"]; ?>" method="post"><br>


          <div class="form-group"><label class="small mb-"><b
                      style="font-size:20px;color: #585858">Nome</b></label>
            <input class="form-control py-1" value='<?php echo $user["person"]; ?>' type="text" name="person" />
          </div>


          

           <?php if( $user["inadmin"] == 1 ){ ?>

           <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Administrador</b></label>
            <select class="form-control py-1" name="inadmin" id="inadmin">
               <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
          </div>  

          <?php }elseif( $user["inadmin"] == 0 ){ ?>

          <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Administrador</b></label>
            <select class="form-control py-1" name="inadmin" id="inadmin">
              <option value="0">Não</option>
               <option value="1">Sim</option>
                
            </select>
          </div>  

          <?php } ?>



            <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Gênero</b></label>
            <select class="form-control py-1" name="genre" id="genre">
            <?php if( $user["genre"] == 1 ){ ?>

            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            <option value="3">Outros</option>
            <?php }elseif( $user["genre"] == 2 ){ ?>

            <option value="2">Feminino</option>
            <option value="1">Masculino</option>
            <option value="3">Outros</option>
            <?php }else{ ?>

            <option value="3">Outros</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            <?php } ?>


            </select>
          </div>

          <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Telefone</b></label>
            <input class="form-control py-1" value="<?php echo $user["phone"]; ?>" type="tel" name="phone" maxlength="13"
              pattern="[0-9]+$" required>
          </div>

          <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Endereço</b></label>
            <input class="form-control py-1" value="<?php echo $user["address"]; ?>" type="text" name="address" required>
          </div>

          <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Data de Nascimento</b></label>
            <input class="form-control py-1" value="<?php echo $user["born_date"]; ?>" type="date" name="born_date" required>
          </div>

          <div class="form-group"><label class="small mb-1"><b
                      style="font-size:20px;color: #585858">Cidade</b></label>
            <select class="form-control " name="city" id="city">
              <option value="<?php echo $user["city"]; ?>"><?php echo $user["city"]; ?></option>
              <option value="Brasília - DF">Brasília - DF</option>
              <option value=" Gama - DF">Gama - DF</option>
              <option value="Taguatinga - DF">Taguatinga - DF</option>
              <option value="Brazlândia - DF">Brazlândia - DF</option>
              <option value="Sobradinho - DF">Sobradinho - DF</option>
              <option value="Planaltina - DF">Planaltina - DF</option>
              <option value="Paranoá - DF">Paranoá - DF</option>
              <option value="Núcleo Bandeirante - DF">Núcleo Bandeirante - DF</option>
              <option value="Ceilândia - DF">Ceilândia - DF</option>
              <option value="Guará - DF">Guará - DF</option>
              <option value="Cruzeiro - DF">Cruzeiro - DF</option>
              <option value="Samambaia - DF"> Samambaia - DF</option>
              <option value="Santa Maria- DF">Santa Maria - DF</option>
              <option value="São Sebastião - DF">São Sebastião - DF</option>
              <option value="Recanto das Emas - DF">Recanto das Emas - DF</option>
              <option value="Lago Sul - DF">Lago Sul - DF</option>
              <option value="Riacho Fundo - DF">Riacho Fundo - DF</option>
              <option value="Lago Norte - DF">Lago Norte - DF</option>
              <option value="Candangolândia - DF">Candangolândia - DF</option>
              <option value="Águas Claras- DF">Águas Claras - DF</option>
              <option value="Riacho Fundo II - DF">Riacho Fundo II - DF</option>
              <option value="Sudoeste/Octogonal - DF">Sudoeste/Octogonal - DF</option>
              <option value="Varjão - DF">Varjão - DF</option>
              <option value="Park Way - DF">Park Way - DF</option>
              <option value="SCIA - DF">SCIA - DF</option>
              <option value="Sobradinho II - DF">Sobradinho II - DF</option>
              <option value="Jardim Botânico - DF">Jardim Botânico - DF</option>
              <option value="Itapoã - DF">Itapoã - DF</option>
              <option value="SIA - DF">SIA - DF</option>
              <option value="Vicente Pires - DF">Vicente Pires - DF</option>
              <option value="Fercal - DF">Fercal - DF</option>
              <option value="Sol Nascente/Pôr do Sol - DF">Sol Nascente/Pôr do Sol - DF</option>
              <option value="Arniqueira - DF">Arniqueira - DF</option>

            </select>
          </div>

          <input class="btn btn-success btn btn-block" type="submit" value="Alterar">


        </form>


            <hr class="my-4" />

            <a href="javascript:history.back()" class="btn btn-info btn-xs">voltar</a>



        </div>
    </div>
</div>



      