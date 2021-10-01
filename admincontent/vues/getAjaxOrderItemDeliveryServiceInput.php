<?php
$item = $data['item'] ;

if($item['delivery_state']=='delivered')
{
	$deliveryService = $item['deliveryService'] ;
	echo $deliveryService['business_legal_name'] ;
}
else
{
	$listDeliveryServices = $data['listDeliveryServices'] ;

	?>

<select name="service_<?php echo $item['id_item'] ; ?>">
				<option></option>
	<?php
		foreach ($listDeliveryServices as $service) {
			?>
			<option value="<?php echo $service['id_user'] ; ?>"  <?php if($service['id_user']==$item['id_delivery_service']){ echo 'selected' ; }   ?>><?php echo $service['business_legal_name'] ; ?></option>

			<?php
		}
	?>
</select>

	<?php
}

?>