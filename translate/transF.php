<div class="wizard-v3-content">
	<div class="wizard-form">
		<div class="wizard-header">
		<h1> <a href="index.php"><img src="img/logo.jpg" alt="" height="60"></a> </h1>
			<h3 class="heading">Transfer procedure </h3>
			<p>Complete all the steps</p>
		</div>
		<form class="form-register" action="#" method="post">
			<div id="form-total">
				<!-- SECTION 1 -->
				<h2>
					<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
					<span class="step-text">About</span>
				</h2>
				<section>
					<div class="inner">
						<h3>Account Information:</h3>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label class="form-row-inner">
									<input type="text" name="email" id="email" class="form-control" required>
									<span class="label">E-mail adress</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="username" name="username" required>
									<span class="label">Username</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label class="form-row-inner">
									<input type="password" name="password_1" id="password_1" class="form-control" required>
									<span class="label">Password</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 2 -->
				<h2>
					<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
					<span class="step-text">Account</span>
				</h2>
				<section>
					<div class="inner">
						<h3>Beneficiary account information:</h3>
						<div class="form-row">
							<div class="form-holder">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="first_name" name="first_name" required>
									<span class="label">Last name*</span>
									<span class="border"></span>
								</label>
							</div>
							<div class="form-holder">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="last_name" name="last_name" required>
									<span class="label">First name*</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="phone" name="phone" required>
									<span class="label">Phone number*</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-1">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="pays" name="pays" required>
									<span class="label">Country*</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-1">
								<label class="form-row-inner">
									<input type="text" class="form-control" id="ville" name="ville" required>
									<span class="label">City*</span>
									<span class="border"></span>
								</label>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 3 -->
				<h2>
					<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
					<span class="step-text">Payment</span>
				</h2>
				<section>
					<div class="inner">
						<h3>Payment information:</h3>
						<div class="form-row">
					<div class="form-holder">
					<label class="form-row-inner">
						<input type="text" class="form-control" id="number" name="number" required>
						<span class="label">Account number*</span>
						<span class="border"></span>
					</label>
					</div>
					<div class="form-holder">
					<label class="form-row-inner">
						<input type="text" class="form-control" id="rib" name="rib" required>
						<span class="label">RIB*</span>
						<span class="border"></span>
					</label>
					</div>
				</div>
				<div class="form-row">
				
					<div class="form-holder">
					<label class="form-row-inner">
						<input type="text" class="form-control" id="bic" name="bic" required>
						<span class="label">BIC*</span>
						<span class="border"></span>
					</label>
					</div>
					<div class="form-holder">
					<label class="form-row-inner">
						<input type="text" class="form-control" id="swif" name="swif" required>
						<span class="label">SWIF*</span>
						<span class="border"></span>
					</label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-holder">
					<label class="form-row-inner">
						<input type="text" class="form-control" id="montant" name="montant" required>
						<span class="label">Amount*</span>
						<span class="border"></span>
					</label>
					</div>
				</div>
					</div>
				</section>
				<!-- SECTION 4 -->
				<h2>
					<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
					<span class="step-text">Confirmation</span>
				</h2>
				<section>
					<div class="inner">
						<h3>Confirmation details:</h3>
						<div class="form-row table-responsive">
							<table class="table">
								<tbody>
									<tr class="space-row">
										<th>Full Name:</th>
										<td id="fullname-val"></td>
									</tr>
									<tr class="space-row">
										<th>E-mail:</th>
										<td id="email-val"></td>
									</tr>
									<tr class="space-row">
										<th>Phone:</th>
										<td id="phone-val"></td>
				</tr>
				<tr class="space-row">
										<th>Account number:</th>
										<td id="number-val"></td>
				</tr>
				<tr class="space-row">
										<th>RIB:</th>
										<td id="rib-val"></td>
									</tr>
									<tr class="space-row">
										<th>Amount:</th>
										<td id="montant-val"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
		</form>
	</div>
</div>