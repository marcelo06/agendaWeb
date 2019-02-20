<?php
/**
 *  Vista principal.
 */
?>
<div class="container login-container">
	<div class="row">
		<div class="col-md-6 login-form-1">
			<h3>Inicia sesión</h3>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Ingresa tu email" name="email"/>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Ingresa la contraseña" name="password"/>
				</div>
				<div class="form-group">
					<input type="submit" class="btnSubmit" value="Ingresar" />
				</div>
				<div class="form-group">
					<a href="#" class="ForgetPwd">Olvidó la contraseña?</a>
				</div>
			</form>
		</div>
		<div class="col-md-6 login-form-2">
			<h3>Regístrate</h3>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Ingresa tu email" value="" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Ingresa una contraseña" value="" />
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirma la contraseña" value="" />
				</div>
				<div class="form-group">
					<input type="submit" class="btnSubmit" value="Registar" />
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.login').click(function(){
			$('#signup-form').submit();
		});

		$('.signup').click(function(){

		})
	});
</script>