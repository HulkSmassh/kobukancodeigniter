			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="./">Home</a></li>
									<li class="active">Furoshiki</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Furoshiki</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12" data-appear-animation="fadeInUp">
							<h3><strong>Furoshiki (風呂敷):</strong> Embrulho Tradicional Japonês</h3>
							<p class="drop-caps">
								 A Técnica tradicional de embrulho japonês, muito utilizado para embalar presentes, transportar objetos como garrafas, livros, roupas, caixas de obento, entre outros. O nome Furoshiki se origina das palavras “furo” (banho) e “shiki” (abrir).
						  </p>
						  <p class="drop-caps">
						  	A origem desse nome se deu porque durante o período Edo, era comum as pessoas usarem o furoshiki para guardar as roupas enquanto se banhavam nos banhos públicos, conhecidos como Sento. Com o tempo, o furoshiki sofreu variações em relação ao tamanho e design, até que passou a embrulhar outros tipos de objetos.
						  </p>
						  <p class="drop-caps">
						  	O tecido utilizado pode ser de algodão, nylon, seda, chirimen, entre outros. Em termos de tamanho e design, existe uma grande variedade para todos os gostos possíveis. É uma forma criativa e inteligente de reaproveitar tecidos, já que o furoshiki é totalmente “ecofriendly”, ou seja amigavelmente ecológico.
						  </p>
						  <p class="drop-caps">
						  	Não é à toa que esta técnica tradicional japonesa tenha conquistado muitos adeptos fora do Japão. Apesar do uso no Japão ter diminuído em razão do constante uso de sacolas plásticas, nos últimos tempos tem havido um crescente interesse nesta técnica como forma de preservar o meio ambiente.
						  </p>
						  <p class="drop-caps">
						  	Muitos podem enxergar o furoshiki como apenas um quadrado de tecido, mas para os japoneses o significado vai muito além. As amarrações e nós fortes feitos no Furoshiki estão associados com a palavra Musubu, que significa “laço”, “vínculo”, “ligação”.
						  </p>
						  <p class="drop-caps">
						  	Já a atitude de embrulhar um presente com furoshiki e presenteá-lo a alguém, está associado com a palavra Tsutsumu, que transmite a sensação de zelo e proteção, sensação parecida com a de uma mãe quando envolve seu bebê.
						  </p>
						  <p class="drop-caps">
						  	Além disso, o furoshiki está associado com o mottainai, um conceito que prioriza o sentimento de não desperdiçar nada que possa ser reaproveitado, já que inicialmente eram feitos de pedaços de tecidos que sobravam na hora de confeccionar um quimono (vestimenta tradicional japonesa).
						  </p>
						  <p class="drop-caps">
						  	Já as estampas também podem transmitir um significado dependendo do design escolhido. Existem padrões de desenho específicos com significados para cada ocasião, como nascimentos, casamentos, aniversários. Existem também padrões sazonais, que mudam de acordo com a estação do ano.
						  </p>
						  <p class="drop-caps">
						  	O furoshiki se caracteriza por ser bastante resistente, sendo adequado para transportar até objetos mais pesados como livros, etc. O segredo está nas amarrações que unem as pontas dos lenços de modo que não desata facilmente. Com criatividade, é possível usar o furoshiki de diversas formas.
						  </p>
						  <p class="drop-caps">
						  	Entre as mulheres por exemplo, as bolsas de furoshiki fazem muito sucesso pois é possível confecciona-lo com diversas estampas e em poucos minutos.
						  </p>
						  <p class="drop-caps">
						  	Angélica é aluna da professora Akiko Kawashima.
						  </p>
						</div>
					</div>

					<hr class="tall">

					<div class="row" data-appear-animation="fadeInDown">
						<ul class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							<?php foreach ($fotos as $foto) :?>
								<li class="col-md-3 no-pin">
									<div class="img-thumbnail">
										<a href="<?php echo base_url($foto) ?>" class="thumb-info">
											<img src="<?php echo base_url($foto) ?>" class="image-responsive"  height="200" width="400">
										</a>
									</div>
								</li>
						<?php endforeach; ?>
						</ul>
					</div>

				</div>

			</div>

		</div>

	</body>
</html>
