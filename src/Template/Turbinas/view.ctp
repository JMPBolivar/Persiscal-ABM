<h1>Generadores Nucleares - Turbinas</h1>
<?php
use \Cake\Utility\Inflector;

$assocMap = isset($associations['manyToOne']) ?
    array_flip(collection($associations['manyToOne'])->extract('foreignKey')->toArray()) :
    [];
?>
<?= $this->fetch('before_view'); ?>
<div class="<?= $this->CrudView->getCssClasses(); ?>">
	<h2>Modificar Turbina ID: <?= $turbina->id ?></h2>
    <div class="actions-wrapper">
		<?= $this->Html->link('Crear Turbina', ['action' => 'add'], array('class' => 'btn btn-success')) ?>
		<?= $this->Html->link('Modificar', ['action' => 'edit', $turbina->id], array('class' => 'btn btn-info')) ?>
		<?= $this->Form->postLink("Eliminar", ['action' => 'delete', $turbina->id],	array('class' => 'btn btn-danger'), ['confirm' => '* Desea eliminar la turbina seleccionada ?']	) ?>
	</div>
    <table class="table">
        <?php
        $this->CrudView->setContext(${$viewVar});
        foreach ($fields as $field => $options) {
            if (in_array($field, array($primaryKey))) {
                continue;
            }

            echo '<tr>';

            printf("<th>%s</th>", array_key_exists($field, $assocMap) ?
                Inflector::singularize(Inflector::humanize(Inflector::underscore($assocMap[$field]))) :
                (isset($options['title']) ? $options['title'] : Inflector::humanize($field)));
            printf("<td>%s</td>", $this->CrudView->process($field, ${$viewVar}, $options) ?: "&nbsp;");

            echo '</tr>';
        }
		$img=$turbina->tipo;
        $img.='.png';
		?>
		<tr>
			<td>
				<img src="<?= $this->request->webroot; ?>/webroot/img/turbinas/<?= $img; ?>" alt="<?= $img; ?>" />
			</td>
		</tr>
		
    </table>
    <?= $this->element('view/related'); ?>
</div>
