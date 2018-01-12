<h1>Login das Haushaltsbuch</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('name', ['label' => 'Benutzername']) ?>
<?= $this->Form->control('password', ['label' => 'Passwort']) ?>



<?= $this->Form->button('Login') ?>

<br>

<?= $this->Html->link(
        'Neuer Benutzer',
        '/users/add',
        array('class' => 'button'/*, 'target' => '_blank'*/)
); ?>

<?= $this->Form->end() ?>

