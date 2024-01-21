@extends('Index.dashboard1')


@section('content')
<!-- Content Starts Here -->

   
    
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Students </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Edit Students </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 <!-- Right Panel -->

        <div class="content mt-3">
        <div class="animated fadeIn">
               
<form method="POST" class="jotform-form" action="/modify_studentaction"  enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Edit Students information
            </h1>
          </div>
        </div>
      </li>
      <h4><center>You are going to change details of ID :{{$data->enrollment}}</center></h4>
   
            <input type="hidden" name= "Enrollment" value="{{ $data->enrollment}}" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:116px" size="12"  data-component="number" aria-labelledby="label_24 sublabel_input_24" required="" step="any" />
      <li class="form-line jf-required" data-type="control_fullname" id="id_23">
        <label class="form-label form-label-left form-label-auto" id="label_23" for="first_23">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_23" name="std_name" value="{{ $data->std_name }} "class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_23 sublabel_23_first" required="">
              <label class="form-sub-label" for="first_23" id="sublabel_23_first" style="min-height:13px" aria-hidden="false"> Name </label>
            </span>
          </div>
        </div>
      </li>
     
      <li class="form-line jf-required" data-type="control_email" id="id_13">
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input jf-required">
          <input type="email" id="input_13" value="{{ $data->email_std}}" name="e_mail" class="form-textbox validate[required, Email]" size="30" value="" placeholder=" " data-component="email" aria-labelledby="label_13" required="" />
          <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> E-mail </label>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Phone No.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_25" value="{{ $data->contact_std}}" name="phone" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> Contect </label>
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Semester
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="semester" value="{{ $data->semester}}" class=" form-number-input form-textbox validate[required]" style="width:100px"  value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="{{ $data->semester}}">{{ $data->semester}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>

            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> Sem </label>
          </span>
        </div>
      </li>

   <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Division
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="division" value="{{ $data->div_std}}" class=" form-number-input form-textbox validate[required]" style="width:100px" value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="{{ $data->div_std}}">{{ $data->div_std}}</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>

            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> div </label>
          </span>
        </div>
      </li>

<li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Batch
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="batch" value="{{ $data->batch_std}}" class=" form-number-input form-textbox validate[required]" style="width:100px" value=""   aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="{{ $data->batch_std}}">{{ $data->batch_std}}</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> div </label>
          </span>
        </div>
      </li>


      <li class="form-line" data-type="control_textbox" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Profile 
        <span class="form-required">
            *
          </span>
      </label>
        <div id="cid_28" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <?php 

              $folder='practice';
              if(is_dir($folder))
              {
                if($open =opendir($folder))
                {
                  while(($file=readdir($open)) != false)
                  {
                    if($file == $data->std_profile)
                    {
                        echo $data->std_profile;
                        $img = (string)$data->std_profile;
                        ?>
                        <img src="{{ url('practice/'.$img)}}" height="150px" width="150px">
                        <?php
                    }
                  }
                }
              }

            ?>

            <input type="file" name="profile" value="$data->std_profile">
            <label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false"> Profile </label>
          </span>
        </div>
      </li>



      <li class="form-line" data-type="control_textbox" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Password 
        <span class="form-required">
            *
          </span>
      </label>
        <div id="cid_28" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="Password" id="input_28" name="password" value="{{ $data->std_pwd}}" data-type="input-textbox" class="form-textbox validate[AlphaNumeric]" size="20" value="" data-component="textbox" aria-labelledby="label_28 sublabel_input_28" required>
            <label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false"> Password </label>
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
@endsection