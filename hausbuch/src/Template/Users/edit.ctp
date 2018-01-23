<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aktionen') ?></li>
        <li><?= $this->Html->link(__('Liste aller Artikele'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Neuer Artikel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste alle Kategorien'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Neue Kategorie'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="users form large-10 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editieren Benutzer') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Passwort');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrieren')) ?>
    <?= $this->Form->end() ?>
</div>
