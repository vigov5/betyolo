<h1>Transactions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Type</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($transactions as $transaction): ?>
    <tr>
      <td><a href="<?php echo url_for('transaction/edit?id='.$transaction->getId()) ?>"><?php echo $transaction->getId() ?></a></td>
      <td><?php echo $transaction->getUserId() ?></td>
      <td><?php echo $transaction->getType() ?></td>
      <td><?php echo $transaction->getAmount() ?></td>
      <td><?php echo $transaction->getStatus() ?></td>
      <td><?php echo $transaction->getCreatedAt() ?></td>
      <td><?php echo $transaction->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('transaction/new') ?>">New</a>
