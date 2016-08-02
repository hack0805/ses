<html>
  <body>

    <nav>...</nav>
    <article>
      <section>...</section>
    </article>

<div class="users index">
	<header>
	<h2><?php echo 'Users'; ?></h2></header>
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('add.ctp'); ?></th>
			<th class="actions"><?php echo 'Actions'; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<!-- <td><?php echo h($user['User']['index']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link('View'), array('action' => 'view', $user['User']['id']); ?>
			<?php echo $this->Html->link('Edit'), array('action' => 'edit', $user['User']['id']); ?>
			<?php echo $this->Form->postLink('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure you want to delete # %s?', $user['User']['id']); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	<?php echo $this->Paginator->pagination(array(
	    'ul' => 'pagination'
    )); ?>

</div>
<div class="actions">
<?php echo $this->Html->link('新規ユーザー登録', array('action' => 'add_first_time_registration_1'), array('class' => 'btn btn-primary')); ?>

</div>
  <footer>...</footer>
  </body>
</html>