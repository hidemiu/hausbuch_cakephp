<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */

echo $this->Html->css('css_test');

?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
<!--        <p><b>Benutzername: <?php echo $login_user['name']; ?></b></p> -->
        <li class="heading"><?= __('Aktionen') ?></li>
        <li><?= $this->Html->link(__('Neuer Artikel'), ['action' => 'add']) ?></li>
<!--        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li> -->
<!--        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('Liste aller Kategorien'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Neue Kategorie'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
        <!--
        <li><?= var_dump($login_user) ?></li>
        -->
    </ul>
</nav>
<div class="items index large-10 medium-8 columns content">
    <div align="right"><b>Benutzername: <?= $this->Html->link($login_user['name'], ['controller' => 'Users', 'action' => 'view', $login_user['id']]) ?></b></div>
    <h3><?= __('Artikel') ?></h3>
    <div class="test">
        <?php
            echo $this->Form->create("null", ['url' => ['action' => 'month_total']]);
            echo $this -> Form -> date ( "birthday",  [ "label" => "Date of birth",
                "dateFormat" => "DMY",
                "minYear" => date ( "Y" ) - 70,
                "maxYear" => date ( "Y" ) - 18 ]
            );
            echo $this->Form->end();
        ?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                -->
                <th scope="col"><?= $this->Paginator->sort('titel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kaufdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kategorie') ?></th>
<!--                <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
<!--                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Aktionen') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <?php if ($item->user_id == $login_user['id']): ?>
                    <tr>
                        <!--
                        <td><?= $this->Number->format($item->id) ?></td>
                        <td><?= $item->has('user') ? $this->Html->link($item->user->name, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
                        -->
                        <td><?= h($item->title) ?></td>
                        <td><?= $this->Number->format($item->price) ?></td>
                        <td><?= h($item->buyed) ?></td>
                        <?php foreach($item->tags as $tag): ?>
                            <td><?= h($tag->title) ?></td>
                        <?php endforeach; ?>
<!--                        <td><?= h($item->created) ?></td> -->
<!--                        <td><?= h($item->modified) ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $item->id]) ?>
                            <?= $this->Html->link(__('Editieren'), ['action' => 'edit', $item->id]) ?>
                            <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $item->id], ['confirm' => __('Sind Sie sicher, dass Sie löschen möchten "{0}"?', $item->title)]) ?>
                        </td>
                    </tr>
                <?php endif; ?>
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
