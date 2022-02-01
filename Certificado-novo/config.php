<?php
    // if(!isset($_SERVER['HTTPS'])) {
    //     Header("HTTP/1.1 301 Moved Permanently");
    //     Header("Location: https://www.faculdadefama.edu.br/certificados/".$_SERVER['QUERY_STRING']);
    //     exit();
    // }
    function site_url() {
         echo "http://www.faculdadefama.edu.br/certificados/";
        // echo "http://localhost/fculdadefama.edu.br-certificados/";
    }
    
    error_reporting(E_ERROR);
    

    include('html2pdf/html2pdf.class.php');


    // //107.180.51.17
    // $conect = mysqli_connect("192.241.249.32", "certificados", "a296ba44601e2948", "certificados");
    
    // if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


    // $queryCursos = "SELECT * FROM cursos ORDER BY nome";

    // $result = $conect->query($queryCursos);


    $gerar = false;
    if(!empty($_POST['nome'])){
        // $erro = true;
        

        // $cpf = str_replace('.', '', $_POST['cpf']);

        // $queryAlunos = "SELECT * FROM alunos WHERE cpf = '{$cpf}' AND cursos_id = '{$_POST['cursos_id']}' LIMIT 1";


        

        // $resultA = $conect->query($queryAlunos);


        // if(!empty($resultA->num_rows)){
            // $erro = false;

            // $aluno = $resultA->fetch_object();

            // $queryCurso = $conect->query("SELECT * FROM cursos WHERE id = '{$_POST['cursos_id']}' LIMIT 1");

            // $resCurso = $queryCurso->fetch_object();

            // $texto = ("Certificamos que {$aluno->nome} {$resCurso->texto} <br >");

            // $txtData = ($resCurso->data);
            
            // $conect->query("UPDATE alunos SET baixou = 1, dt_acesso = NOW() WHERE id = {$aluno->id} LIMIT 1");


            // $html = '
            // <link rel="stylesheet" type="text/css"  href="login-box.css" />
             
            // <div class="bgCertificado">
            //     <p class="texto">Certificado de Solidariedade e Parceria Certificamos que durante o ano de 2019 ___________________________________, 
            //     contribuiu para que centenas de mulheres com problemas associados ao uso de drogas ou com síndrome de dependência,
            //      bem como seus familiares, recebessem apoio, orientação, encaminhamentos, suporte emocional e espiritual e acolhimento para tratamento, 
            //      com a promoção de qualidade de vida, inclusão social e reinserção familiar. A Comunidade Terapêutica Missão Resgate da Paz, agradece e 
            //      reconhece a importância dessa parceria para a manutenção e expansão de suas ações. Goiânia, dezembro/2019 Fabiano Pinto Presidente</p>
            //     <p class="date">'.$txtData.'</p>
            // </div>';
    $nome = $_POST["nome"];
    $html = '
             <link rel="stylesheet" type="text/css"  href="login-box.css" />
             
            <div class="bgCertificado">
            <p class="texto">'.$nome.'</p>
             </div>';

            $html2pdf = new HTML2PDF('L','A4','pt', true, 'UTF-8', 2);

            $html2pdf->writeHTML($html); 
            /* I: Abre o pdf gerado no navegador. 
                     D: Abre a janela para você realizar o download do pdf. 
                     F: Salva o pdf em alguma pasta do servidor. */
            $html2pdf->Output('certificado.pdf', 'D');

           
        

    }

    //mysqli_close($conect);

?>