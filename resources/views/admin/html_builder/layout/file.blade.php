<div class="form-group" id="<?php echo $schema['name']; ?>_parent" >

    <!-- 左侧 -->
    <label class="col-sm-2 control-label"><?php echo $schema['title'] ? $schema['title'] . ':' : ''; ?></label>
    <!-- 左侧 -->

    <!-- 右侧 -->
    <div class="col-sm-4 last_child_div">

        <input type="<?php echo $schema['type']; ?>"
               name="<?php echo $schema['name']; ?>"
               value="<?php echo $schema['default']; ?>"
               <?php if (empty($schema['rule'])) {
                    echo 'ignore="ignore"';
                } else {
                    echo 'datatype=' . $schema['rule'];
                }; ?>
               errormsg="<?php echo $schema['err_message']; ?>"
               <?php if($schema['read_only'] == true):?>
               readonly="readonly"
               <?php endif;?>
               <?php if($schema['disabled'] == true):?>
               disabled="disabled"
               <?php endif;?>
               class="form-control <?php echo $schema['class']; ?>"
        >

        <!-- 表单提示 -->
        <span class="help-block"><?php echo $schema['notice']; ?></span>
        <!-- 表单提示 -->

    </div>
    <!-- 右侧 -->

</div>