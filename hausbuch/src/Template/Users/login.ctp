<h1>ログイン</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('Name') ?>
<?= $this->Form->control('Passwort') ?>
<?= $this->Form->button('Login') ?>

<?= $this->Form->button('Neuer Benutzer', ['action' => 'add']) ?>

<?= $this->Form->postButton('Delete Record', ['controller' => 'Users', 'action' => 'add', 5]) ?>

<?= $this->Form->button($this->Html->link('Neuer Benutzer', ['action' => 'add']), ['type' => 'button']); ?>

<?= $this->Html->link('Neuer Benutzer', ['action' => 'add']) ?>

<?= $this->Form->input?>


<?= $this->Form->end() ?>
<button type="button"><?= $this->Html->link('Neuer Benutzer', ['action' => 'add']) ?></button>


