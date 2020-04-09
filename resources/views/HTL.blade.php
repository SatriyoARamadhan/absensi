@extends('layouts.layout')

@section('content')
<!-- HTL X -->
  <div class="col-md-4">
    <div class="panel form-element-padding">
      <div class="panel-heading">
        <h4>Hotel <b>X</b></h4>
      </div>
          <div class="panel-body" style="padding-bottom:30px;">
              
              <h4>
               <li class="ripple">
                <a>
                  <span class="fa-diamond fa"></span> <a href="{{ url('/HTL_X_1') }}">HTL X-1</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 

              <h4>
               <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span><a href="{{ url('/HTL_X_2')}}"> HTL X-2</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 
            </div>
      </div>
    </div>
<!-- HTL XI -->
  <div class="col-md-4">
    <div class="panel form-element-padding">
      <div class="panel-heading">
                <h4>Hotel <b>XI</b></h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">

          
                <h4>
               <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span><a href="{{ url('/HTL_XI_1')}}"> HTL XI-1</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 

              <h4>
               <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span><a href="{{ url('/HTL_XI_2')}}"> HTL XI-2</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 
            </div>
      </div>
    </div>
<!-- HTL XI -->
  <div class="col-md-4">
    <div class="panel form-element-padding">
      <div class="panel-heading">
                <h4>Hotel <b>XII</b></h4>
            </div>
            <div class="panel-body" style="padding-bottom:30px;">

          
              <h4>
               <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span><a href="{{ url('/HTL_XII_1')}}"> HTL XII-1</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 

              <h4>
               <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span><a href="{{ url('/HTL_XII_2')}}"> HTL XII-2</a>
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
               </li>
              </h4> 
            </div>
      </div>
    </div>    

@endsection