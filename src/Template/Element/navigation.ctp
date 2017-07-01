<ul class="nav nav-pills nav-stacked nav-grey">
    <li role="presentation" ng-repeat="(index, link) in menuLinks"
        class="{{link.active ? 'active' : ''}}" ng-click="clickMenuLink(index)">
        <p>{{link.name}}</p>
    </li>
</ul>
