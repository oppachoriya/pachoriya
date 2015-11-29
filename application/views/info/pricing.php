<?php $length = 12 / count($pricing_info); ?>
<div class="container">
    <div class="row">
        <?php foreach ($pricing_info as $key => $value) { ?>
            <div class="col-md-<?php echo $length ?>">
                <div class="panel <?php echo ($value["isbest"]) ? "panel-primary" : "panel-default" ?> text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php echo $value["name"]; ?>
                            <?php echo ($value["isbest"]) ? "<span class=\"label label-success\">Best Value</span>" : "" ?>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><i class="fa fa-inr fa-2x"></i><strong
                                style="margin-left:7px; font-size: 32px"><?php echo $value["price"]; ?></strong> </span>
                        <br/>
                        <span class="period"><?php echo $value["period"]; ?></span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong><?php echo $value['user']; ?></strong></li>
                        <li class="list-group-item"><strong><?php echo $value['project']; ?></strong></li>
                        <li class="list-group-item"><?php echo $value['info_1']; ?></li>
                        <li class="list-group-item"><?php echo $value['info_2']; ?></li>
                        <li class="list-group-item"><?php echo $value['info_3']; ?></li>
                        <li class="list-group-item"><?php echo $value['info_4']; ?></li>
                        <li class="list-group-item"><a href="<?php echo $value['link']; ?>" class="btn btn-primary">Sign
                                Up!</a></li>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
