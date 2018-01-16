<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
-->

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Neuer Benutzer') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Benutzername']);
            echo $this->Form->control('password', ['label' => 'Passwort']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrieren')) ?>
    <?= $this->Form->button('Zurück', ['onclick' => 'history.back()', 'type' => 'button']) ?>
    <?= $this->Form->end() ?>
</div>
