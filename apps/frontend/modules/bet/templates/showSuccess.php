<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $betyolo_bet->getId() ?></td>
    </tr>
    <tr>
      <th>Creator:</th>
      <td><?php echo $betyolo_bet->getsfGuardUser()->getUserName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $betyolo_bet->getDescription() ?></td>
    </tr>
    <tr>
      <th>Side a:</th>
      <td><a href="<?php echo url_for('side/show?id=' . $betyolo_bet->getSideA()->getId() ) ?>" ><?php echo $betyolo_bet->getSideA()->getName() ?></a></td>
    </tr>
    <tr>
      <th>Side b:</th>
      <td><a href="<?php echo url_for('side/show?id=' . $betyolo_bet->getSideB()->getId() ) ?>" ><?php echo $betyolo_bet->getSideB()->getName() ?></a></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><a href="<?php echo url_for('category/show?id=' . $betyolo_bet->getBetyoloCategory()->getId() ) ?>" ><?php echo $betyolo_bet->getBetyoloCategory()->getName() ?></a></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo BetyoloBet::$statuses[$betyolo_bet->getStatus()] ?></td>
    </tr>
    <tr>
      <th>Result:</th>
      <td><?php echo BetyoloBet::$results[$betyolo_bet->getResult()] ?></td>
    </tr>
    <tr>
      <th>Start dt:</th>
      <td><?php echo $betyolo_bet->getStartDt() ?></td>
    </tr>
    <tr>
      <th>End dt:</th>
      <td><?php echo $betyolo_bet->getEndDt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

&nbsp;
<a href="<?php echo url_for('bet/index') ?>">List</a>
