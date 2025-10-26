<!-- Footer -->
<footer>
	<!-- Contact 1-->
	<section id="contact" class="section-contact-1 bg-900 position-relative pt-130 pb-lg-250 pb-150 overflow-hidden">
		<div class="container position-relative z-1">
			<h3 class="ds-3 mt-3 mb-3 text-primary">Ponte en contacto</h3>
			<span class="fs-5 fw-medium text-200">
				Ingeniero de software apasionado por el desarrollo backend, siempre disponible para nuevas oportunidades laborales y colaboraciones. Si estás buscando a alguien comprometido con la excelencia y la innovación, no dudes en contactarme para discutir cómo puedo aportar valor a tu empresa.
			</span>
			<div class="row mt-8">
				<div class="col-lg-4 d-flex flex-column">
					<div class="d-flex align-items-center mb-4 position-relative d-inline-flex">
						<div
							class="bg-white icon-flip position-relative icon-shape icon-xxl border-linear-2 border-2 rounded-4">
							<i class="ri-phone-fill text-primary fs-26"></i>
						</div>
						<div class="ps-3">
							<span class="text-400 fs-5">Teléfono</span>
							<h6 class="mb-0">+52 998-116-0272</h6>
						</div>
						<a href="<?= $ref_rel; ?>tel:+529981160272"
							class="position-absolute top-0 start-0 w-100 h-100"></a>
					</div>
					<div class="d-flex align-items-center mb-4 position-relative d-inline-flex">
						<div
							class="bg-white icon-flip position-relative icon-shape icon-xxl border-linear-2 border-2 rounded-4">
							<i class="ri-mail-fill text-primary fs-26"></i>
						</div>
						<div class="ps-3">
							<span class="text-400 fs-5">Email</span>
							<h6 class="mb-0">damian.marcospool@gmail.com</h6>
						</div>
						<a href="<?= $ref_rel; ?>mailto:damian.marcospool@gmail.com"
							class="position-absolute top-0 start-0 w-100 h-100"></a>
					</div>
					<div class="d-flex align-items-center mb-4 position-relative d-inline-flex">
						<div
							class="bg-white icon-flip position-relative icon-shape icon-xxl border-linear-2 border-2 rounded-4">
							<i class="ri-github-fill text-primary fs-26"></i>
						</div>
						<div class="ps-3">
							<span class="text-400 fs-5">GitHub</span>
							<h6 class="mb-0">github.com/marcosd59</h6>
						</div>
						<a href="<?= $ref_rel; ?>https://github.com/marcosd59"
							class="position-absolute top-0 start-0 w-100 h-100" target="_blank"></a>
					</div>
					<div class="d-flex align-items-center mb-4 position-relative d-inline-flex">
						<div
							class="bg-white icon-flip position-relative icon-shape icon-xxl border-linear-2 border-2 rounded-4">
							<i class="ri-linkedin-fill text-primary fs-26"></i>
						</div>
						<div class="ps-3">
							<span class="text-400 fs-5">LinkedIn</span>
							<h6 class="mb-0">linkedin.com/in/marcosd59</h6>
						</div>
						<a href="<?= $ref_rel; ?>https://www.linkedin.com/in/marcosd59"
							class="position-absolute top-0 start-0 w-100 h-100" target="_blank"></a>
					</div>
					<div class="d-flex align-items-center mb-4 position-relative d-inline-flex">
						<div
							class="bg-white icon-flip position-relative icon-shape icon-xxl border-linear-2 border-2 rounded-4">
							<i class="ri-map-2-fill text-primary fs-26"></i>
						</div>
						<div class="ps-3">
							<span class="text-400 fs-5">Dirección</span>
							<h6 class="mb-0">Cancún Quintana Roo, México</h6>
						</div>
						<a href="<?= $ref_rel; ?>https://maps.google.com/maps?q=Cancun+Quintana+Roo+Mexico"
							class="position-absolute top-0 start-0 w-100 h-100" target="_blank"></a>
					</div>
				</div>
				<div class="col-lg-7 offset-lg-1 ps-lg-0 pt-5 pt-lg-0">
					<div class="position-relative">
						<div class="position-relative z-2">
							<h3>Deja un mensaje</h3>
							<form action="#">
								<div class="row mt-3">
									<div class="col-md-6 ">
										<label class="mb-1 mt-3 text-dark" for="name">Tu nombre <span
												class="text-primary">*</span></label>
										<input type="text" class="form-control border rounded-3" id="name" name="name"
											placeholder="Juan Pérez" aria-label="username">
									</div>
									<div class="col-md-6">
										<label class="mb-1 mt-3 text-dark" for="email">Dirección de correo
											electrónico <span class="text-primary">*</span></label>
										<input type="text" class="form-control border rounded-3" id="email" name="email"
											placeholder="tu.email@ejemplo.com" aria-label="email">
									</div>
									<div class="col-md-6">
										<label class="mb-1 mt-3 text-dark" for="phone">Tu teléfono <span
												class="text-primary">*</span></label>
										<input type="text" class="form-control border rounded-3" id="phone" name="phone"
											placeholder="+52 998 123 4567" aria-label="phone">
									</div>
									<div class="col-md-6">
										<label class="mb-1 mt-3 text-dark" for="subject">Asunto <span
												class="text-primary">*</span></label>
										<input type="text" class="form-control border rounded-3" id="subject"
											name="subject" placeholder="Consulta sobre desarrollo..." aria-label="subject">
									</div>
									<div class="col-12">
										<label class="mb-1 mt-3 text-dark" for="message">Mensaje <span
												class="text-primary">*</span></label>
										<textarea class="form-control border rounded-3 pb-10" id="message"
											name="message" placeholder="Tu mensaje aquí...."
											aria-label="With textarea"></textarea>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-gradient mt-3">
											Enviar mensaje
											<i class="ri-arrow-right-up-line"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="z-0 bg-primary-dark rectangle-bg z-1 rounded-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll-move-right position-absolute bottom-0 start-50 translate-middle-x bg-900 overflow-hidden">
			<div class="wow img-custom-anim-top">
				<h3 class="stroke fs-280 text-lowercase text-900 mb-0 lh-1">marcos.dev</h3>
			</div>
		</div>
	</section>

	<div class="section-footer position-relative pt-60 pb-60 bg-secondary-1">
		<div class="container position-relative z-1">
			<div class="text-center">
				<a class="d-flex main-logo align-items-center d-inline-flex" href="index.html">
					<img src="assets/imgs/footer-1/logo-1.svg" alt="zelio">
					<span class="fs-4 ms-2 text-white-keep">marcos.dev</span>
				</a>
				<div class="navigation d-none d-md-flex align-items-center justify-content-center flex-wrap gap-4 my-4">
					<a href="index.html" class="fs-5">
						Inicio
					</a>
					<a href="services.html" class="fs-5">
						Servicios
					</a>
					<a href="work.html" class="fs-5">
						Portafolio
					</a>
					<a href="blog-list.html" class="fs-5">
						Blog
					</a>
					<a href="#contact" class="fs-5">
						Contacto
					</a>
				</div>
			</div>
			<div class="row text-center py-4">
				<span class="fs-6 text-white-keep">© 2024 Todos los derechos reservados por <span><a href="#"
							class="text-primary">Marcos.dev</a></span>
				</span>
			</div>
		</div>
		<div class="position-absolute top-0 start-0 w-100 h-100 z-0"
			data-background="assets/imgs/footer-1/background.png ">
		</div>
	</div>
</footer>