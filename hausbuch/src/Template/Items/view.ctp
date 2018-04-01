<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
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
<div class="items view large-10 medium-8 columns content">
    <div align="right"><b>Benutzername: <?= $this->Html->link($login_user['name'], ['controller' => 'Users', 'action' => 'view', $login_user['id']]) ?></b></div>
    <h3><?= h($item->title) ?></h3>
    <table class="vertical-table">
        <!--
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->name, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        -->
        <tr>
            <th scope="row"><?= __('Titel') ?></th>
            <td><?= h($item->title) ?></td>
        </tr>
        <!--
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        -->
        <tr>
            <th scope="row"><?= __('Preis') ?></th>
            <td><?= $this->Number->format($item->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('kaufdatum') ?></th>
            <td><?= h($item->buyed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Erstellungsdatum') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Änderungsdatum') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Anmerkung') ?></h4>
        <?= $this->Text->autoParagraph(h($item->remark)); ?>
    </div>
    <div class="related">
        <h4><?= __('Kategorie') ?></h4>
        <?php if (!empty($item->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--
                <th scope="col"><?= __('Id') ?></th>
                -->
                <th scope="col"><?= __('Titel') ?></th>
                <!--
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                -->
                <th scope="col" class="actions"><?= __('Aktionen') ?></th>
            </tr>
            <?php foreach ($item->tags as $tags): ?>
            <tr>
                <!--
                <td><?= h($tags->id) ?></td>
                -->
                <td><?= h($tags->title) ?></td>
                <!--
                <td><?= h($tags->created) ?></td>
                <td><?= h($tags->modified) ?></td>
                -->
                <td class="actions">
                    <?= $this->Html->link(__('Anzeigen'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Editieren'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
