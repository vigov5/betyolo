<h1>Betyolo sides List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Category</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($betyolo_sides as $side): ?>
    <tr>
      <td><a href="<?php echo url_for('betyolo_side/edit?id='.$side->getId()) ?>"><?php echo $side->getId() ?></a></td>
      <td><?php echo $side->getName(); ?></td>
      <td><?php echo $side->getDescription(); ?></td>
      <td><?php echo $side->getBetyoloCategory()->getName(); ?></a></td>
      <td><?php echo $side->getCreatedAt(); ?></td>
      <td><?php echo $side->getUpdatedAt(); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
