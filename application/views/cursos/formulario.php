
<?= form_open('/cursos/recibirDatos') ?>

	<?PHP 
		$nombre = array(
			'name' => 'nombre',
			'placeholder' => 'Escribe Tu Nombre'
			);

		$videos = array(
			'name' => 'videos',
			'placeholder' => 'Cantidad Videos del Curso'
			);
	?>
	
	<?= form_label('Nombre: ','nombre') ?>
	<?= form_input($nombre) ?>
	<BR>

	<?= form_label('Cantidad de Videos: ','videos') ?>
	<?= form_input($videos) ?>
	<BR>
	<?= form_submit('','Subir Curso') ?>
	<?= form_close() ?>
</body>
</html>