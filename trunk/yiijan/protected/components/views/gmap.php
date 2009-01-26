<center>
<?php
$this->widget('application.extensions.gmap.GMap', array(
							'id' => 'gmap',//id of the <div> container created
							'key' => 'ABQIAAAA37Y4nH6QRVwZOJQN_NL6BRQt1I6akI_Xk3oR8yF6L-DE8o22XRTKAXfxdzkYr-5ZOKycDnsfWkE8CQ', //goole API key, should be obtained for each site,it's free
							'label' => 'some company', //text written in the text bubble
							'address' => array(
									   'address' => '1600 Amphitheatre Pky',//address of the place
									   'city' => 'Mountain View', //city
									   'state' => 'CA'//state
									   //'country' => 'USA' - country
									   //'zip' => 'XXXXX' - zip or postal code
									   )
							));
?>
</center>
