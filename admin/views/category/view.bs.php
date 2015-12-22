<div class="panel panel-info">
    <div class="panel-heading">
        <h5 class="panel-title">分类目录</h5>
    </div>
    <div class="panel-body">
        <div class="col-lg-6 col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>文章总数</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($categorys as $cate):?>
                    <tr>
                        <th><?php echo $cate->name?></th>
                        <td><a href="#"><span class="badge">2</span></a></td>
                        <td><a href="/admin/category/index?action=recoup&id=<?php echo $cate->id?>"><span class="glyphicon glyphicon-trash" title="垃圾箱"></span></a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4">
            <form action="/admin/category/index?action=add" method="post">
                <div class="form-group">
                    <label for="name">分类名称</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="f_id">父分类</label>
                    <select class="form-control" id="f_id" name="f_id">
                        <option value="0">无</option>
                        <?php foreach($categorys as $cate):?>
                            <option value="<?php $cate->id?>"><?php echo $cate->name;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary pull-right">添加新分类</button>
            </form>
        </div>
    </div>
</div>