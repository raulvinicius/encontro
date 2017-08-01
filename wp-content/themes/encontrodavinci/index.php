<?php get_header(); ?>


<?php if (is_user_logged_in() || new DateTime() > new DateTime("2017-08-01 14:00:00") ): ?>

<section id="home" class="container-fluid bg-parallax" data-bg-dist="0.5">

	<div class="parallax el-parallax" data-el-dist="0.5">
		<div class="row wrap layer" data-depth="0.1">
			<hgroup class="col-md-12">
				<h1 class="layer" data-depth="0.3">5º Encontro da Vinci</h1>
				<h2 class="layer" data-depth="0.15">Aqui você é Show</h2>
			</hgroup>
		</div>
	</div>

	<div class="row">
	<div class="infos">
		<div class="txt-show r15">
			<div class="dia">
				<h2 class="bg-laranja">Data:</h2>
				<p>12 de agosto <span class="small block">de 2017</span></p>
			</div>
			<div class="local">
				<h2 class="bg-laranja inline">Local:</h2>
				<p><span class="small">Espaço</span> Net Live <br>Brasília</p>
				<p class="horas">A partir <br> das <strong>14h</strong></p>
			</div>
		</div>

		<svg class="linhas" width="1970" height="800" viewBox="0 0 1970 800">

		    <line class="r15" x1="1485" y1="462" x2="1485" y2="799" stroke="#fff" stroke-width="5" stroke-linecap="round" stroke-dasharray="0, 17"/>
		    <line class="r15 suave" x1="1501" y1="676" x2="1501" y2="1209" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-dasharray="0, 11"/>


		    <line class="r15" x1="1227" y1="361" x2="1227" y2="521" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-dasharray="0, 11"/>
		    <line class="r15 suave" x1="502" y1="614" x2="1457" y2="614" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-dasharray="0, 11"/>

		</svg>

	</div>
	</div>

	<div class="clearfix"></div>
</section>

<section id="voce-e-show" class="container-fluid">

	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<h2 class="titulo col-md-12">O que é <strong>show</strong> pra você?</h2>
			<p class="chamada col-md-9">Para nós, show é ver nossos alunos seguindo seus sonhos e  construindo um mundo melhor, com a bagagem de valores e atitudes que inspirem outras pessoas a fazerem o mesmo em suas vidas.</p>
		</div>
	</div>

	<div class="row">
		<ul class="valores container">
			<div class="row">
				<li class="col-md-4">
					<h2>Ser <strong>Proativo</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-proativo.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> uma postura proativa condiciona o pensamento
		para identificar situações e oportunidades com antecedência. O proativo gera mudanças no ambiente em que estiver, pois tem comprometimento e persevera de acordo com seus próprios valores.</p>
				</li>
				<li class="col-md-4">
					<h2>Ser <strong>Solidário</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-solidario.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> significa sentir-se feliz com o bem-estar dos que estão à sua volta. Os solidários são mestres em reconhecer a necessidade alheia e partilham seus recursos sem esperar recompensas. É uma atitude inspiradora que tem a capacidade de mudar o mundo, pessoa por pessoa.</p>
				</li>
				<li class="col-md-4 diferente">
					<h2>Ser <strong>Inovador</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-inovador.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> um inovador questiona tudo. Tem uma curiosidade insaciável sobre as coisas ao seu redor e adora contrapor ideias totalmente diferentes. Reconhece necessidades à sua volta e não descansa até ter uma solução. Nesse processo está sempre aprendendo com seus erros.</p>
				</li>
				<li class="col-md-4">
					<h2>Ser <strong>Ético</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-etico.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> a honestidade consiste em respeitar as regras morais e éticas mas, acima disso, ser verdadeiro com seus próprios valores, pois nem sempre as convenções sociais são corretas. É um valor que nos traz muito caráter quando combinado com a benevolência.</p>
				</li>
				<li class="col-md-4">
					<h2>Ser <strong>Humilde</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-humilde.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> ser humilde não é se colocar abaixo dos outros, é ver a todos como iguais. É ter consciência de que limitações não depreciam assim como qualidades não exaltam ninguém. Quem desenvolve esse traço dá valor às coisas simples, encontrando-se feliz com mais frequência.</p>
				</li>
				<li class="col-md-4">
					<h2>Ser <strong>Sustentável</strong></h2>
					<img src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-icon-sustentavel.png">
					<p class="col-md-9"><strong>É SHOW porque</strong> ter um pensamento sustentável é ver à frente, é saber que é possível aproveitar o que o planeta nos dá sem tirar esses benefícios das futuras gerações. Ser sustentável é ter essa consciência guiando as atitudes cotidianas, sabendo fazer do mundo um lugar melhor.</p>
				</li>
			</div>

			<div class="clearfix"></div>
		</ul>
	</div>

	<div class="twitter">
		<div class="row">
			<div class="col-md-offset-1 col-md-4 wrap-form">
				<h2 class="r15">E então, <br>nos diga qual <br><strong>atitude</strong> você acha <br><strong class="show">show</strong> <br>e por quê</h2>
				<form class="form-show js" action="">
					<label for="sr">Ser</label>
					<div class="wrap-input">
						<input type="text" id="sr" name="sr" placeholder="CRIATIVO">
					</div>
					<label for="shw">É <strong>show</strong> porque...</label>
					<div class="wrap-input">
						<textarea name="shw" id="shw" placeholder="EU POSSO ESCREVER TEXTOS DIVERTIDOS"></textarea>
					</div>
					<input type="submit" class="ani-02" disabled>
				</form>
			</div>
			<div class="col-md-6 tweets">
				<button class="dir ani-02"></button>
				<button class="esq ani-02"></button>

				<div class="col-md-offset-1 col-md-10 alpha omega">
					<ul>
						<li class="col-md-4">
							<div class="wrap-foto">
								<img src="<?php bloginfo('template_url') ?>/img/2017/ph-foto-twitter.png">
							</div>
							<h2>Sofia Montgomery</h2>
							<p>Dica de como ter vasos suspensos com estilo e design <span id="hash">#dica</span> <span id="hash">#decoração</span> <span id="hash">#design</span> <span id="hash">#arquitetura</span> <span id="url"><a href="https://goo.gl/p/BRONzJFAlBK/">https://goo.gl/p/BRONzJFAlBK/</a></span> <span id="hash">#Bang</span> <span id="hash">#SKTT1</span></p>
							<button id="like" class="ani-04"></button>
						</li>
						<li class="col-md-4">
							<div class="wrap-foto">
								<img src="<?php bloginfo('template_url') ?>/img/2017/ph-foto-twitter.png">
							</div>
							<h2>Sofia Montgomery</h2>
							<p>Dica de como ter vasos suspensos com estilo e design <span id="hash">#dica</span> <span id="hash">#decoração</span> <span id="hash">#design</span> <span id="hash">#arquitetura</span> <span id="url"><a href="https://goo.gl/p/BRONzJFAlBK/">https://goo.gl/p/BRONzJFAlBK/</a></span> <span id="hash">#Bang</span> <span id="hash">#SKTT1</span></p>
							<button id="like" class="ani-04"></button>
						</li>
						<li class="col-md-4">
							<div class="wrap-foto">
								<img src="<?php bloginfo('template_url') ?>/img/2017/ph-foto-twitter.png">
							</div>
							<h2>Sofia Montgomery</h2>
							<p>Dica de como ter vasos suspensos com estilo e design <span id="hash">#dica</span> <span id="hash">#decoração</span> <span id="hash">#design</span> <span id="hash">#arquitetura</span> <span id="url"><a href="https://goo.gl/p/BRONzJFAlBK/">https://goo.gl/p/BRONzJFAlBK/</a></span> <span id="hash">#Bang</span> <span id="hash">#SKTT1</span></p>
							<button id="like" class="ani-04"></button>
						</li>
					</ul>
					
				</div>
			</div>
		</div>
	</div>


</section>

<section id="atracoes" class="container-fluid">

	<div class="topo row"></div>

	<h2 class="titulo col-md-offset-1">Atrações <span id="show-neon">Show</span></h2>

	<div class="row">
		<ul class="col-md-offset-1 col-md-11">
			<li class="karnal col-md-7">
				<figure class="col-md-6 col-md-push-6">
					<img nopin="nopin" class="ani-02" src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-leandro-karnal.png">
				</figure>
				<div class="col-md-6 col-md-pull-6">
					<blockquote class="frase">Ver um colégio tão dedicado à educação emocional de seus alunos é <strong>show</strong></blockquote>
					<h2>Leandro <strong>Karnal</strong></h2>
					<p class="cv col-md-offset-1 col-md-11">Leandro Karnal é professor doutor desde 1996. Possui pós-doutorados pela Unam (México) e pelo CNRS (Paris). Sua formação cruza História Cultural, Antropologia e Filosofia. Também é autor de livros que tratam sobre a história dos países e sobre o ensino de História.</p>
				</div>
			</li>
			<li class="ballas col-md-7">
				<figure class="col-md-6">
					<img nopin="nopin" class="ani-02" class="ani-04" src="<?php bloginfo('template_url') ?>/img/2017/encontro-da-vinci-2017-marcio-ballas.png">
				</figure>
				<div class="col-md-6">
					<blockquote class="frase">Crescer acreditando de verdade em seus sonhos e em um mundo melhor é <strong>show</strong></blockquote>
					<h2>Marcio <strong>Ballas</strong></h2>
					<p class="cv col-md-11 alpha">Marcio Ballas é palhaço, ator, diretor e dramaturgo especializado na linguagem de clown e improviso teatral, formado em Marketing e pós-graduado em Psicodrama é criador de espetáculos de improviso e já participou de vários festivais pelo mundo. Além de já ter feito parte do "Palhaços Sem Fronteiras" se apresentando em Madagascar (África) e em um campo de refugiados durante a guerra de Kosovo.</p>
				</div>
			</li>
		</ul>
	</div>
	
</section>

<section id="inscricao" class="container-fluid linhas-show">

	<div class="topo row"></div>

	<h2 class="titulo col-md-offset-1">Inscrição <span id="show-neon">Show</span></h2>

	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<div class="etapa-1">
					<div class="col-md-offset-1 col-md-10">
						<div class="wrap-infos">
							<p>Informe a Matrícula do Aluno ou o CPF do Contratante para se inscrever e receber o seu ingresso por e-mail.</p>
							<p>Não fique de fora desse show. <strong>Vagas limitadas!</strong></p>
						</div>
						<form class="form-show js" action="<?php bloginfo('url') ?>/verifica-matricula">

							<label for="mtcpf">Nome</label>
							<div class="wrap-input">
								<input type="text" id="nmln" name="nmln">
							</div>
							<label for="mtcpf">Matrícula ou CPF</label>
							<div class="wrap-input">
								<input type="text" id="mtcpf" name="mtcpf">
							</div>
							<input type="submit" class="ani-02" value="OK" disabled>
							
						</form>
						<div class="observacoes">
							<h2>Observações</h2>
							<ul>
								<li>Cada aluno tem direito a uma entrada para si e duas cortesias para acompanhantes;</li>
								<li>Após preencher o formulário, o ingresso será enviado para o e-mail vinculado à matrícula ou CPF;</li>
								<li>Para a entrada no evento, o ingresso poderá ser apresentado impresso ou na tela do celular.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="etapa-2 invi">
					<div class="col-md-offset-1 col-md-10">
						<div class="wrap-infos">
							<h2>Dados para inscrição</h2>
							<p>Confirme os dados do aluno e informe os dados dos convidados.</p>
						</div>
						<form class="form-show js" action="<?php bloginfo('url') ?>/inscrever">

							<h3><span id="tgt-nome"></span></h3>
							<input type="hidden" value="Augusto Lima de Carvalho" name="nmln" id="nmln">
							<input type="hidden" value="" name="mtcpf" id="mtcpf">
							<p class="matricula"><strong>Matrícula:</strong> <span id="tgt-matricula"></span></p>
							<label for="ddsok" class="check-label">
								<input type="checkbox" id="ddsok" name="ddsok">
								<span>Os <strong>Dados de Aluno</strong> estão corretos</span>
								<label for="ddsok" generated="true" class="error"></label>
							</label>
							<label for="cnfrm" class="check-label">
								<input type="checkbox" id="cnfrm" name="cnfrm">
								<span>O aluno participará do evento</span>
							</label>
							
							<div class="divisoria"></div>
							
							<label for="ml">E-mail</label>
							<div class="wrap-input">
								<input type="text" id="ml" name="ml">
							</div>
							
							<div class="divisoria"></div>
							
							<div class="col-xs-4 avatar" data-conv="prcvdd">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
								<svg version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
									 x="0px" y="0px" width="100%" viewBox="0 0 190.7 190.7" style="enable-background:new 0 0 190.7 190.7;"
									 xml:space="preserve">
								<style type="text/css">
									.path-convidado{fill:#ccc;}
								</style>
								<defs>
								</defs>
								<g>
									<path class="path-convidado ani-06" d="M190.7,95.4C190.7,42.8,147.9,0,95.4,0C42.8,0,0,42.8,0,95.4c0,20.9,6.7,40.8,19.3,57.5
										c4.4,5.8,9.5,11.1,15.1,15.7c0.3,0.3,0.6,0.6,1,0.8c7.8,6.3,16.5,11.4,25.8,15c0.2,0.1,0.5,0.2,0.7,0.3c2.1,0.8,4.2,1.5,6.3,2.1
										l0,0c2.9,0.8,6-0.9,6.8-3.8c0.9-2.9-0.8-6-3.7-6.9c-0.8-0.2-1.6-0.5-2.4-0.8v-29c0-3.1-2.5-5.5-5.5-5.5s-5.5,2.5-5.5,5.5v24.4
										c-5-2.5-9.6-5.4-13.9-8.8v-13.7c0-23.9,19.5-43.4,43.4-43.4h16.3c23.9,0,43.4,19.5,43.4,43.4V162c-4.3,3.4-9,6.3-13.9,8.8v-24.4
										c0-3.1-2.5-5.5-5.5-5.5s-5.5,2.5-5.5,5.5v29c-8.3,2.8-17.2,4.3-26.5,4.3c-3.1,0-5.5,2.5-5.5,5.5s2.5,5.5,5.5,5.5
										c11.8,0,23.1-2.2,33.5-6.1c0.3-0.1,0.6-0.2,0.9-0.4c9.3-3.6,17.9-8.7,25.5-14.8c0.4-0.3,0.8-0.6,1.1-0.9
										C177.4,151,190.7,124.7,190.7,95.4z M103.5,93.8H87.2c-30,0-54.4,24.4-54.4,54.4v3.4c-13.6-15.2-21.7-35.1-21.7-56.3
										c0-46.5,37.8-84.3,84.3-84.3s84.3,37.8,84.3,84.3c0,21.7-8.2,41.4-21.7,56.4v-3.5C157.9,118.2,133.5,93.8,103.5,93.8z"/>
									<path class="path-convidado ani-06" d="M95.4,20.4c-19.4,0-35.1,15.7-35.1,35.1S76,90.6,95.4,90.6s35.1-15.7,35.1-35.1S114.7,20.4,95.4,20.4z
										 M95.4,79.6c-13.2,0-24-10.8-24-24s10.8-24,24-24c13.2,0,24,10.8,24,24S108.6,79.6,95.4,79.6z"/>
								</g>
								</svg>

							</div>
							<div class="col-xs-8 omega">
								<label class="lbl-convidado"for="prcvdd">
									Primeiro Convidado
								</label>
								<div class="wrap-input special">
									<input type="text" id="prcvdd" name="prcvdd">
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-xs-4 avatar" data-conv="sgcvdd">
								<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
								<svg version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
									 x="0px" y="0px" width="100%" viewBox="0 0 190.7 190.7" style="enable-background:new 0 0 190.7 190.7;"
									 xml:space="preserve">
								<style type="text/css">
									/*.path-convidado{fill:#1095C4;}*/
									.path-convidado{fill:#ccc;}
								</style>
								<defs>
								</defs>
								<g>
									<path class="path-convidado ani-06" d="M190.7,95.4C190.7,42.8,147.9,0,95.4,0C42.8,0,0,42.8,0,95.4c0,20.9,6.7,40.8,19.3,57.5
										c4.4,5.8,9.5,11.1,15.1,15.7c0.3,0.3,0.6,0.6,1,0.8c7.8,6.3,16.5,11.4,25.8,15c0.2,0.1,0.5,0.2,0.7,0.3c2.1,0.8,4.2,1.5,6.3,2.1
										l0,0c2.9,0.8,6-0.9,6.8-3.8c0.9-2.9-0.8-6-3.7-6.9c-0.8-0.2-1.6-0.5-2.4-0.8v-29c0-3.1-2.5-5.5-5.5-5.5s-5.5,2.5-5.5,5.5v24.4
										c-5-2.5-9.6-5.4-13.9-8.8v-13.7c0-23.9,19.5-43.4,43.4-43.4h16.3c23.9,0,43.4,19.5,43.4,43.4V162c-4.3,3.4-9,6.3-13.9,8.8v-24.4
										c0-3.1-2.5-5.5-5.5-5.5s-5.5,2.5-5.5,5.5v29c-8.3,2.8-17.2,4.3-26.5,4.3c-3.1,0-5.5,2.5-5.5,5.5s2.5,5.5,5.5,5.5
										c11.8,0,23.1-2.2,33.5-6.1c0.3-0.1,0.6-0.2,0.9-0.4c9.3-3.6,17.9-8.7,25.5-14.8c0.4-0.3,0.8-0.6,1.1-0.9
										C177.4,151,190.7,124.7,190.7,95.4z M103.5,93.8H87.2c-30,0-54.4,24.4-54.4,54.4v3.4c-13.6-15.2-21.7-35.1-21.7-56.3
										c0-46.5,37.8-84.3,84.3-84.3s84.3,37.8,84.3,84.3c0,21.7-8.2,41.4-21.7,56.4v-3.5C157.9,118.2,133.5,93.8,103.5,93.8z"/>
									<path class="path-convidado ani-06" d="M95.4,20.4c-19.4,0-35.1,15.7-35.1,35.1S76,90.6,95.4,90.6s35.1-15.7,35.1-35.1S114.7,20.4,95.4,20.4z
										 M95.4,79.6c-13.2,0-24-10.8-24-24s10.8-24,24-24c13.2,0,24,10.8,24,24S108.6,79.6,95.4,79.6z"/>
								</g>
								</svg>

							</div>
							<div class="col-xs-8 omega">
								<label class="lbl-convidado"for="sgcvdd">
									Segundo Convidado
								</label>
								<div class="wrap-input special">
									<input type="text" id="sgcvdd" name="sgcvdd">
								</div>
							</div>
							<div class="clearfix"></div>

							<input type="hidden" name="crs" id="crs" value="" />
							<input type="hidden" name="action" value="new_post" />
							<?php wp_nonce_field( 'new-post' ); ?>

							<input type="submit" class="ani-02" value="OK" disabled>
						</form>
					</div>
				</div>
				<div class="etapa-3 invi">
					<div class="col-md-offset-1 col-md-10">
						<div class="wrap-infos">
							<h2>Confirmação de Inscrição</h2>
							<p>Confira a caixa de e-mail de <span id="tgt-email" class="email">aug********lho@gmail.com</span> e verifique se seu ingresso já chegou. <strong>Nos vemos dia 12!</strong></p>
						</div>
						<form class="form-show js" action="<?php bloginfo('url') ?>/reenvia-ingresso">

							<p>Não recebeu seu ingresso ainda?</p>
							<button id="fecha-etapa" class="ani-02">Ok, recebi meu ingresso</button>

							<input type="hidden" name="nmln" id="nmln">
							<input type="hidden" name="ml" id="ml">
							<input type="hidden" name="mtcpf" id="mtcpf">
							<input type="hidden" name="cnfrm" id="cnfrm">
							<input type="hidden" name="prcvdd" id="prcvdd">
							<input type="hidden" name="sgcvdd" id="sgcvdd">

							<input type="submit" class="ani-02" value="Enviar novamente">
							
							<div class="divisoria"></div>

							<small><strong>Importante:</strong> O comprovante pode demorar em torno de 5 minutos para entrar na caixa de e-mail.</small>
							
						</form>
					</div>
				</div>
				<div class="loading invi">
					<div class="col-md-offset-1 col-md-10">
						<div class="img"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<div class="fim row">
		<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
		<svg version="1.1"
			 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
			 x="0px" y="0px" width="100%" viewBox="0 0 2237.6 599.5" style="enable-background:new 0 0 2237.6 599.5;"
			 xml:space="preserve">
		<style type="text/css">
			.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#1095C4;}
		</style>
		<polygon class="st0" points="2237.6,0 0,599.5 2237.6,599.5 "/>
		</svg>

	</div>

</section>


<?php endif; ?>

<?php get_footer(); ?>