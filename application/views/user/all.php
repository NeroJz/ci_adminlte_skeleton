<div class="row">
    <?php if (isset($users)): ?>
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <table class="table" id="tbl_user">
                        <thead>
                        <tr>
                            <th width="20%">Username</th>
                            <th width="30%">Password</th>
                            <th width="10%">Role</th>
                            <th width="10%">Last Login</th>
                            <th width="50%">Actions</th>
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
                        <?php foreach ($users as $user): $obj = (object)$user ?>
                            <tr>
                                <td><?= $obj->username ?></td>
                                <td><?= $obj->password ?></td>
                                <td><?= $obj->role ?></td>
                                <td><?= $obj->last_login ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
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