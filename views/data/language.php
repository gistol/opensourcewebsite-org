<?php

use yii\widgets\LinkPager;

?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Language</h3>
        <div class="card-tools">
            <?php echo LinkPager::widget([
                'pagination' => $pages,
                'linkContainerOptions' => [
                    'class' => 'page-item',
                ],
                'linkOptions' => [
                    'class' => 'page-link',
                ],
                'maxButtonCount' => 5,
                'disabledListItemSubTagOptions' => [
                    'tag' => 'a',
                    'class' => 'page-link',
                ],
            ]); ?>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>ASCII</th>
                </tr>
                <?php foreach ($models as $key => $model) : ?>
                    <tr>
                        <td><?php echo $model->name ?? null; ?></td>
                        <td><?php echo $model->code ?? null; ?></td>
                        <td><?php echo $model->name_ascii ?? null; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
