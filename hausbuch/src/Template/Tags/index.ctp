<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aktionen') ?></li>
        <li><?= $this->Html->link(__('Liste aller Artikele'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Neuer Artikel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Neue Kategorie'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="tags index large-10 medium-8 columns content">
    <h3><?= __('Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                -->
                <th scope="col"><?= $this->Paginator->sort('titel') ?></th>
                <!--
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                -->
                <th scope="col" class="actions"><?= __('Aktionen') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tags as $tag): ?>
            <tr>
                <!--
                <td><?= $this->Number->format($tag->id) ?></td>
                -->
                <td><?= h($tag->title) ?></td>
                <!--
                <td><?= h($tag->created) ?></td>
                <td><?= h($tag->modified) ?></td>
                -->
                <td class="actions">
                    <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $tag->id]) ?>
                    <?= $this->Html->link(__('Editieren'), ['action' => 'edit', $tag->id]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $tag->id], ['confirm' => __('Sind Sie sicher, dass Sie löschen möchten "{0}"?', $tag->title)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Erste')) ?>
            <?= $this->Paginator->prev('< ' . __('Vorherige Seite')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Nächste') . ' >') ?>
            <?= $this->Paginator->last(__('letzte') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Seite {{page}} von {{pages}}, angezeigt {{current}}  von {{count}} total')]) ?></p>
    </div>
</div>
