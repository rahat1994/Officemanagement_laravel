@section('content')
@extends('layouts.app')
@section('title')
Tasks
@endsection
@section('content')
<div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Projects</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" style="height:600px;">
                <div class="x_title">
                  <h2>Projects</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                    
                    
                    
        <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                    </div>

                    <h2 class="panel-title"></h2>
                </header>
        <div class="row">
              <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Start a new project <small>Click to validate</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate>
                      <label for="fullname">Project Title * :</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required />

                      <label for="email">Project Priority :</label>
                      <input type="email" id="text" class="form-control" name="email" data-parsley-trigger="change" required />

                      <label>Project Category:</label>
                      <p>
                        High:
                        <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> 
                        Medium:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                        Low:
                        <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                      </p>

                          <label for="heard">Project Manager:</label>
                          <select id="heard" class="form-control" required>
                            <option value="">Choose..</option>
                            <option value="press">Press</option>
                            <option value="net">Internet</option>
                            <option value="mouth">Word of mouth</option>
                          </select>

                          <label for="message">Message (20 chars min, 100 max) :</label>
                          <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                          <span class="btn btn-primary">Validate form</span>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>
            </div>
        </div>

            </section>






                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
            
            
        </div>
          
          

        <!-- footer content -->
   
        <!-- /footer content -->

      </div>

@endsection