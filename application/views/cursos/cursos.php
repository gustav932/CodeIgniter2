<?php	
	if ($cursos) 
	{
		foreach ($cursos->result() as $curso) 
			{ 
?>
				<ul>
					<li><a href="<?= 'index/'.$curso->id_curso; ?>"><?= $curso->nombreCurso; ?></a></li>
				</ul>
<?php 		}
	} else echo "<p>Error en la aplicacion</p>";
?>
</body>
</html>