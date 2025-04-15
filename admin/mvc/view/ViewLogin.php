    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="dist/img/graphic2.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <center>
                            <h3 style="text-align: center;">Andres Gonzalez</h3> <br>
                            <?php echo $message;?>
                            <form method="post" action="">
                                <input class="form-control" type="text" name="user" placeholder="Usuario" required>
                                <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                                <div class="form-button">
                                    <button id="submit" type="submit" name="login" value="login" class="ibtn">Ingresar</button> 
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>