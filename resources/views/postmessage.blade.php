//展示留言的界面
<?php foreach ($msgRes as $msg):?>
<label>
    <span title="<?php echo $msg->email;?>"><?php echo $msg->uname;?> :</span>
    <p><?php echo $msg->content;?></p>
    <font><?php echo date("Y-m-d H:i:s",$msg->addtime);?><a href="###">删除</a> <a href="###">修改</a></font><br/>
</label>
<?php endforeach;?>

//删除留言的链接
<a href="<?php echo URL::action('DeleteController@del',['id'=>$post->id]); ?>">删除</a>