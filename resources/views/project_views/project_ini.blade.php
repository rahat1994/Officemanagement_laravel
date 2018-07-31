@section('content')
@extends('layouts.app')
@section('title')
Tasks
@endsection
@section('content')
<style>

/*#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}*/

h1 {
  text-align: center;  
}

/*input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}*/

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/*button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
*/
button:hover {
  opacity: 0.8;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<?php
$employees = $data['employees'];

?>
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
                  <h2>Projects Initiation</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li> -->
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
                  <form enctype="multipart/form-data" id="regForm" action="/projectintiation" method="POST">
                        @csrf
                        <?php
                        if (isset($_GET['project_id'])) {
                          ?>
                          <input type="hidden" id="project_motto" class="form-control" name="project_id" value="{{$_GET['project_id']}}" required/>
                          <?php
                            }

                        ?>
                        <!-- One "tab" for each step in the form: -->
                        <!-- <input type="hidden" id="project_motto" class="form-control" name="project_id" required value="3" /> -->
                        <div class="tab">Project Goals:
                          <br>
                          <label for="project_motto">Project Motto:</label>
                          <input type="text" id="project_motto" class="form-control" name="project_motto" required />
                          
                          <label for="project_guidelines">Project Guidelines every member should follow and golas everyone should persue:</label>
                          <textarea id="project_guidelines" required="required" class="form-control" name="project_guidelines" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                          <br/>
                        </div>
                        <div class="tab">Select Project members:
                          <br>
                          <label for="project_members">Select Multiple project member by holding (CTRL key):</label>
                          
                          <br>
                          <br>

                          @foreach($employees as $singleemployee)
                            <input type="checkbox" name="project_members[]" value="{{$singleemployee->id}}">{{$singleemployee->name}}<br>
                          @endforeach


                          <!-- <select class="select2_multiple form-control" name="project_members[]" id="project_members" multiple>
                            //@foreach($employees as $singleemployee)
                              //<option value="{{$singleemployee->id}}">{{$singleemployee->name}}</option>
                            //@endforeach
                          </select> -->
                          <br>
                        </div>
                        <div class="tab">Important Files for Project:

                          <br>
                          <label for="importatnt_files">You can Upload multiple files at once:</label>

                           <br />
                            <input type="file" name="project_files[]" multiple id="importatnt_files" class="form-control" />
                            <br>
                        </div>
                        <div class="tab">Project Email:
                          <br>
                          <p>Single Email where every project memebers will submit their work reports</p>
                          
                          <input placeholder="Project Email" class="form-control" oninput="this.className = ''" name="project_email" type="Email">
                          <br>
                        </div>
                        <div style="overflow:auto;">
                          <div style="float:right;">
                            <button class="btn btn-warning" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                          </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                        </div>
                    </form>
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
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
@endsection