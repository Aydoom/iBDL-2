<div class="wz wz-session--form jq-wz jq-wz--sessionForm">
    <!-- Header -->
    <?= $this->element('header', ['title' => 'Создать сессию'])?>
    <!-- Rules -->
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-block">
                <a class="btn btn-default" type="submit" ng-click="showWorkZone()">Назад к сессиям</a>
            </div>
        </div>
    </div>
    <!-- Form -->
    <div class="row">
        <div class="col-lg-6">
            <?php
                echo $this->Form->create("session",
                        ['enctype' => 'multipart/form-data']); 

                echo $this->Form->control("name", ['class' => 'form-control', 
                    'label' => 'Имя сессии:', 'placeholder' => 'Климат камера IOQ']);
                echo $this->Form->control("files[]", ['type' => 'file',
                        'label' => 'Выберите файлы данных с датчиков:', 'multiple']);
                echo $this->Form->button('A Button');
                echo $this->Form->end();
            ?>
            <div class="text-right">
                <?=$this->html->link("Clear form", "#");?>
            </div>
        </div>
    </div>
</div>

