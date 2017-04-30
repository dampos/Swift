<!-- ________________________RECENT DEVICE SECTION _______________________-->
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots"></span>Add Panel<span class="carstxt"></span></h1>
	</div>
<div class="container">
  <div class="container">
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          
          
          
        </div>
      </div>
      
      <!-- edit form column -->
      
          <a class="panel-close close" data-dismiss="alert"></a> 
          </div>
        <form method="post" action="<?php echo base_url(); ?>index.php/devices/addDevice" class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input name="name" class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Area (square m):</label>
            <div class="col-lg-8">
              <input name="area" class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Token:</label>
            <div class="col-lg-8">
              <input name="token" class="form-control" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Type:</label>
            <div class="col-lg-8">
              <select name="type">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
          </div>
          <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="<?php echo base_url(); ?>js/locationpicker.jquery.js"></script>

    <div id="map" style="width: 100%; height: 400px;"></div>
<input type="hidden" id="lat" name="lat">
<input type="hidden" id="lng" name="lng">
          
<script type="text/javascript">
$('#map').locationpicker({
    location: {
        latitude: 41.9947048,
        longitude: 21.4315207
    },
    radius: 0,
    inputBinding: {
        latitudeInput: $('#lat'),
        longitudeInput: $('#lng'),
        radiusInput: $('#us6-radius'),
        locationNameInput: $('#us6-address')
    },
    markerInCenter: true,
    enableAutocomplete: true
});
</script>
          </div>
          
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="submit">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>            
  
</div>