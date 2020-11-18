<section class="register-pets my-3 mx-3">
	<div class="container">
		<h4>Registrar nueva mascota</h4>
		<form class="mx-4" action="<?php echo site_url('Home/agregarMascota/'.$idU);?>" method="POST">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Nombre</span>
				</div>
				<input type="text" class="form-control" id="nameM" name="nameM" placeholder="Nombre de la mascota">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">Tipo de mascota</label>
				</div>
				<input type="text" class="form-control" id="tipoM" name="tipoM" placeholder="Tipo de la mascota">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Raza</span>
				</div>
				<input type="text" class="form-control" id="razaM" name="razaM" placeholder="Raza de la mascota" aria-label="Username" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Fecha de adopcion</span>
				</div>
				<input type="text" class="form-control" placeholder="Año-Mes-Dia Ej: 2020-09-05" id="date1" name="date1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Fecha de vacunacion</span>
				</div>
				<input type="text" class="form-control" placeholder="Año-Mes-Dia Ej: 2020-09-05" id="date2" name="date2">
			</div>
            <input type="hidden" name="idPersona" id="idPersona" value="<?php echo $idPersona ?>">
			<div class="d-flex justify-content-center">
				<button type="submit" class="btn btn-danger mx-auto">Añadir Mascota</button>
			</div>
		</form>
	</div>
</section>
