<div ng-app="typicms" ng-cloak ng-controller="ListController">

    <h1>
        <a href="{{ url }}/create" class="btn-add"><i class="fa fa-plus-circle"></i><span class="sr-only" translate>New</span></a>
        <span translate translate-n="models.length" translate-plural="{{ models.length }} categories">{{ models.length }} categories</span>
    </h1>

    <div class="btn-toolbar" role="toolbar" ng-include="'/views/partials/btnLocales.html'"></div>

    <!-- Nested node template -->
    <div ui-tree="treeOptions" data-max-depth="1">
        <ul ui-tree-nodes="" ng-model="models" id="tree-root">
            <li ng-repeat="model in models" ui-tree-node ng-include="'/views/partials/nodes_renderer.html'"></li>
        </ul>
    </div>

</div>
