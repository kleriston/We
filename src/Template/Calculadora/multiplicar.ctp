<?php echo $this->Form->create(); ?>

<h1> Valor1: <?php echo $this->Form->intput('valor1')?></h1>
<h1> Valor2: <?php echo $this->Form->intput('valor2')?></h1>

<h1> <?php echo $this->Form->input('Multiplicar', array('label' => FALSE, 'type' => 'submit'));?></h1>

<?php echo $this->Form->end(); ?>