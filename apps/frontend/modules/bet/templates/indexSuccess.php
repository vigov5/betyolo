<h1>Betyolo bets List</h1>

<table>
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
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($betyolo_bets as $betyolo_bet): ?>
    <tr>
      <td><a href="<?php echo url_for('bet/show?id='.$betyolo_bet->getId()) ?>"><?php echo $betyolo_bet->getId() ?></a></td>
      <td><?php echo $betyolo_bet->getCreatorId() ?></td>
      <td><?php echo $betyolo_bet->getDescription() ?></td>
      <td><?php echo $betyolo_bet->getSideAId() ?></td>
      <td><?php echo $betyolo_bet->getSideBId() ?></td>
      <td><?php echo $betyolo_bet->getCategoryId() ?></td>
      <td><?php echo $betyolo_bet->getStatus() ?></td>
      <td><?php echo $betyolo_bet->getResult() ?></td>
      <td><?php echo $betyolo_bet->getCreatedAt() ?></td>
      <td><?php echo $betyolo_bet->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
