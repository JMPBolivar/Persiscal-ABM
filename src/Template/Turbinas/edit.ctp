<h1>Generadores Nucleares - Turbinas</h1>
<h2>Modificar Turbina ID: <?= $turbina->id ?></h2>

<?php
	echo $this->Form->create($turbina);
	echo $this->Form->select(
    'tipo',
	['PWR'=>'PWR', 'ABR'=>'ABR', 'AGR'=>'AGR', 'FBR'=>'FBR', 'GCR'=>'GCR', 'HTGCR'=>'HTGCR', 'HWR'=>'HWR'],
    ['empty' => 'Elija un tipo de turbina']
	);
	echo $this->Form->control('active', ['type' => 'checkbox']);
	echo $this->Form->button(__('Guardar Turbina'), ['class' => 'btn btn-primary']);
	echo $this->Form->end();
?>