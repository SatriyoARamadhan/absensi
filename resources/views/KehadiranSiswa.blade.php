@extends('layouts.layout')

@section('content')

<div class="panel col-md-7" style="padding:20px;">
     <div class="panel-heading panel-heading-white">
        <h4>Bar Chart</h4>
      </div>
      <div class="panel-body" style="padding-bottom:0px;">
         <div id="bar-chart" style="height:200px;"></div>
      </div>
</div>

<div class="col-md-4">
	<div class="panel">
     	<div class="panel-heading panel-heading-white  text-center">
        	<h4>Doughnut Chart</h4>
      	</div>
     	<div class="panel-body">
			<div id="doughnut-chart" style="height:200px;"></div>
        </div>
    </div>
</div>

@endsection