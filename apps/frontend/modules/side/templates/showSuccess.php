<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $betyolo_side->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $betyolo_side->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $betyolo_side->getDescription() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $betyolo_side->getBetyoloCategory()->getName() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $betyolo_side->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $betyolo_side->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />
