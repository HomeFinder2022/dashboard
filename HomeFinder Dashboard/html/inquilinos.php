
<?php require_once 'menu.php'; ?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
			<div class="container-fluid">
            <table class="table table-hover table-bordered dataTable mt-3">
	<thead>
		<tr>
 			<th colspan="3" class="sorting"><a href="/landlord/#tenants/?sort=TenantsOrderField|">Inquilino</a></th>
			<th class="sorting hidden-phone" data-column-name="TenantType"><a href="/landlord/#tenants/?sort=TenantType|">Tipo</a></th>
        	<th class="hidden-phone sorting" data-column-name="TenantProperty"><a href="/landlord/#tenants/?sort=orderByField_Bien|">Propriedade</a></th>
        	<th class="sorting hidden-phone" data-column-name="TenantMobilePhone"><a href="/landlord/#tenants/?sort=TenantMobilePhone|">Telefone</a></th>
        	<th class="sorting hidden-phone" data-column-name="TenantEmail"><a href="/landlord/#tenants/?sort=TenantEmail|">Email</a></th>
        	<th class="sorting hidden-phone" style="width:100px;" data-column-name="TenantBalance"><a href="/landlord/#tenants/?sort=TenantBalance|">Tipo de Arrendamento</a></th>
        	<th class="sorting hidden-phone" style="width:100px;" data-column-name="TenantStatus"><a href="/landlord/#tenants/?sort=TenantStatus|">Estado</a></th>
            			<th class="center" style="width:50px;">Ações</th>
		</tr>
	</thead>
	<tbody>
		                                    <tr>
                <td scope="row" class="center" style="width:20px;">
	                <label class="cb-rb">
	                    <input type="checkbox" name="ids[]" value="8955" class="checkbox_input" onclick="checkallbox('ids[]', 'checkallbox');">
	                    <span class="p-l-0"></span>
	                </label>
                </td>
                
                <td scope="row" class="b-l-0">

                        <div>
                            <a href="/landlord/#tenants/8955/view" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="top" data-content="
					<b>Tipo</b> Particular <br>
															<b>Estado</b> <span class='label label-warning'>Em espera</span><br>" data-original-title="" title="">
	                        		                        		Sr. Paulo Pedras	                        	                            </a>
                            <small class="block">Particular</small>
                            <!-- Responsive info -->
                                                        	
                            
                                                               <!-- // Responsive info -->
                        </div>
                </td>

                <td scope="row" class="hidden-phone" data-column-name="TenantType">
                    Particular                </td>

                <td scope="row" class="hidden-phone" data-column-name="TenantProperty">
                                                            <a href="/landlord/#leases/new?LeaseTenantIds=8955" class="label label-success">Criar um arrendamento</a>
                                    </td>

                <td scope="row" class="hidden-phone ellipsis" data-column-name="TenantMobilePhone">
					<a href="tel:960 353 746">960 353 746</a>
				</td>

                <td scope="row" class="hidden-phone ellipsis w150" data-column-name="TenantEmail"><a href="mailto:paulopedras93@gmail.com">paulopedras93@gmail.com</a></td>

                <td scope="row" class="hidden-phone w150" data-column-name="TenantBalance">
	                <a href="/landlord/#tenants/8955/solde" style="text-decoration: none; color: #444333;" data-toggle="tooltip" title="" data-original-title="Ver o detalhe do saldo">Curta Duração</a>
	                	                    	                                </td>

                <td scope="row" class="hidden-phone" data-column-name="TenantStatus">
                                                                <span class="label label-warning" data-toggle="tooltip" title="" data-original-title="O inquilino ainda não aceitou o convite">Em espera</span>                        <a href="/landlord/#tenants/invite/?id=8955" data-toggle="tooltip" title="" class="label label-success" data-original-title="Enviar um convite"></a>                                    </td>



                
                <td class="center">
                    <div class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
	                        <i class="icon-more" data-toggle="tooltip" title="" data-original-title="Ações"></i>
	                        	                    </a>
                        <ul class="dropdown-menu right text-left">
	                       <li>
	                       	<a href="/landlord/#tenants/8955/edit" data-toggle="tooltip" title="" data-placement="left" data-original-title="Editar inquilino"><i class="icon-pencil"></i> Editar</a>
	                       </li>
	                       <li>
							<a href="/landlord/#tenants/8955/view" data-toggle="tooltip" data-placement="left" title="" class="" data-original-title="Cartão do inquilino"><i class="icon-file_view"></i> Cartão do inquilino</a>
						  </li>
						  		                        		                        <li>
		                        	<a href="/landlord/#tenants/invite/?id=8955" data-toggle="tooltip" data-placement="left" title="Enviar um convite"><i class="icon-paperplane"></i> Convidar</a>
		                        	<a href="/landlord/tenants/sendTenantInvite" title="" data-confirm-emails_notif="true" data-confirm-hide-emails-list="true" data-confirm-type="Candidate" data-confirm-message="email" data-confirm-id="8955" data-confirm-hide-poste="false" data-confirm-confirm-button="Confirmar" data-confirm-cancel-button="Cancelar" data-confirm-title="Aviso" data-confirm-msg="Enviar um convite para o inquilino. Por favor confirme." data-toggle="tooltip" data-placement="left" data-original-title="Enviar um convite para o inquilino">
										<i class="icon-paperplane"></i> Convidar									</a>
		                        </li>
		                        		                   	                       <li>
	                       	<a href="/landlord/#messages/new?MessageReceivers[]=t|8955" data-toggle="tooltip" title="" data-placement="left" data-original-title="Enviar uma mensagem"><i class="fas fa-comment-lines"></i> Enviar uma mensagem</a>
	                       </li>
						  						   <li>
						   	<a href="/landlord/#leases/new?LeaseTenantIds=8955" data-toggle="tooltip" data-placement="left" title="" class="" data-original-title="Criar um arrendamento"><i class="icon-key"></i> Criar um arrendamento</a>
						   </li>
						  
                            							<li>
								<a href="/landlord/#tenants/8955/solde" data-toggle="tooltip" data-placement="left" title="" class="" data-original-title="Saldo do inquilino"><i class="fas fa-file-invoice-dollar"></i> Saldo do inquilino</a>
							</li>
							<li>
								<a href="/landlord/#payments/?FilterKeyword=Paulo+Pedras" data-toggle="tooltip" data-placement="left" title="" class="" data-original-title="Histórico de pagamentos"><i class="icon-cash2"></i> Finanças</a>
							</li>
                                                       <li>
                                <a href="/landlord/#tenants/?action=archive&amp;id=8955" data-toggle="tooltip" data-placement="left" title="" data-confirm="true" data-confirm-confirm-button="Confirmar" data-confirm-cancel-button="Cancelar" data-confirm-title="Aviso" data-confirm-msg="Por favor confirme." data-original-title="Arquivo do inquilino"><i class="icon-archive"></i> Arquivar</a>
                            </li>
                                                                                    <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-delete-confirm-button="Confirmar" data-delete-cancel-button="Cancelar" data-delete-title="Aviso" title="" data-delete-msg="Por favor confirme a supressão do inquilino." data-delete-href="/landlord/#tenants/?id=8955&amp;action=delete&amp;query=" data-toggle="tooltip" data-placement="left" class="" data-original-title="Excluir permanentemente"><i class="icon-remove red"></i> Remover</a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
			</tbody>
	<tfoot>
    </tfoot>
</table>
</div>
            <!-- / Content -->
			
          
  </body>
  <?php require_once 'footer.php'; ?>
</html>
