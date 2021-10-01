<div class="card-header">
                  <h4>Oeuvres charitatives</h4>
                  <div class="card-header-action">
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary">Week</a>
                      <a href="#" class="btn">Month</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        
                        <td>Désignation</td>
                        <td>Date de création</td>
                        
                        <td>Action</td>
                      </tr>
                      
                     	<?php
						$listDonationsPrograms = $data['listDonationsPrograms'] ;
						$i = 0 ;
						foreach($listDonationsPrograms as $donationProgram)
						{
							$i++ ;

							?>

							<tr>
                        
		                        <td class="font-weight-600" id="tdDonationProgramDesignation<?php echo $donationProgram['id_donation_program'] ; ?>"><?php echo $donationProgram['title'] ; ?></td>
		                        
		                        <td><?php echo $donationProgram['created_at'] ; ?></td>
		                        <td>
		                          <a  class="ctlUpdateDonationProgram btn btn-warning" onclick="showUpdateDonationProgramModal(<?php echo $donationProgram['id_donation_program'] ; ?>)" iddp="<?php echo $donationProgram['id_donation_program'] ; ?>"><i class="fa fa-eye"></i></a>
		                          <a  class="ctlDeleteDonationProgram btn btn-danger" onclick="showDeleteDonationProgramModal(<?php echo $donationProgram['id_donation_program'] ; ?>)" iddp="<?php echo $donationProgram['id_donation_program'] ; ?>"><i class="fa fa-trash"></i></a>
		                        </td>
		                    </tr>
							<?php
						}

						?>
                     
                      
                     

                    </table>
                  </div>
                </div>
