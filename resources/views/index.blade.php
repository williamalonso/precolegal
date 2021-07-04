@extends('layout.site')
@section('titulo', 'Preço Legal')
@section('conteudo')
    

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bem-vindo ao Preço Legal!</div>
                <div class="masthead-heading text-uppercase">economize conosco</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#about">saiba mais</a>
            </div>
        </header>
        <!-- O que é -->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">O que é</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/novo1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Introdução</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">É um sistema onde usuários podem inserir preços dos combustíveis de sua região. É possível visualizar os valores cadastrados de forma crescente, por região, etc!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/novo2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Inserindo valores</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Para inserir o valor de um posto próximo, basta clicar na aba "inserir" no menu. Será exibido um pequeno campo de formulário, bastando ser preenchido para contribuir com a comunidade.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/novo3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Visualizar valores</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Para visualizar os valores, basta clicar na aba "visualizar" no menu. Será exibida uma tabela com todos os valores cadastrados pelos próprios usuários! :)</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/novo4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Filtrar Resultados</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Para filtrar resultados, você pode digitar na caixa de texto logo acima da tabela. Você também pode clicar na seta azul ao lado dos combustíveis para ordenar os valores!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Seja parte
                                <br />
                                de nossa
                                <br />
                                história!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nosso time</h2>
                    <h3 class="section-subheading text-muted">Idealizadores do projeto</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/novo1.jpg" alt="..." />
                            <h4>Douglas Motta</h4>
                            <p class="text-muted">Diretor de Operações</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img/team/novo2.png" alt="..." />
                            <h4>William Alonso</h4>
                            <p class="text-muted">Diretor de Tecnologias</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        
        <!-- Contato -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contate-nos</h2>
                    <h3 class="section-subheading text-muted">Preencha o campo abaixo para nos enviar um e-mail.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Seu Nome *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Um nome é necessário.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Seu E-mail *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Um e-mail é necessário.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">E-mail não é válido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Seu Número *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Um número de celular é necessário.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Sua mensagem *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Uma mensagem é necessário.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Formulário enviado com sucesso!</div>
                            Para ativar este formulário, inscreva-se em
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar Mensagem</button></div>
                </form>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Em construção!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    :)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Mudanças</button>
                </div>
                </div>
            </div>
        </div>

    
@endsection