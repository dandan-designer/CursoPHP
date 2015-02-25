<?php
	$nome = $_GET["nome"];
	$email = $_GET["email"];
    $telefone = $_GET['telefone'];
    $mensagem = $_GET['mensagem'];

?>

<?php require_once "header.php"; ?>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Dados enviados com sucesso, abaixo seguem os dados que você enviou.</h4>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <strong>Nome:</strong> <?php echo $nome; ?>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <strong>Email:</strong> <?php echo $email; ?>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                               <strong>Telefone:</strong> <?php echo $telefone; ?>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <strong>Mensagem:</strong> <?php echo $mensagem; ?>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
	<?php require_once "footer.php"; ?>

</body>

</html>
