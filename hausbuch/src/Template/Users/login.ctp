<h1>ログイン</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>

<br>

<?= $this->Html->link(
        'Neuer Benutzer',
        '/users/add',
        array('class' => 'button', 'target' => '_blank')
); ?>

<?= $this->Form->end() ?>

