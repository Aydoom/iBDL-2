<div class="container-fluid" ng-app="app">
    <div class="row row-main" ng-controller="AppCntrl">
        <div class="col-lg-2 col-leftbar">
            <?= $this->element('navigation'); ?>
        </div>
        <div class="col-lg-10">
            <!-- WorkZone Session -->
            <?= $this->element('session/main'); ?>
            <!-- WorkZone SessionForm -->
            <?= $this->element('session/create'); ?>
        </div>
    </div>
</div>