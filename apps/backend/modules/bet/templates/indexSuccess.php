<?php use_helper('I18N', 'Date') ?>
<?php include_partial('bet/assets') ?>

<h1>Betyolo Bet Management</h1>

<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Creator</th>
      <th>Description</th>
      <th>Side a</th>
      <th>Side b</th>
      <th>Category</th>
      <th>Status</th>
      <th>Result</th>
      <th>Start date</th>
      <th>End date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($betyolo_bets as $bet): ?>
    <tr>
      <td><a href="<?php echo url_for('bet/edit?id='.$bet->getId()) ?>"><?php echo $bet->getId() ?></a></td>
      <td><?php echo $bet->getsfGuardUser()->getUserName() ?></td>
      <td><?php echo $bet->getDescription() ?></td>
      <td><?php echo $bet->getSideA()->getName() ?></td>
      <td><?php echo $bet->getSideB()->getName() ?></td>
      <td><?php echo $bet->getBetyoloCategory()->getName() ?></td>
      <td><?php echo $bet->printStatus() ?></td>
      <td><?php echo $bet->printResult() ?></td>
      <td><?php echo $bet->getStartDt() ?></td>
      <td><?php echo $bet->getEndDt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php echo $helper->linkToNew(array('params' => array(), 'class_suffix' => 'new', 'label' => 'New',)) ?>
