<?php use_helper('I18N') ?>
<div class="row clearfix">
    <div class="col-md-12 column">
        <?php foreach ($form->getFormFieldSchema() as $name => $formField): ?>
        <?php if ($formField->hasError()): ?>
        <div class="alert alert-danger"><?php echo $formField->getError(); ?></div>
        <?php endif; ?>
        <?php endforeach; ?>
        <form class="form-signin" role="form" action="<?php echo url_for('@sf_guard_signin') ?>" method="POST">
            <h2 class="form-signin-heading">Please signin</h2>
            <?php echo $form['username']->render(array('placeholder' => 'Username', 'class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')); ?><br>
            <?php echo $form['password']->render(array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')); ?>
            <?php echo $form['remember']->renderLabel(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $form['remember']->render(); ?>
            <?php echo $form->renderHiddenFields(); ?><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo __('Signin', null, 'sf_guard') ?></button>
        </form>
    </div>
</div>
