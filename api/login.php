<?php
 $nome = $_POST["txt_name"];
 $email = $_POST["txt_email"];
 $senha = $_POST["txt_senha"];
 $rua = $_POST["txt_rua"];
 $bairro = $_POST["txt_bairro"];
 $cidade = $_POST["txt_cidade"];
 $estado = $_POST["op_estado"];
 $cep = $_POST["tx_cep"];
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-
    MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <title>Seja bem vindo</title>
 </head>
 <body>
 <div class="container mt-5">
     <div class="row">
      <div class="col-sm-2"></div>
        <div class="col-sm-8 mt-5">
                <div><h1 class="text-success">Obrigado por cadastrar</h1></div>
                <form>
                    <div class="form-group">
                        <input type="text" value="<?php echo "".$nome?>" class="form-control" disabled> 
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="email" value="<?php echo "".$email?>" class="form-control" disabled> 
                        </div>
                        <div class="form-group col-6">
                            <input type="password" value="<?php echo "".$senha?>" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo "".$rua?>" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php echo "".$bairro?>" class="form-control" disabled>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="text" value="<?php echo "".$cidade?>" class="form-control" disabled>
                        </div>
                        <div class="form-group col-3">
                            <select name="op_estado" id="estado" class="form-control" disabled>
                                    <option <?php if ($estado == 'Minas Gerais') echo 'selected'; ?>>
                                        Minas Gerais
                                    </option>
                                    <option <?php if ($estado == 'São Paulo') echo 'selected'; ?>>
                                        São Paulo
                                    </option>
                                    <option <?php if ($estado == 'Rio de Janeiro') echo 'selected'; ?>>
                                        Rio de Janeiro
                                    </option>
                            </select>
                        </div>
                        <div class="form-group col-3">    
                            <input type="text" value="<?php echo "".$cep?>" class="form-control" disabled>
                        </div>
                    </div>
                </form>
        </div>
        <div class="col-sm">       
    </div>
</div> 
 <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>