<div class="center-all mg-t-77" >
    <div class="card login-card">
        <h3 style="text-align:center;color:#544f4f; padding-top: 40px;" >Autenticação necessária</h3>
        <form method="post">
            <?php
                if ($this->login_error) { ?>
                    <span class="login-error" style="text-align:center"><?=$this->login_error?></span>
            <?php } ?>
            <div class="center-all">
                <div class="form-group">
                    <input type="text" name="userdata[email_usu]" class="form-control" placeholder="Preencha seu usuário aqui"/>
                </div>
            </div>
            <div class="center-all">
                <div class="form-group">
                    <input type="password" name="userdata[senha_usu]" class="form-control" placeholder="Senha"/>
                </div>
            </div>
            <div></div>
            <div class="center-all mg-t-10" style="margin-bottom: 40px;">
                <input type="submit" class="button primary" value="Entrar"/>
            </div>
        </form>
    </div>
</div>