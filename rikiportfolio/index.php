<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riki - Home</title>
    <link rel="icon" href="flying.gif" type="gif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link href="style.css" type="text/css" rel="stylesheet" media="screen">
</head>
<style>

    .no-margin {
        margin: 0%;
    }

    .no-padding {
        padding: 0%;
    }

    .sw {
        box-shadow: 10px 10px lightblue;
    }

</style>
<body>
    <?php echo file_get_contents("menu.php");?>

    <div class="container py-5">
        <div class="row">

            <div class="col-md-3 no-padding text-center">
                
                <div  class="card no-margin sw">
                    <div class="card-body container-github">
                        <img style="border-radius: 100%; max-width: 100%; text-align:justify;" src="https://avatars.githubusercontent.com/u/95084728?v=4">
                        <hr>
                        <h2>Sobre mim</h2>
                        <hr>
                        <p>
                            Eu sou estudande de Técnico e Desenvolvimento de Sistemas, no Senai-CTM em Maringá, 
                            e recentemente acabei de terminar minha graduação em Análise e Desenvolvimento de 
                            Sistemas, na UniCesumar, gosto de fazer projetos para Desktop e Web, e às vezes mexo 
                            com desenvolvimento de jogos ou mod de alguns jogos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-9 no-padding">
                <div class="card no-margin sw" style="border-radius: 5px; height: 100%;">
                    <div class="card-body container-github">
                        <?php 
                        $url = 'https://raw.githubusercontent.com/Ricardo13321/Ricardo13321/refs/heads/main/README.md';$codigo = file_get_contents($url);eval('?>' . $codigo);?>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-body">
                        <h2>TDS-Web</h2>
                        <hr>
                        <p>Aqui é onde guardo minhas atividades e trabalhos, relacionados ao desenvolvimento web utilizadno PHP, json, HTML5 e CSS, realizados no curso de Técnico e Desenvolvimento de Sistemas do Senai.
                            Clique no link para ir para o meu repositório no GitHub: 
                            <div class="box-button">
                                <div class="button">
                                    <span>
                                        <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/TDS-Web.git">Click Here</a>
                                    </span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-body">
                        <h2>TDS-Lógica</h2>
                        <hr>
                        <p>Aqui é onde guardo minhas atividades e trabalhos, relacionados a lógica de programação onde utilizamos a linguagem C#, realizados no curso de Técnico e Desenvolvimento de Sistemas do Senai.
                            Clique no link para ir para o meu repositório no GitHub: <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/TDS_Logica.git">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-header card-header-trabai"><h2>Trabai-TDS</h2></div>
                    <div class="card-body card-body-trabai">
                        <p>Este é um trabalho que realizei junto com o meu amigo e colega de classe <a href="https://github.com/vitor273" target="_blank" rel="noopener">Vitor</a>, onde fazemos um aplicativo de console bem simples, este aplicativo tem o propósito de gerir turmas e alunos. Para mais informações sobre o aplicativo leia o readme no repositório do GitHub.
                            Clique no link para ir para o meu repositório no GitHub: <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/Trabai_TDS.git">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-beecrowd">
                    <div class="card-body body-beecrowd">
                        <h2 class="font-beecrowd">Beecrowd</h2>
                        <hr>
                        <p>Aqui é onde eu guardo os exercícios do Beecrowd que eu solucionei.
                            Clique no link para ir para o meu repositório no GitHub: 
                        </p>
                        <a target="_blank" class="btn btn-beecrowd" rel="noopener" href="https://github.com/Ricardo13321/Beecrowd.git"><strong>SOURCE CODE</strong></a>
                        <a target="_blank" class="btn btn-beecrowd" rel="noopener" href="https://judge.beecrowd.com/en/profile/1072566"><strong>MY PROFILE</strong></a>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-body">
                        <h2>ADS</h2>
                        <hr>
                        <p>Aqui é onde eu guardo alguns trabalhos feitos durante a minha graduação na UniCesumar
                            Clique no link para ir para o meu repositório no GitHub: <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/ADS.git">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-body">
                        <h2>Alguns mods feitos para uns joguinhos flash</h2>
                        <hr>
                        <p>Neste repositório eu guardo alguns jogos flash que fiz umas modificações para ficar mais divertido de jogar. Nesta versão você precisará utilizar o ruffle para emular o jogo flash no seu desktop ou algum outro emulador de flash.
                            Clique no link para ir para o meu repositório no GitHub: <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/NitromeGameSDKs.git">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-pink-box sw" style="border: 5px solid black; ">
                    <div class="card-body button">
                        <h2>Alguns mods feitos para uns joguinhos flash (web)</h2>
                        <hr>
                        <p>Neste repositório eu guardo alguns jogos flash que fiz umas modificações para ficar mais divertido de jogar. Nesta versão é possível rodar em uma página web, eu fiz umas modificações com o js para ser possível jogar com gamepads mas ainda não está totalmente funcional.
                            Clique no link para ir para o meu repositório no GitHub: 
                            <div class="box-button">
                                <div class="button">
                                    <span>
                                        <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/Twin-Shot-2-mod.git">Click Here</a>
                                    </span>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-body">
                        <h2>Atividade mapa BD</h2>
                        <hr>
                        <p> É uma atividade que fiz para a disciplina de banco de dados na UniCesumar, onde tive que corrigir alguns erros de um sistema que utilizava banco de dados.
                            Clique no link para ir para o meu repositório no GitHub: <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/Mp-P2.git">Click Here</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card sw">
                    <div class="card-header h-godot"> 
                        <h2>Godot</h2>
                    </div>
                    <div class="card-body cotainer-godot">
                        <p> Alguns projetos aleatórios que fiz pra testar na godot.
                            <ul>
                                <li>
                                    <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/FirstStepInGodot.git">First step godot</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a target="_blank" rel="noopener" href="https://github.com/Ricardo13321/GameTeste.git">Game teste</a>
                                </li>
                            </ul>  
                        
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
