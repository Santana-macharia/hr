<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
<!--form-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<div class="container">
  <h2>Please fill in the details below</h2>
  <form class="form-horizontal" action="http://localhost:8000/form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="sname">Surname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sname" placeholder="Enter Surname" name="sname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="oname">Other Names:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="oname" placeholder="Enter Other Names" name="oname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
      <div class="col-sm-10">  
        <select name="gender" input type="text" class="form-control" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
   </select> 
   </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="id" placeholder="Enter ID number" name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="personal">Personal Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="personal" placeholder="Enter Personal Number" name="personal">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth" name="dob">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="progression">Progression:</label>
      <div class="col-sm-10">  
        <select name="progression" input type="text" class="form-control" id="progression">
    <option value="first">First appointment date</option>
    <option value="current">Current appointment date </option>
   </select> 
   </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="doc">Date of confirmation in current appointment:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="doc" placeholder="Enter Date of of confirmation in current appointment" name="doc">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tos">Terms of Service:</label>
    <div class="col-sm-10">  
        <select name="tos" input type="text" class="form-control" id="tos">
    <option value="probation">Probation</option>
    <option value="contract">Contract</option>
    <option value="permanent">Permanent and pensionable</option>
   </select> 
   </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="deploy">MDA deployed to:</label>
    <div class="col-sm-10">  
    <select name="deploy" input type="text" class="form-control" id="deploy">
    <option value="KNBS">KNBS</option>
    <option value="KIPPRA">KIPPRA</option>
    <option value="NCPD">NCPD</option>
    <option value="CDF">CDF</option>
    <option value="NGAAF">NGAAF</option>
    <option value="other">Other</option>
   </select> 
   </div>
    </div>
    
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
