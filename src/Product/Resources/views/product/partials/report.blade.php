<!-- ___ -->
<!-- start partial report -->
<div class="panel panel-default" ng-hide="!showReport">
	<div class="panel-heading"><section id="productReport">Relatório: @{{view.name}}</section></div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-2">Tipo</div>
			<div class="col-md-2 text-right">Quantidade</div>
			<div class="col-md-2 text-right" ng-hide="true">Saldo</div>
			<div class="col-md-2 text-right">Valor</div>
			<div class="col-md-2">Data</div>
		</div>
		<div class="row">
			<div class="col-md-2">Cadastro</div>
			<div class="col-md-2 text-right">@{{view.current_inventory | comma2decimal}}</div>
			<div class="col-md-2 text-right" ng-hide="true">@{{saldoInicial | comma2decimal}}</div>
			<div class="col-md-2 text-right">-</div>
			<div class="col-md-2">@{{view.created_at | dateTimeMysqlToBR | removeTime}}</div>
		</div>
		<div ng-repeat="record in reportProduct">
			<div class="row" ng-class-odd="'gridPar'" ng-class-even="'gridImpar'">
				<div class="col-md-2">@{{record.tipo}}</div>
				<div class="col-md-2 text-right">@{{record.quantidade | comma2decimal}}</div>
				<div class="col-md-2 text-right" ng-hide="true">@{{record.saldo | comma2decimal}}</div>
				<div class="col-md-2 text-right">@{{record.valor | comma2decimal}}</div>
				<div class="col-md-2">@{{record.created_at | dateTimeMysqlToBR | removeTime}}</div>
			</div>
		</div>
		<div class="row bg-success">
			<button type="button" ng-click="showReport=false">Fechar relatório</button>
			<button type="button" ng-click="gotoProduct(view.id)">Voltar ao produto</button>
		</div>
	</div>
</div>
<!-- end partial report -->
