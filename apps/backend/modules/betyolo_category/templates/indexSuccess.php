<?php use_helper('I18N', 'Date') ?>
<?php include_partial('betyolo_category/assets') ?>

<h1>Betyolo Category Management</h1>

<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Create at</th>
      <th>Update at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($betyolo_categorys as $bet): ?>
    <tr>
      <td><a href="<?php echo url_for('betyolo_category/edit?id='.$bet->getId()) ?>"><?php echo $bet->getId() ?></a></td>
      <td><?php echo $bet->getName() ?></td>
      <td><?php echo $bet->getDescription() ?></td>
      <td><?php echo $bet->getCreatedAt() ?></td>
      <td><?php echo $bet->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</br>
<?php echo $helper->linkToNew(array('params' => array(), 'class_suffix' => 'new', 'label' => 'New',)) ?>
