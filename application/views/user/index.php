<div class="row">
    <div class="col-md-12" style="margin-bottom: 3px;">
        <a href="<?= base_url('auth/create_user'); ?>" class="btn btn-success btn-large">Create New System User</a>
    </div>
    <?php if (isset($users)): ?>
        <div class="col-sm-12">
            <div class="box">
                <div class="box-body">
                    <table class="table datatable" id="tbl_user">
                        <thead>
                        <tr>
                            <th width="10%">Username</th>
                            <th width="20%">Email</th>
                            <th width="10%">Role</th>
                            <th width="20%">Created On</th>
                            <th width="20%">Last Login</th>
                            <th width="30%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * The $user is supposed object when
                         * it returned from database.
                         * Ignore the casting if the $user
                         * is object
                         */
                        ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->username ?></td>
                                <td><?= $user->email; ?></td>
                                <td>
                                    <?php if ($roles = $this->ion_auth->get_users_groups($user->id)->result()): ?>
                                        <?php foreach ($roles as $role): ?>
                                            <p><?= $role->description; ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= date('d-m-Y H:i:s A', $user->created_on); ?>
                                </td>
                                <td>
                                    <?php if(!is_null($user->last_login)): ?>
                                        <?= date('d-m-Y H:i:s A', $user->last_login) ?>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href='<?= base_url("auth/edit_user/$user->id") ?>'
                                       class="btn btn-sm btn-primary">Edit
                                        <i class="fa fa-pencil"></i></a>
                                    <a href='<?= base_url("user/delete/$user->id"); ?>' class="btn btn-sm btn-danger">Delete
                                        <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>