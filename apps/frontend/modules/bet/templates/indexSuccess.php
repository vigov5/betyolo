<h1>Betyolo bets List</h1>

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
      <td><a href="<?php echo url_for('bet/show?id='.$bet->getId()) ?>"><?php echo $bet->getId() ?></a></td>
      <td><?php echo $bet->getsfGuardUser()->getUserName() ?></td>
      <td><?php echo $bet->getDescription() ?></td>
      <td><a href="<?php echo url_for('side/show?id=' . $bet->getSideA()->getId() ) ?>" ><?php echo $bet->getSideA()->getName() ?></a></td>
      <td><a href="<?php echo url_for('side/show?id=' . $bet->getSideB()->getId() ) ?>" ><?php echo $bet->getSideB()->getName() ?></a></td>
      <td><a href="<?php echo url_for('category/show?id=' . $bet->getBetyoloCategory()->getId() ) ?>" ><?php echo $bet->getBetyoloCategory()->getName() ?></a></td>
      <td><?php echo BetyoloBet::$statuses[$bet->getStatus()] ?></td>
      <td><?php echo BetyoloBet::$results[$bet->getResult()] ?></td>
      <td><?php echo $bet->getStartDt() ?></td>
      <td><?php echo $bet->getEndDt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
