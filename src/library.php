<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 4/30/14
 * Time: 9:24 PM
 */

function create_collapse_button($parent, $id, $title) {
    ?>
    <div data-toggle="buttons">
        <label class="btn btn-primary" data-toggle="collapse" data-parent="#<?php echo $parent;?>" href="#<?php echo $id;?>">
            <input type="checkbox">
            <?php echo $title;?>
        </label>
    </div>

<?php
}

function create_collapse_body($id, $body, $in_collapse) {
?>
    <div id="<?php echo $id;?>" class="panel-collapse collapse <?php echo $in_collapse ? "in" : "";?>">
        <hr>
        <div class="panel-body">
            <?php echo $body;?>
        </div>
    </div>
<?php
}