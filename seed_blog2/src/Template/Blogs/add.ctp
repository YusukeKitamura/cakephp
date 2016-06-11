<?php
    $this->assign('title', 'Seed Blog2 新規記事作成');
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('新規記事作成') ?></li>
        <li><?= $this->Html->link(__('記事一覧'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="blogs form large-9 medium-8 columns content">
    <?= $this->Form->create($blog) ?>
    <fieldset>
        <legend><?= __('新規記事作成') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            //echo $this->Form->input('delete_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('投稿する')) ?>
    <?= $this->Form->end() ?>
</div>
