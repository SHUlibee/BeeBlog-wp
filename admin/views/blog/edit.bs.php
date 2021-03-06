<div class="panel panel-default">
    <div class="panel-heading"><h5 class="panel-title">撰写文章</h5></div>
    <div class="panel-body">
        <form id="addBlog" action="/admin/blog/edit" method="post">
            <div class="col-lg-10 col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题" value="<?php echo $blog->title?>">
                </div>
                <div class="form-group">
                    <textarea class="" id="myEditor" name="content" style="width: 100%; height: 300px"><?php echo $blog->content;?></textarea>
                </div>
            </div>
            <div class="col-lg-2 col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="标签，多标签以(,)隔开" value="<?php echo $blog->tags?>">
                </div>
                <div class="form-group">
                    <select class="form-control" id="category_id" name="category_id">
                        <option value="0">未分类</option>
                        <option value="1" selected>redis</option>
                        <option value="2">PHP</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $blog->id;?>">
                <button type="submit" class="btn btn-primary pull-right">修改</button>
            </div>
        </form>
    </div>
</div>

<script charset="utf-8" src="/admin/public/js/kindeditor/kindeditor.min.js"></script>
<script charset="utf-8" src="/admin/public/js/kindeditor/lang/zh_CN.js"></script>
<script>
    KindEditor.ready(function(k){
        window.editor = k.create("#myEditor", {

        });
    });
</script>