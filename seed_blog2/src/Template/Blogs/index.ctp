<?php
    $this->assign('title', 'Seed Blog2');
 ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li><br/>
        <li><?= $this->Html->link(__('新規記事作成'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogs index large-9 medium-8 columns content">
    <h3><?= __('ブログ記事一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('記事番号') ?></th>
                <th><?= $this->Paginator->sort('タイトル') ?></th>
                <!--
                <th><?= $this->Paginator->sort('delete_flag') ?></th>
                !-->
                <th><?= $this->Paginator->sort('作成日時') ?></th>
                <!--
                <th><?= $this->Paginator->sort('modified') ?></th>
                !-->
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
            <tr>
                <td><?= $this->Number->format($blog->id) ?></td>
                <td><?= h($blog->title) ?></td>
                <!--
                <td><?= $this->Number->format($blog->delete_flag) ?></td>
                !-->
                <td><?= h($blog->created) ?></td>
                <!--
                <td><?= h($blog->modified) ?></td>
                !-->
                <td class="actions">
                    <?= $this->Html->link(__('表示'), ['action' => 'view', $blog->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $blog->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
