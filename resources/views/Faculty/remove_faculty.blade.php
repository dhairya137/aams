@extends('Index.dashboard1')


@section('content')
<!--Content Starts Here -->


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Remove Faculty</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Remove Faculty</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


<div class="content mt-3">
            <div class="animated fadeIn">

               
<form method="POST" class="jotform-form" action="faculty_add.php">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Remove Faculty
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_24">
        <label class="form-label form-label-left form-label-auto" id="label_24" for="input_24">
          Faculty id 
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_24" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" name= "id" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:116px" size="12"  data-component="number" aria-labelledby="label_24 sublabel_input_24" required="" step="any" />
            <label class="form-sub-label" for="input_24" id="sublabel_input_24" style="min-height:13px" aria-hidden="false"> ID number </label>
          </span>
        </div>
      </li>
      

      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="submit" type="submit" name="submit"class="form-submit-button form-submit-button-simple_white submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="" background="green">
              Submit
            </button>
          </div>
        </div>
      </li>
      </ul>
    </div>
</form>
               
            </div>
        </div>
</div>
<!-- Content Ends Here-->
@endsectio