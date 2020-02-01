<?php 
  //$servidor = Ruta::ctrRutaServidor();
  $urlServidor;
 ?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo $url; ?>vistas/img/HD/facial.jpg);">
					<span class="login100-form-title-1">
						Iniciar Sesion
					</span>
				</div>

				
				<form class="login100-form validate-form" action="<?php echo $urlServidor; ?>login.php" method="post" target="blank">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Usario</span>
						<input class="input100" type="text" name="usuario" placeholder="Usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Recordar
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvide Contraseña
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Iniciar Sesion">
					</div>

				</form>
			</div>
		</div>
	</div>

	