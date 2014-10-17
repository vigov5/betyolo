<h1>Deposits List</h1>
<table>
  <thead>
  </thead>
  <tbody>
    <?php foreach ($deposits as $deposit): ?>
    <tr>
      <td width="50%"><?php echo $deposit->getUser()->getName() . ' deposited ' . $deposit->getAmount() ?></td>
      <td width="25%"><a href="<?php echo url_for('transaction/confirm?id='.$deposit->getId().'&type='.Transaction::DEPOSIT) ?>">Confirm</a></td>
      <td width="25%"><a href="<?php echo url_for('transaction/cancel?id='.$deposit->getId().'&type='.Transaction::DEPOSIT) ?>">Cancel</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<h1>Withdraws List</h1>
<table>
  <thead>
  </thead>
  <tbody>
    <?php foreach ($withdraws as $withdraw): ?>
    <tr>
      <td width="50%"><?php echo $withdraw->getUser()->getName() . ' withdrawed ' . $withdraw->getAmount() ?></td>
      <td width="25%"><a href="<?php echo url_for('transaction/confirm?id='.$withdraw->getId().'&type='.Transaction::WITHDRAW) ?>">Confirm</a></td>
      <td width="25%"><a href="<?php echo url_for('transaction/cancel?id='.$withdraw->getId().'&type='.Transaction::WITHDRAW) ?>">Cancel</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('transaction/new') ?>">New</a>
