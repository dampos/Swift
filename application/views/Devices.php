<!-- ________________________RECENT DEVICE SECTION _______________________-->
<div class="allcontain">
  <div class="feturedsection">
    <h1 class="text-center"><span class="bdots"></span>M Y <span class="carstxt">D E V I C E S</span></h1>
  </div>
  <div class="container">
  <h2></h2>
  
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
<a href="<?php base_url();?>devices/addDevice"><button type="button" class="btn btn-primary btn-lg">ADD DEVICE</button></a>
  <div class="row">
    
        
        <div class="col-md-12">
        
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Name</th>
                    <th>Type</th>
                     <th>Capacity</th>
                     <th>Area</th>
                     <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <?php foreach($devices as $device) {if($device['type'] == 2) {?>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td> <a href="<?php echo base_url() . 'index.php/devices/view/' . $device['id']; ?>"><?php echo $device['name']; ?></a> </td>
    <td><?php echo ($device['type'] == 1) ? "Sensor" : "Panel"; ?></td>
    <td><?php echo $device['area']; ?></td>
    <td><?php echo $device['area']; ?></td>
    
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    <?php }}?>  
   
    </tbody>
        
</table>

<div class="clearfix">
<a href="<?php base_url();?>devices/addSensor"><button type="button" class="btn btn-primary btn-lg">ADD SENSOR</button></a>
  <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Name</th>
                    <th>Type</th>
                     <th>Capacity</th>
                     <th>Area</th>
                     <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <?php foreach($devices as $device) {if($device['type'] == 1) {?>
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td> <a href="<?php echo base_url() . 'index.php/devices/view/' . $device['id']; ?>"><?php echo $device['name']; ?></a> </td>
    <td><?php echo ($device['type'] == 1) ? "Sensor" : "Panel"; ?></td>
    <td><?php echo $device['area']; ?></td>
    <td><?php echo $device['area']; ?></td>
    
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    <?php }}?> 
   
    </tbody>
        
</table>
</div>

<div class="clearfix"></div>              
            </div>
            
        </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
</div>
</div>

<!-- ________________________RECENT DEVICE GRAPH SECTION _______________________-->