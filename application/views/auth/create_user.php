<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">

                <?php if (isset($message)): ?>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 align="center" style="margin-top: 0px">Errors <i class="fa fa-warning"></i></h4>
                            <?php echo $message; ?>
                        </div>

                    </div>
                <?php endif; ?>

                <?php echo form_open("auth/create_user", array("class" => "form-horizontal", "role" => "form")); ?>
                <div class="box-body">
                    <div class="form-group">
                        <?php echo form_error('first_name', '<p class="validate-error">', '</p>'); ?>
                        <?php echo form_input($first_name); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('last_name', '<p class="validate-error">', '</p>'); ?>
                        <?php echo form_input($last_name); ?>
                    </div>

                    <?php
                    if ($identity_column !== 'email') {
                        echo '<div class="form-group">';
                        echo form_error('identity', '<p class="validate-error">', '</p>');
                        echo form_input($identity);
                        echo '</div>';
                    }
                    ?>
                    <div class="form-group">
                        <?php echo form_error('email', '<p class="validate-error">', '</p>'); ?>
                        <?php echo form_input($email); ?>
                        <?php echo form_hidden('role', '2'); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_input($phone); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('password', '<p class="validate-error">', '</p>'); ?>
                        <?php echo form_input($password); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_error('password_confirm','<p class="validate-error">', '</p>'); ?>
                        <?php echo form_input($password_confirm); ?>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <a href="<?= base_url('user'); ?>" class="btn btn-warning">Cancel</a>
                        <?php echo form_submit('submit', lang('create_user_submit_btn'), array('class' => 'btn btn-info pull-right')); ?>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
