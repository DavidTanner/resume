<?php
/**
 * Created by PhpStorm.
 * User: darth_000
 * Date: 4/30/14
 * Time: 9:24 PM
 */

function create_collapse($parent, $entry, $in_collapse, $title, $body) {
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#<?php echo $parent;?>" href="#<?php echo $entry;?>">
                    <?php echo $title;?>
                </a>
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