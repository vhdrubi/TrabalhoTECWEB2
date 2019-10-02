<!DOCTYPE html>
<html>
<head>
	<title>Trabalho para Prova TEC WEB 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="prova.css" />
</>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Idade</th>
			<th>Filhos</th>
		</tr>
	</thead>
	


<tbody>
	<?php	
		if (empty($_POST['tem_filhos']) || $_POST['tem_filhos'] == 'off'):?>
                     <tr>
                           <td> <?php echo $_POST['nome']; ?></td>
                           <td><?php echo $_POST['idade']; ?></td>
                           <td>nao tem filhos</td>
                      </tr>
                <?php else:
                $cont = 1; 
		foreach ($_POST['filhos_nome'] as $i => $filhoNome): ?>
			<tr>
				<?php if ($cont == 1): ?>
					<td><?php echo $_POST['nome']; ?></td>
					<td><?php echo $_POST['idade']; ?></td>
				<?php else: ?>
					<td></td>
					<td></td>
				<?php endif; ?>

				<td><?php echo $filhoNome.' - ' .$_POST['filhos_idade'][$i] . ' anos'; ?></td>
			</tr>
			<?php
			$cont++; 
		endforeach; 
              endif; ?>
	</tbody>
</table>
</body>
</html>