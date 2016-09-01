<?php
echo $this->Form->create('Arquivo', array('type' => 'file'));
?>
<?php
	echo $this->Form->file('uploadfile.', array('multiple'));
	echo $this->Form->button('Enviar');
?>