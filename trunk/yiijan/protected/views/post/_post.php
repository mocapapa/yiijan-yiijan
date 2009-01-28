<div class="post">
  <div class="title">
    <img src="/demos/blog2/1x1.jpg" height="4">
    <table><tr><td>
<!--      <?php echo CHtml::image(Yii::app()->homeUrl.'Document.png', '', array('width'=>'48')); ?> -->
      <?php $this->widget('PostDate', array('ct'=>date('F<\b\r>j', $post->createTime))); ?>
    </td>
    <td><?php echo CHtml::link(CHtml::encode($post->title),array('post/show','id'=>$post->id)); ?></td>
    </tr></table>
  </div>
  <div class="author">
    <?php if(!Yii::app()->user->isGuest): ?>
    [<?php echo '<span class="'.strtolower($post->statusText).'">'.$post->statusText.'</span>'; ?>]
    <?php endif; ?>
    posted by <?php echo $post->author->username . ' on ' . date('F j, Y',$post->createTime); ?>
  </div>
  <div class="content">
    <?php echo $post->contentDisplay; ?>
  </div>
  <div class="nav">
    <b>Tags:</b>
    <?php echo $this->getTagLinks($post); ?>
    <br/>
<!--     <img src="/demos/blog2/Readmore.png" width="20"> -->
    <?php echo CHtml::link('Read more',array('post/show','id'=>$post->id)); ?> |
<!--     <img src="/demos/blog2/Comment.png" width="20"> -->
    <?php echo CHtml::link("Comments ({$post->commentCount})",array('post/show','id'=>$post->id,'#'=>'comments')); ?> |
    <?php if(!Yii::app()->user->isGuest): ?>
<!--     <img src="/demos/blog2/Update.png" width="20"> -->
    <?php echo CHtml::link('Update',array('post/update','id'=>$post->id)); ?> |
<!--     <img src="/demos/blog2/Delete.png" width="20"> -->
    <?php echo CHtml::linkButton('Delete',array(
	   'submit'=>array('post/delete','id'=>$post->id),
	   'confirm'=>"Are you sure to delete this post?",
    )); ?> |
    <?php endif; ?>
    Last updated on <?php echo date('F j, Y',$post->createTime); ?>
  </div>
</div><!-- post -->
