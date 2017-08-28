<h1>Generadores Nucleares - Turbinas</h1>

<p><?= $this->Html->link('Crear Turbina', ['action' => 'add'], array('class' => 'btn btn-success')) ?></p>

<table class="table">
    <tr>

        <th class='col-xs-2 col-sm-2 col-lg-2'>Id</th>

        <th class='col-xs-2 col-sm-2 col-lg-2'>Tipo</th>
		
		<th class='col-xs-2 col-sm-2 col-lg-2'>Active</th>

        <th class='col-xs-2 col-sm-2 col-lg-2'>Actions</th>

    </tr>

    <?php foreach ($turbinas as $turbina): ?>

    <tr>

        <td class='col-xs-2 col-sm-2 col-lg-2'><?= $this->Html->link($turbina->id, ['action' => 'view', $turbina->id], array('class' => 'btn btn-link')) ?></td>

        <td class='col-xs-2 col-sm-2 col-lg-2'>

            <?= $turbina->tipo ?>

        </td>
	
        <td class='col-xs-2 col-sm-2 col-lg-2'>

            <?php 
			
				if($turbina->active == 0) echo 'Apagada';
				else echo 'Encendida';
			
			?>

        </td>
		<td class='col-xs-2 col-sm-2 col-lg-2'>
			<span>
				<?= $this->Html->link('Modificar', ['action' => 'edit', $turbina->id], array('class' => 'btn btn-info')) ?>
			</span>
			<span>
				<?= $this->Form->postLink(
                "Eliminar",

                ['action' => 'delete', $turbina->id],
				
				array('class' => 'btn btn-danger'),

                ['confirm' => '* Desea eliminar la turbina seleccionada ?']
				)

				?>
			</span>
		</td>
		
    </tr>

    <?php endforeach; ?>
</table>