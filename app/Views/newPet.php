<section class="register-pets my-3 mx-3">
	<div class="container">
		<h4>Registrar nueva mascota</h4>
		<form class="mx-4">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Nombre</span>
				</div>
				<input type="text" class="form-control" placeholder="Nombre de la mascota">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">Seleccione tipo de mascota</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01">
					<option selected>...</option>
					<option>Perro</option>
					<option>Gato</option>
					<option>Ave</option>
					<option>Caballo</option>
					<option>Roedor</option>
				</select>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Raza</span>
				</div>
				<input type="text" class="form-control" placeholder="Raza de la mascota" aria-label="Username" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Fecha de adopcion</span>
				</div>
				<input type="text" class="datepicker adoption form-control" id="date1" readonly>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Fecha de vacunacion</span>
				</div>
				<input type="text" class="datepicker vaccine form-control" id="date2" readonly>
			</div>
			<div class="d-flex justify-content-center">
				<button type="submit" class="btn btn-danger mx-auto">Submit</button>
			</div>
		</form>
	</div>
</section>
