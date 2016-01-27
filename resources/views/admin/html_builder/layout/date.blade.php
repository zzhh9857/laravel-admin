<div class="form-group" id="<?php echo $schema['name']; ?>_parent">

    <!-- 左侧 -->
    <label class="col-sm-2 control-label"><?php echo $schema['title'] ? $schema['title'] . ':' : ''; ?></label>
    <!-- 左侧 -->

    <!-- 右侧 -->
    <div class="col-sm-2 last_child_div">

        <input type="text"
               name="<?php echo $schema['name']; ?>"
               value="<?php echo $data->$schema['name'] == '' ? '' : $data->$schema['name'];; ?>"
               onclick="WdatePicker({<?php if (!empty($schema['default'])) {
                   echo "{$schema['default']}";
               } else {
                   echo "dateFmt:'yyyy-MM-dd HH:mm:ss'";
               } ?>})"
               <?php if (empty($schema['rule'])) {
                    echo 'ignore="ignore"';
                } else {
                    echo 'datatype=' . $schema['rule'];
                }; ?>
               errormsg="<?php echo $schema['err_message']; ?>"
               class="form-control <?php echo $schema['class']; ?>"
               onclick="laydate()">

        <!-- 表单提示 -->
        <span class="help-block"><?php echo $schema['notice']; ?></span>
        <!-- 表单提示 -->

        <!-- 当表单规则验证错误时，显示错误提示 -->
        <div class="alert alert-danger hide" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign"aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <span class="err_message"></span>
        </div>
        <!-- 当表单规则验证错误时，显示错误提示 -->

    </div>
    <!-- 右侧 -->

</div>