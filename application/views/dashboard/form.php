<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Push Notification Message</h3>
            </div>
            <form role="form" id="form" method="post" action="<?= base_url('dashboard/') . $action; ?>" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <input type="text" class="form-control" name="inputMessage" id="inputMessage"
                               placeholder="Message"
                               value="<?= isset($notification->message) ? $notification->message : '' ?>">
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="inputMessage">Notification Type</label>
                        <?php if (sizeof($notify_types) > 0): ?>
                            <select class="form-control" name="inputType" id="inputType">
                                <?php foreach ($notify_types as $type): ?>
                                    <option value="<?= $type->id ?>"
                                        <?php if (isset($notification->type_id) && $notification->type_id == $type->id) {
                                            echo "selected";
                                        } ?>>
                                        <?= $type->name ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        <?php endif; ?>
                    </div>
                    <hr/>
                    <div class="col-md-5" style="padding-left: 0px">
                        <div class="form-group">
                            <label for="inputMessage">Id</label>
                            <input type="text" class="form-control" name="inputAttId" id="inputAttId"
                                   value="<?= isset($notification->att_id) ? $notification->att_id : '' ?>"
                                   placeholder="id">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="inputMessage">Name</label>
                            <input type="text" class="form-control" name="inputAttName" id="inputAttName"
                                   value="<?= isset($notification->att_name) ? $notification->att_name : '' ?>"
                                   placeholder="name">
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="inputMessage">Url</label>
                        <input type="text" class="form-control" name="inputAttUrl" id="inputAttUrl"
                               value="<?= isset($notification->att_link) ? $notification->att_link : '' ?>"
                               placeholder="External URL">
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="box box-primary box-solid">
                            <div class="box-header">
                                <h3 class="box-title">Target Platform</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <?php foreach($platforms as $platform): ?>
                                    <div class="checkbox checkbox-platform">
                                        <label>
                                            <input type="radio" name="inputTarget" id="inputTarget" value="<?= $platform->id ?>"
                                                <?php if (isset($notification->platform_id) && $notification->platform_id == $platform->id) {
                                                    echo "checked";
                                                } ?>>
                                            <?= $platform->name; ?>
                                        </label>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="userfile">
                                        Users List
                                        <?php if(isset($notification->msisdn)): ?>
                                            (<a href="<?= site_url('uploads/') . $notification->msisdn; ?>"><?= $notification->msisdn; ?></a>)
                                            <input id="hiddenFileInput" name="hiddenFileInput" type="hidden" value="<?= $notification->msisdn ?>" />
                                        <?php endif; ?>
                                    </label>
                                    <input type="file" id="userfile" name="userfile">
                                    <p class="help-block">Please choose a list of MSISDN in .txt or .csv format</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>

                    <div class="form-group">
                        <div class="box box-primary box-solid">
                            <div class="box-header">
                                <h3 class="box-title">Push Date</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Date:</label>

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control datepicker pull-right" id="datepicker" name="datepicker" data-date-format="mm/dd/yyyy" />
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>Push Date:</label>

                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <span class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                        <input type="text" class="form-control input-small" id="timepicker" name="timepicker"
                                               value="<?= isset($notification->pushed_at) ? date_format(date_create($notification->pushed_at), 'h:i A') : date('h:i A'); ?>">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <?php if($action == 'update'): ?>
                                <div class="form-group">
                                    <label>Status:</label>

                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <span class="input-group-addon">
                                            <i class="fa fa-gear"></i>
                                        </span>
                                        <?php if (sizeof($statuses) > 0): ?>
                                            <select class="form-control" name="inputStatus" id="inputStatus">
                                                <?php foreach ($statuses as $status): ?>
                                                    <option value="<?= $status->id ?>"
                                                        <?php if (isset($notification->status_id) && $notification->status_id == $status->id) {
                                                            echo "selected";
                                                        } ?>>
                                                        <?= $status->name ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a class="btn btn btn-default">Cancel</a>
                    <?php if(isset($notification->id)): ?>
                        <input type="hidden" name="hiddenId" id="hiddenId" value="<?= $notification->id; ?>">
                    <?php endif; ?>
                    <button type="submit" id="btnSend" class="btn btn-info pull-right"><?= ucfirst($action); ?>&nbsp;Job</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var default_date = '<?= isset($notification->pushed_at) ? $notification->pushed_at : '' ?>';
</script>