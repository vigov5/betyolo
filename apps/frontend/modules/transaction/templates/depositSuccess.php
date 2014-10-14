<h1>New Desposit</h1>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('transaction/deposit2') ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('/') ?>">Cancel</a>
          <input type="submit" value="Deposit" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['amount']->renderLabel() ?></th>
        <td>
          <?php echo $form['amount']->renderError() ?>
          <?php echo $form['amount'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
