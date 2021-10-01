<?php
$item = $data['item'] ;

if($item['delivery_state']=='delivered')
{
	$provider = $item['provider'] ;
	echo $provider['business_legal_name'] ;

}
else
{
	$listProviders = $data['listProviders'] ;

	?>

<select name="provider_<?php echo $item['id_item'] ; ?>">
				<option></option>
	<?php
		foreach ($listProviders as $provider) {
			?>

			<option value="<?php echo $provider['id_user'] ; ?>"  <?php if($provider['id_user']==$item['choosen_provider']){ echo 'selected' ; }   ?>><?php echo $provider['business_legal_name'] ; ?></option>

			<?php
		}
	?>
</select>

	<?php
}

?>