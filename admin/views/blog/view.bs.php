<div class="panel panel-info">
    <div class="panel-heading">
        <h5 class="panel-title">文章列表</h5>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>标题</th>
                <th>作者</th>
                <th>分类目录</th>
                <th>标签</th>
                <th>评论</th>
                <th>日期</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($blogs as $blog):?>
                <tr>
                    <th><?php echo $blog->title; ?></th>
                    <td><?php echo $blog->author_id; ?></td>
                    <td><?php echo $blog->category_id; ?></td>
                    <td><?php echo $blog->tags; ?></td>
                    <td><a href="#"><span class="badge" title="查看">2</span></a></td>
                    <td><?php echo date('Y-m-d H:i', $blog->create_time); ?></td>
                    <td>
                        <a href="/admin/blog/edit?id=<?php echo $blog->id;?>"><span class="glyphicon glyphicon-pencil" title="编辑"></span></a>
                        <a href="/admin/blog/recoup?id=<?php echo $blog->id?>"><span class="glyphicon glyphicon-trash" title="垃圾箱"></span></a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

        <nav class="pull-right">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span class="glyphicon glyphicon-backward"></span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span class="glyphicon glyphicon-forward"></span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>