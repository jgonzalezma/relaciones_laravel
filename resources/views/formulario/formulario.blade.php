<!DOCTYPE html>
<html>
<head>
	<title>Formulario de insercción</title>
</head>
<body>
 <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="get" action="/insertar">
     <div class="form-group ">
      <label class="control-label " for="name">
       Nombre del empleado
      </label>
      <input class="form-control" id="nom_empleado" name="nom_empleado" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name1">
       Primer apellido
      </label>
      <input class="form-control" id="ap1_empleado" name="ap1_empleado" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name2">
       Segundo apellido
      </label>
      <input class="form-control" id="ap2_empleado" name="ap2_empleado" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
      </label>
      <input class="form-control" id="email_empleado" name="email_empleado" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name3">
       Teléfono
      </label>
      <input class="form-control" id="tf_empleado" name="tf_empleado" type="text"/>
     </div>
     <div class="form-group form-group-sm">
      <label class="control-label " for="select">
       Select a Choice
      </label>
      <select class="select form-control" id="departamento_id" name="departamento_id">
       <option value="1">
        1
       </option>
       <option value="2">
        2
       </option>
       <option value="3">
        3
       </option>
      </select>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

</body>
</html>