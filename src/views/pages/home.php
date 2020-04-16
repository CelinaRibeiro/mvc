<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>
<br/><br/>

<table border="1" width="50%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>EMAIL</th>
		<th>AÇÕES</th>
	</tr>
	
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?=$usuario['id']; ?></td>
		<td><?=$usuario['nome']; ?></td>
		<td><?=$usuario['email']; ?></td>
		<td>
			<a href="<?=$base;?>/usuario/<?=$usuario['id']; ?>/editar"><img src="<?=$base;?>/assets/images/document.png" width="20"></a>
			<a href="<?=$base;?>/usuario/<?=$usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
					<img src="<?=$base;?>/assets/images/trash.png" width="20"></a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php $render('footer'); ?>