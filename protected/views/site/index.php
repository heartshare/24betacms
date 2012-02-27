<?php if ($hottest):?>
<div class="beta-hottest-posts">
<?php foreach ($hottest as $index => $post):?>
    <?php if ($index != 0):?>
    <a class="separate" href="javascript:void(0);">x</a>
    <?php endif;?>
    <a href="<?php echo $post->absoluteUrl?>" target="_blank">
        <strong><?php echo $post->title;?></strong>
        <img src="<?php echo $post->thumbnailUrl?>" alt="<?php echo $post->title;?>" />
    </a>
<?php endforeach;?>
    <div class="clear"></div>
</div>
<?php endif;?>

<div class="beta-content">
    <?php $this->renderPartial('/post/_summary_list', array('posts'=>$posts, 'pages'=>$pages));?>
</div>
<div class="beta-sidebar">
    <?php $this->widget('BetaCommentTopPosts', array('allowEmpty'=>true, 'days'=>30));?>
    <?php $this->widget('BetaVisitTopPosts', array('allowEmpty'=>true, 'days'=>30));?>
    
    <?php if ($recommend):?>
    <div class="beta-block beta-radius3px beta-recommend-posts">
        <h2><?php echo t('recommend_posts');?></h2>
        <?php foreach($recommend as $index => $post):?>
        <dl class="row<?php echo $index%2;?>">
            <dt><?php echo $post->titleLink;?></dt>
            <dd><?php echo $post->getSubSummary(90);?></dd>
        </dl>
        <?php endforeach;?>
    </div>
    <?php endif;?>
</div>
<div class="clear"></div>