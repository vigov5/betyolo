<h1>Transactions List</h1>
<table>
  <thead>
  </thead>
  <tbody>
    <?php foreach ($transactions as $transaction): ?>
    <tr>
      <td width="50%"><?php echo $transaction->getUser()->getName() . ' deposited ' . $transaction->getAmount() ?></td>
      <td width="25%"><a href="<?php echo url_for('transaction/confirm?id='.$transaction->getId()) ?>">Confirm</a></td>
      <td width="25%"><a href="<?php echo url_for('transaction/cancel?id='.$transaction->getId()) ?>">Cancel</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('transaction/new') ?>">New</a>
