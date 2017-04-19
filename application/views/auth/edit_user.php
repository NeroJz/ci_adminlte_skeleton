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

                <?php echo form_open(uri_string()); ?>
                <div class="box-body">
                    <div class="form-group">
                        <?php echo form_input($first_name); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_input($last_name); ?>
                    </div>

                    <div class="form-group">
                        <?php echo form_input($phone); ?>
                    </div>

                    <?php if ($this->ion_auth->user()->row()->id == $user->id) : ?>
                        <div class="form-group">
                            <?php echo form_input($password); ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_input($password_confirm); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->ion_auth->is_admin()): ?>
                        <div class="form-group">
                            <div class="box box-primary box-solid">
                                <div class="box-header">
                                    <h3 class="box-title"><?php echo lang('edit_user_groups_heading'); ?></h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <?php foreach ($groups as $group): ?>
                                            <div class="checkbox checkbox-roles">
                                                <label>
                                                    <?php
                                                    $gID = $group['id'];
                                                    $checked = null;
                                                    $item = null;
                                                    foreach ($currentGroups as $grp) {
                                                        if ($gID == $grp->id) {
                                                            $checked = ' checked="checked"';
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                    <input type="checkbox" name="groups[]"
                                                           value="<?php echo $group['id']; ?>"<?php echo $checked; ?>>
                                                    <?php echo ucwords(htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8')); ?>
                                                </label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
                <div class="box-footer">
                    <?php echo form_hidden('id', $user->id); ?>
                    <?php echo form_hidden($csrf); ?>
                    <div class="form-group">
                        <a href="<?= base_url('user'); ?>" class="btn btn-warning">Cancel</a>
                        <?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class' => 'btn btn-info pull-right')); ?>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>