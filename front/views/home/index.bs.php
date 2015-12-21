<div class="container-fluid">
    <?php foreach($blogs as $blog):?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><?php echo $blog->title;?></h3>
            </div>
            <div class="panel-body">
                <?php echo $blog->content; ?>
            </div>
            <div class="panel-footer">
                <ul class="list-inline">
                    <li class="list-group-item">2015年10月25日</li>
                    <li class="list-group-item">bee</li>
                    <li class="list-group-item"><?php echo $blog->tags;?></li>
                    <li class="list-group-item">评论</li>
                </ul>
            </div>
        </div>
    <?php endforeach;?>
</div>