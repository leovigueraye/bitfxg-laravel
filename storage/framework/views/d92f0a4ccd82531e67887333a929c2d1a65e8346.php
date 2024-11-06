<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
		$bg="dark";
		$text = "light";
	}
?>

<?php $__env->startSection('styles'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('dash/css/stripeglobal.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('dash/css/stripenormalize.css')); ?>">
<?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel bg-<?php echo e($bg); ?>">
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>">Make Payment</h1>
					</div>
					<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.danger-alert','data' => []]); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
					<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.success-alert','data' => []]); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
					<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-alert','data' => []]); ?>
<?php $component->withName('error-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="card bg-<?php echo e($bg); ?> shadow-lg p-2 p-md-4">
								<div class="card-body">
									<?php if($title !="Complete Payment"): ?>
										<?php
											if($payment_mode->name == "Bitcoin"){
												$coin = 'BTC';
											}elseif ($payment_mode->name == "Litecoin") {
												$coin = 'LTC';
											}else {
												$coin = 'ETH';
											}
										?>
										<div>
											<h4 class="text-<?php echo e($text); ?>">You are to make payment of <strong><?php echo e($settings->currency); ?><?php echo e(number_format($amount)); ?></strong> using your selected payment method. Screenshot and upload the proof of payment</h4>
											<h4>
												<?php if(!empty($payment_mode->img_url)): ?>
												<img src="<?php echo e($payment_mode->img_url); ?>" alt="" class="w-25" >
												<?php endif; ?>
												<strong class="text-<?php echo e($text); ?>"><?php echo e($payment_mode->name); ?></strong>
											</h4>
										</div>
									
										<div class="mt-5">
											<?php if($settings->deposit_option != "manual"): ?>
												<?php if($payment_mode->name == "Bitcoin" or $payment_mode->name == "Litecoin" or $payment_mode->name == "Ethereum"): ?>
												<a href="<?php echo e(url('dashboard/cpay')); ?>/<?php echo e($amount); ?>/<?php echo e($coin); ?>/<?php echo e(Auth::user()->id); ?>/new" class="btn btn-<?php echo e($text); ?>">Pay Via Coinpayment</a>
												<?php else: ?>
													<?php if((!empty($payment_mode->barcode) or $payment_mode->barcode != NULL) and $payment_mode->methodtype != 'currency'): ?>
													<div class="text-center">
														<img src="<?php echo e(asset('storage/'.$payment_mode->barcode)); ?>" alt="" class="w-50">
													</div>
													<?php endif; ?>
												<?php endif; ?>
											<?php endif; ?>
											<?php if($payment_mode->methodtype != 'currency'): ?>
												<h3 class="text-<?php echo e($text); ?>">
													<strong><?php echo e($payment_mode->name); ?> Address:</strong>
												</h3>
												<div class="form-group">
    												<div class="mb-3 input-group">
    													<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->wallet_address); ?>" id="myInput" readonly>
    													<div class="input-group-append">
    														<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
    													</div>
    													
    												</div>
    													<small class="text-<?php echo e($text); ?>"><strong>Network Type:</strong> <?php echo e($payment_mode->network); ?></small>
												</div>

											<?php else: ?>
												<h3 class="text-<?php echo e($text); ?>">
													<strong><?php echo e($payment_mode->name); ?>:</strong>
												</h3>
													<?php if($payment_mode->defaultpay == 'yes'): ?>
														<?php if($payment_mode->name == "Paystack"): ?>
															<?php $payamount = $amount * 100  ?>
															<div id="paystack">
																<form method="POST" action="<?php echo e(route('pay.paystack')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
																	<input type="hidden" name="email" value="<?php echo e(auth::user()->email); ?>">
																	<input type="hidden" name="amount" value="<?php echo e($payamount); ?>">
																	<input type="hidden" name="currency" value="<?php echo e($settings->s_currency); ?>">
																	<input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
																	<input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
																	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
																	<p>
																	<button class="py-2 btn btn-primary" type="submit" value="Pay Now!">
																	<i class="fa fa-credit-card fa-lg"></i> Pay with Paystack
																	</button>
																	</p>
																</form>
															</div>
														<?php endif; ?>
														<?php if($payment_mode->name == "Stripe"): ?>
															<form id="payment-form" class="sr-payment-form">
																<?php echo csrf_field(); ?>
																<div class="sr-combo-inputs-row">
																	<div class="sr-input sr-card-element" id="card-element"></div>
																</div>
																

																<button id="stripesubmit">
																	<div class="spinner d-none" id="spinner"></div>
																	<span id="buttontext" class="">Pay</span>
																</button>
															</form>
													
															<div class="hidden row" id="stripesuccess">
																<div class="col-lg-12">
																	<span>Payment Completed, redirecting.....</span>
																</div>
															</div>
															
															<form id="selectform" method="POST" action="javascript:void(0)">
																<?php echo csrf_field(); ?>
																<input type="hidden" name="amount" value="<?php echo e($amount); ?>">
															</form>
														<?php endif; ?>
														<?php if($payment_mode->name == "Paypal"): ?>
															<div>
																<?php echo $__env->make('includes.paypal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
															</div>
														<?php endif; ?>
														<?php if($payment_mode->name == "Bank Transfer"): ?>
															<?php if(!empty($payment_mode->bankname)): ?>
															<div class="d-block">
																<h5 class="text-<?php echo e($text); ?>">Bank Name</h5>
															</div>
															<div class="mb-3 input-group">
																<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->bankname); ?>" readonly>
																<div class="input-group-append">
																	<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled><i class="fas fa-copy"></i></button>
																</div>
															</div>
															<?php endif; ?>
															<?php if(!empty($payment_mode->account_name)): ?>
															<div class="d-block">
																<h5 class="text-<?php echo e($text); ?>">Account Name</h5>
															</div>
															<div class="mb-3 input-group">
																<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->account_name); ?>" readonly>
																<div class="input-group-append">
																	<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled><i class="fas fa-copy"></i></button>
																</div>
															</div>
															<?php endif; ?>
															<?php if(!empty($payment_mode->account_number)): ?>
															<div class="d-block">
																<h5 class="text-<?php echo e($text); ?>">Account Number</h5>
															</div>
															<div class="mb-3 input-group">
																<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->account_number); ?>" readonly>
																<div class="input-group-append">
																	<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled><i class="fas fa-copy"></i></button>
																</div>
															</div>
															<?php endif; ?>
															<?php if(!empty($payment_mode->swift_code)): ?>
															<div class="d-block">
																<h5 class="text-<?php echo e($text); ?>">Swift Code</h5>
															</div>
															<div class="mb-3 input-group">
																<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->swift_code); ?>" readonly>
																<div class="input-group-append">
																	<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled><i class="fas fa-copy"></i></button>
																</div>
															</div>
															<?php endif; ?>
														<?php endif; ?>
													<?php else: ?>
														<?php if(!empty($payment_mode->bankname)): ?>
														<div class="d-block">
															<h5 class="text-<?php echo e($text); ?>">Bank Name</h5>
														</div>
														<div class="mb-3 input-group">
															<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->bankname); ?>" readonly>
															<div class="input-group-append">
																<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled><i class="fas fa-copy"></i></button>
															</div>
														</div>
														<?php endif; ?>
														<?php if(!empty($payment_mode->account_name)): ?>
														<div class="d-block">
															<h5 class="text-<?php echo e($text); ?>">Account Name</h5>
														</div>
														<div class="mb-3 input-group">
															<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->account_name); ?>" readonly>
															<div class="input-group-append">
																<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"disabled><i class="fas fa-copy"></i></button>
															</div>
														</div>
														<?php endif; ?>
														<?php if(!empty($payment_mode->account_number)): ?>
														<div class="d-block">
															<h5 class="text-<?php echo e($text); ?>">Account Number</h5>
														</div>
														<div class="mb-3 input-group">
															<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->account_number); ?>" readonly>
															<div class="input-group-append">
																<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"disabled><i class="fas fa-copy"></i></button>
															</div>
														</div>
														<?php endif; ?>
														<?php if(!empty($payment_mode->swift_code)): ?>
														<div class="d-block">
															<h5 class="text-<?php echo e($text); ?>">Swift Code</h5>
														</div>
														<div class="mb-3 input-group">
															<input type="text" class="form-control myInput readonly text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" value="<?php echo e($payment_mode->swift_code); ?>" readonly>
															<div class="input-group-append">
																<button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"disabled><i class="fas fa-copy"></i></button>
															</div>
														</div>
														<?php endif; ?>
													<?php endif; ?>
											<?php endif; ?>
										</div>
										<?php if(($settings->deposit_option == "auto" and $payment_mode->name == 'Bank Transfer') or ($settings->deposit_option == "auto" and $payment_mode->defaultpay != 'yes')): ?>
											<div>
												<form method="post" action="<?php echo e(route('savedeposit')); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<div class="form-group">
														<h5 class="text-<?php echo e($text); ?>">Upload Payment proof after payment.</h5>
														<input type="file" name="proof" class="form-control col-lg-4 bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
													</div>
													<input type="hidden" name="amount" value="<?php echo e($amount); ?>">
													<input type="hidden" name="paymethd_method" value="<?php echo e($payment_mode->name); ?>">

													<div class="form-group">
														<input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit Payment">
													</div> 
												</form>
											</div>
										<?php endif; ?>
										<?php if($settings->deposit_option == "manual" and $payment_mode->name != "Paystack" and $payment_mode->name != "Stripe" and $payment_mode->name != "Paypal"): ?>
											<div>
												<form method="post" action="<?php echo e(route('savedeposit')); ?>" enctype="multipart/form-data">
													<?php echo csrf_field(); ?>
													<div class="form-group">
														<h5 class="text-<?php echo e($text); ?>">Upload Payment proof after payment.</h5>
														<input type="file" name="proof" class="form-control col-lg-4 bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
													</div>
													<input type="hidden" name="amount" value="<?php echo e($amount); ?>">
													<input type="hidden" name="paymethd_method" value="<?php echo e($payment_mode->name); ?>">

													<div class="form-group">
														<input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit Payment">
													</div> 
												</form>
											</div>
										<?php endif; ?>
									<?php endif; ?>
									
									<?php if($title=="Complete Payment"): ?>
										<div class="p-2 text-center p-md-5">
											<h4 class="text-<?php echo e($text); ?>">Send <?php echo e($amount); ?> to the below address or scan the <?php echo e($coin); ?> QR code to complete payment.</h4>
											<h4 class="text-<?php echo e($text); ?>"><strong><?php echo e($p_address); ?></strong></h4>
											<div>
												<img width="220" height="220" alt="Payment QR code" src="<?php echo e($p_qrcode); ?>">
											</div>	
											<div class="mt-3">
												<small>you can exit this page after scanning and completed payment, the system will keep track of your payment and update your account accordingly </small>
											</div>
										</div>
									<?php endif; ?>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<script>
				function myFunction() {
					/* Get the text field */
					var copyText = document.getElementById("myInput");
					/* Select the text field */
					copyText.select();
					copyText.setSelectionRange(0, 99999); /* For mobile devices */
					/* Copy the text inside the text field */
					document.execCommand("copy");
					/* Alert the copied text */
					//alert("Copied the text: " + copyText.value);
					swal("Copied", copyText.value, "success");
					}
			</script>
			<script type="text/javascript">

				var stripe = Stripe("<?php echo e($settings->s_p_k); ?>");
				var elements = stripe.elements();
				var style = {
					base: {
						color: "#32325d",
					}
				};
				const paybtn = document.querySelector('#stripesubmit');
				console.log(paybtn);
				paybtn.disabled = true;
		
				var card = elements.create("card", { style: style });
				card.mount("#card-element");

				function checkcardforerrors() {
						card.on('change', function(event) {
						if (event.error) {
							swal("Error", event.error.message, "error");
							paybtn.disabled = true;
						} else {
							paybtn.disabled = false;
						}
					});
				}
				checkcardforerrors();
				
				var form = document.getElementById('payment-form');

				form.addEventListener('submit', function(ev) {
					paybtn.disabled = true;
					ev.preventDefault();
					checkcardforerrors();
					document.getElementById('spinner').classList.remove('d-none');
					document.getElementById('buttontext').classList.add('d-none');
					
					// If the client secret was rendered server-side as a data-secret attribute
					// on the <form> element, you can retrieve it here by calling `form.dataset.secret`
					var clientSecret = "<?php echo e($intent); ?>";
					stripe.confirmCardPayment(clientSecret, {
						payment_method: {
							card: card,
							billing_details: {
								name: "<?php echo e(Auth::user()->name); ?>"
							}
						}
					}).then(function(result) {
						if (result.error) {
							swal("Error", 'There was an error processing your payment, Please try deposit again from deposit page', "error");
							console.log(result.error.message);
						} else {
							// The payment has been processed!
							if (result.paymentIntent.status === 'succeeded') {
								$.ajax({
									url: "<?php echo e(url('/dashboard/submit-stripe-payment')); ?>",
									type: 'POST',
									data:$('#selectform').serialize(),
									success: function (data) {
										swal("Success", data.success, "success");
										setTimeout(function(){window.location.replace("<?php echo e(route('accounthistory')); ?>"); }, 3000);
									},
									error: function (error) {
										alert('Error Submiting Payment Data');
										console.log(error);
									},
								});
							}
						}
					});
					
				});
			</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects-work\bitfxg-laravel\resources\views/user/payment.blade.php ENDPATH**/ ?>