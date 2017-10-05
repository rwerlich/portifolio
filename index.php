<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/icon.png" />
        <title>Werlich Portfolio</title>
    </head>
    <body>
        <div class="container">
            <header id="main-header">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <img src="img/mask.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="d-flex flex-column">
                            <div class="p-5 bg-inverse text-white">
                                <div class="name d-flex flex-row justify-content-between align-items-center">
                                    <h1 class="display-4">Rodrigo Werlich</h1>
                                    <div><i class="fa fa-github"></i></div>
                                </div>
                            </div>
                            <div class="p-4 bg-dark">Full Stack Web Developer</div>
                            <div>
                                <div class="d-flex flex-row text-white align-items-stretch text-center">
                                    <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                                        <i class="fa fa-home d-block"></i> Home
                                    </div>
                                    <div class="port-item p-4 bg-success" data-toggle="collapse" data-target="#resume">
                                        <i class="fa fa-graduation-cap d-block"></i> Resumo
                                    </div>
                                    <div class="port-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                                        <i class="fa fa-folder-open d-block"></i> Trabalhos
                                    </div>
                                    <div class="port-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                                        <i class="fa fa-envelope d-block"></i> Contato
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HOME -->
            <div id="home" class="collapse show">
                <div class="card card-block card-primary text-white py-5">
                    <h2>Bem Vindo</h2>
                    <p class="lead">Esse site tem como finalidade divulgar meu trabalho e falar sobre como é a vida de um desenvolvedor web.</p>
                </div>
                <div class="card card-block py-5">
                    <h3>Minhas Habilidades</h3>
                    <p>Abaixo vou listar as tecnologias que mais utilizo no meu dia a dia de desenvolvedor web. Me considero melhor no back-end, porém o framework Bootstrap me ajuda muito a fazer layouts bem legais. No back-end gosto muito de desenvolver em PHP, por que é fácil de usar, tem muita documentação o que faz ter uma curva de crescimento muito rápida, além de possuir muitos frameworks que auxiliam bastante na produtividade, o meu preferido é p Symfony. O banco de dados que tenho mais familiaridade é o MySql.</p>
                    <p>Na minha listagem podem notar que não tenho conhecimento 100% de nenhuma tecnologia, pois a cada dia elas estão se aprimorando e nem sempre temos tempo de ir acompanhando. Me considero desenvolvedor Full Stack por ter conhecimentos no front-end e no back-end, porém esse conhecimento jamais será 100%.</p>
                    <hr>
                    <h4>HTML5</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:90%"></div>
                    </div>
                    <h4>CSS3</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:80%"></div>
                    </div>
                    <h4>Bootstrap</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:90%"></div>
                    </div>
                    <h4>JavaScript</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:70%"></div>
                    </div>
                    <h4>jQuery</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:70%"></div>
                    </div>
                    <h4>PHP</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:90%"></div>
                    </div>
                    <h4>Symfony</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:75%"></div>
                    </div>
                    <h4>SQL</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:85%"></div>
                    </div>
                    <h4>MySql</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:85%"></div>
                    </div>
                    <h4>Doctrine</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width:75%"></div>
                    </div>
                </div>
            </div>
            <!-- RESUME -->
            <div id="resume" class="collapse">
                <div class="card card-block card-success text-white py-5">
                    <h2>Sobre mim</h2>
                    <p>Me chamo Rodrigo, tenho
                    <?php $hoje = date("Y-m-d");$data1 = new DateTime($hoje);$data2 = new DateTime( '1995-02-09' );$intervalo = $data1->diff($data2);echo "{$intervalo->y}";?>
                        anos, sou casado com a Camila e temos um filho o Raul.
                    </p>
                    <p>Sempre gostei muito de tecnologia, mais especificamente computadores e sonhava um dia fazer meus próprios softares. Atualmente sou graduando de Ciência da Computação na UNIVALI e gosto de fazer muitos cursos online para complementar o aprendizado da faculdade.
                    Gosto de unir código bem escrito com performance para ter um bom resultado.
                    </p>
                </div>
                <div class="card card-block py-5">
                    <h3>Onde eu trabalhei?</h3>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Câmara Municipal de Florianópolis</h4>
                                <p class="card-text">Desenvolvimento do SISGG (Sistema Gerenciador de Gabinete) em PHP 7 (back end), HTML 5 com JavaScript (front end), Bootstrap e Jquey (Frameworks).</p>
                                <p class="p-2 mb-3 bg-inverse text-white">
                                    Cargo: Desenvolvedor
                                </p>                                
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted">Período 01/2017 - Atual</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Conselho Regional de Farmácia (CRF-SC)</h4>
                                <p class="card-text">Desenvolvimento de sistemas internos e para os farmaceuticos com uso de PHP, HTML5, CSS, JavaScript e Bootstrap.</p>
                                <p class="p-2 mb-3 bg-inverse text-white">
                                    Cargo: Estágiario
                                </p>                                
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted">Período 03/2016 - Atual</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">4Vision Lab (Univali)</h4>
                                <p class="card-text">Pesquisa e desenvolvimento na área de Internet das Coisas, Java, PHP, CSS, HTML 5 JavaScript e o framework AngularJS.</p>
                                <p class="p-2 mb-3 bg-inverse text-white">
                                    Cargo: Bolsista
                                </p>                                
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted">Período 02/2014 - 07/2015</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">E-tec Brasil (UFSC)</h4>
                                <p class="card-text">Pesquisa e desenvolvimento de programação e web design de cadernos didáticos para dispositivos móveis através de programação web, HTML 5, bem como uso dos recursos de JQuery Mobile.</p>
                                <p class="p-2 mb-3 bg-inverse text-white">
                                    Cargo: Bolsista
                                </p>                                
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted">Período 02/2014 - 07/2015</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WORK -->
            <div id="work" class="collapse">
                <div class="card card-block card-warning text-white py-5">
                    <h2>My Porfolio</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, placeat.</p>
                </div>
                <div class="card card-block py-5">
                    <h3>What Have I Built?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, inventore atque dolore blanditiis sit repudiandae!</p>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=251" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=252" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=253" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=254" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=255" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=256" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=257" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=257" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="https://unsplash.it/1200/768.jpg?image=258" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=258" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT -->
            <div id="contact" class="collapse">
                <div class="card card-block card-danger text-white py-5">
                    <h2>Contato</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, placeat.</p>
                </div>
                <div class="card card-block py-5">
                    <h3>Get In Touch</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, inventore atque dolore blanditiis sit repudiandae!</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon bg-danger text-white">
                                <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control bg-inverse text-white" placeholder="Nome" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon bg-danger text-white">
                                <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control bg-inverse text-white" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon bg-danger text-white">
                                <i class="fa fa-pencil"></i>
                                </span>
                                <textarea rows="5" class="form-control bg-inverse text-white" placeholder="Mensagem" required></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-danger btn-block btn-lg" value="Enviar">
                    </form>
                </div>
            </div>
            <footer class="bg-inverse text-white">
                &copy; <?=date('Y');?> Rodrigo Werlich
            </footer>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ekko-lightbox.js"></script>
        <script>
            $('.port-item').click(function(){
              $('.collapse').collapse('hide');
            });
            
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
    </body>
</html>