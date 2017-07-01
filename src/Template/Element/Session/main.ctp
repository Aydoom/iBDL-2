<div class="wz wz-session--main jq-wz jq-wz--session">
    <?= $this->element('header', ['title' => 'Сессии'])?>
    <!-- Rules -->
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-block">
                <button class="btn btn-default" type="submit" 
                        ng-click="showWorkZone('sessionForm')">Создать сессию</button>
            </div>
        </div>
    </div>
    <!-- Table -->
    <div class="row">
        <div class="col-lg-6">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>sensors</th>
                        <th>date</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
