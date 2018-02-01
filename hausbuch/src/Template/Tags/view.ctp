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
<div class="tags view large-10 medium-8 columns content">
    <h3><?= h($tag->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titel') ?></th>
            <td><?= h($tag->title) ?></td>
        </tr>
        <!--
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        -->
        <tr>
            <th scope="row"><?= __('Erstellungsdatum') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Änderungsdatum') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <!--
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($tag->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Buyed') ?></th>
                <th scope="col"><?= __('Remark') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->user_id) ?></td>
                <td><?= h($items->title) ?></td>
                <td><?= h($items->price) ?></td>
                <td><?= h($items->buyed) ?></td>
                <td><?= h($items->remark) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    -->
</div>
