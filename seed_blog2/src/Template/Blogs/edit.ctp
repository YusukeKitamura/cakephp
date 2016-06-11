<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Blogs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="blogs form large-9 medium-8 columns content">
    <?= $this->Form->create($blog) ?>
    <fieldset>
        <legend><?= __('Edit Blog') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            //echo $this->Form->input('delete_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('更新する')) ?>
    <?= $this->Form->end() ?>
</div>
