<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aktionen') ?></li>
        <li><?= $this->Html->link(__('Liste aller Artikele'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Neuer Artikel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Liste aller Kategorien'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Neue Kategorie'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="tags form large-10 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Editieren Kategorie') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => 'Titel']);
            // echo $this->Form->control('items._ids', ['options' => $items]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrieren')) ?>
    <?= $this->Form->end() ?>
</div>
