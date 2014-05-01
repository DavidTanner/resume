<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 4/30/14
 * Time: 9:24 PM
 */

function create_collapse($parent, $entry, $in_collapse, $title, $body) {
    ?>
    <div>
        <div>
            <h4>
                <div data-toggle="buttons">
                    <label class="btn btn-primary" data-toggle="collapse" data-parent="#<?php echo $parent;?>" href="#<?php echo $entry;?>">
                        <input type="checkbox">
                        <?php echo $title;?>
                    </label>
                </div>
            </h4>
        </div>
        <div id="<?php echo $entry;?>" class="panel-collapse collapse <?php echo $in_collapse ? "in" : "";?>">
            <div class="panel-body">
                <?php echo $body;?>
            </div>
        </div>
    </div>

<?php
}