<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $betyolo_bet->getId() ?></td>
    </tr>
    <tr>
      <th>Creator:</th>
      <td><?php echo $betyolo_bet->getCreatorId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $betyolo_bet->getDescription() ?></td>
    </tr>
    <tr>
      <th>Side a:</th>
      <td><?php echo $betyolo_bet->getSideAId() ?></td>
    </tr>
    <tr>
      <th>Side b:</th>
      <td><?php echo $betyolo_bet->getSideBId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $betyolo_bet->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $betyolo_bet->getStatus() ?></td>
    </tr>
    <tr>
      <th>Result:</th>
      <td><?php echo $betyolo_bet->getResult() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $betyolo_bet->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $betyolo_bet->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

&nbsp;
<a href="<?php echo url_for('bet/index') ?>">List</a>
