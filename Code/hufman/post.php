<?php
$this->need('head.php');
?>
<div class="post">
    <h1 class="post-title"><?php $this->title() ?></h1>
	<i class="fa fa-clock-o" aria-hidden="true"></i> <time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
	&nbsp;
	<i class="fa fa-comment-o" aria-hidden="true"></i> <?php echo $this->commentsNum; ?>
	&nbsp;
	<i class="fa fa-eye"></i> <?php echo getViewsStr($this); ?>
	<?php if($this->user->hasLogin()): ?>
	&nbsp;
	<i class="fa fa-pencil-square-o" aria-hidden="true"></i> <a href="<?php $this->options->adminUrl("write-post.php?cid=".$this->cid); ?>">编辑</a>
	<?php endif; ?>
	<hr />
    <div class="post-content">
		<?php echo img_lazy_load($this->content) ?>
		<br />
		<div class="post-meta">
		    <img unzoomable class="author" draggable="false" src="<?php echo "//cn.gravatar.com/avatar/".md5($this->author->mail)."?s=50&d=&r=X"; ?>" />
		    <p>该本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 创作或转载<br />采用 <a href="//creativecommons.org/licenses/by/3.0/cn" rel="nofollow">知识共享署名 3.0</a>，可自由转载、引用，但需署名作者且注明文章出处。</p>
		</div>
		<ul class="page-navigator post nav">
            <div class="tags fr">
                标签: <?php $this->tags('', true, '无'); ?>
            </div>
            <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
            <br />
            <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
        </ul>
    </div>
</div>

<div class="post">
    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('foot.php'); ?>