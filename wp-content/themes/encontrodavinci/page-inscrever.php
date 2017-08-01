<?php 

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post" && $_POST['nmln'] != "") {

        // Do some minor form validation to make sure there is content

        $new_post = array(
            'post_title' => wp_strip_all_tags( $_POST['nmln'] ),
            'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
            'post_type' => 'inscricoes'  //'post',page' or use a custom post type if you want to
        );

        //save the new post
        $pid = wp_insert_post($new_post);

        $nome = $_POST['nmln'];
        $nick = explode( " ", $nome, 2 );
        $nick = $nick[0];
        $matricula = $_POST['mtcpf'];
        $email = $_POST['ml'];
        $presenca = $_POST['cnfrm'];
        $convidado_01 = $_POST['prcvdd']; 
        $convidado_02 = $_POST['sgcvdd'];

        //insert taxonomies
        if ($pid) {
            add_post_meta($pid, 'matricula', $matricula);
            add_post_meta($pid, '_matricula', 'field_597fa0b7feb0d');

            add_post_meta($pid, 'email', $email);
            add_post_meta($pid, '_email', 'field_597faacfcf1a6');

            add_post_meta($pid, 'presenca', $presenca);
            add_post_meta($pid, '_presenca', 'field_597fa102feb0e');

            add_post_meta($pid, 'convidado_01', $convidado_01);
            add_post_meta($pid, '_convidado_01', 'field_597fa145feb0f');

            add_post_meta($pid, 'convidado_02', $convidado_02);
            add_post_meta($pid, '_convidado_02', 'field_597fa18dfeb10');
        }
        else
        {
            die('A inscrição não foi criada');
        }


        $url = get_bloginfo('url');
        $tUrl = get_bloginfo('template_url');

        $nomeEmpresa = "Leonardo da Vinci";
        // $emailEmpresa = "noreply@leonardoonline.com.br";
        $emailEmpresa = "raul@humanostud.io";


        $msgParaAdmin ="
        <!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
        <div style='width: 100%; b: #fffbce; padding: 50px 0;'>
            <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #001d46; border-spacing: 0'>
                <tr style='background: #001d46; margin: 0; padding: 0'>
                    <td  style='font-family:Arial, sans; height: 70px; text-align: center;'>
                        <img src='$tUrl/img/2017/encontro-da-vinci-2017-logo-mail.png' style='margin: 20px 0 -50px'>
                    </td>
                </tr>
                <tr>
                    <td  style='font-family:Arial, sans; padding: 50px 15px 35px'>
                        <div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
                            <p>
                                Um novo aluno se inscreveu: 
                            </p>
                            <br>
                            <p><b><span style='display: inline-block'>Nova Inscri&ccedil;&atilde;o</span></b></p>
                            <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Nome:</span> </b>$nome_completo</p>
                            <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Matr&iacute;cula:</span> </b>$matricula</p>
                            <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Convidado 01:</span> </b>$convidado_01</p>
                            <p style='border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #ccc'><span style='width: 120px; display: inline-block'>Convidado 02:</span> </b>$convidado_02</p>
                            <br>
                            <p style='font-size: 14px; line-height: 1.4'><i>Essas informa&ccedil;&otilde;es tamb&eacute;m est&atilde;o dispon&iacute;veis no <b><a href='$url/wp-admin/edit.php?post_type=inscricoes'>Painel Administrativo</a></b> do site.</i></p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        ";


        $msgParaUsuario  = "
        <!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
        <div style='width: 100%; padding: 50px 0'>
            <table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 5px solid #001d46; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
                <tr style='background: #001d46; margin: 0; padding: 0'>
                    <td  style='font-family:Arial, sans; height: 60px; text-align: center;'>
                        <img src='$tUrl/img/2017/encontro-da-vinci-2017-logo-mail.png' style='margin: 20px 0 -60px'>
                    </td>
                </tr>
                <tr>
                    <td  style='font-family:Arial, sans; padding: 45px 15px 15px'>
                        <div style='width: 90%; padding: 1% 5%; margin-top: 30px'>
                            <p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><span style='color: #0a6b98; font-size: 34px;'>$nick! Você &eacute; <i>show</i>!</span><br/><br/>
                                Parab&eacute;ns! Você acaba de garantir sua entrada em mais um grande <strong>Encontro</strong>. 
                                <br>
                                <br>
                                <span style='background: #f5f5f5; padding: 20px 10px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; display: block;'>
                                    <span style='text-transform: uppercase; font-size: 16px'>Nome: </span><span style='color: #0a6b98; text-transform: uppercase'><strong>$nome</strong></span><br>
                                    <br><span style='text-transform: uppercase; font-size: 16px'>Matr&iacute;cula/CPF: </span><span style='color: #0a6b98; text-transform: uppercase'><strong>$matricula</strong></span><br>
                                </span>
                                <br>
                                <br>
                                Um grande abra&ccedil;o!<br>
                            </p>
                            <p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>  
        ";

        $headerParaUsuario = "MIME-Version: 1.1\r\n";
        $headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headerParaUsuario .= "From: $emailEmpresa\r\n"; // remetente
        $headerParaUsuario .= "Return-Path: $emailEmpresa\r\n"; // return-path
        
        $headerParaEmpresa = "MIME-Version: 1.0\r\n";
        $headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headerParaEmpresa .= "From: $email\n";
        $headerParaEmpresa .= "Return-Path: $emailEmpresa\r\n"; // return-path

        $assuntoEmpresa = "Nova inscri&ccedil;&atilde;";

        mail($emailEmpresa,utf8_decode($assuntoEmpresa),utf8_decode($msgParaAdmin),$headerParaEmpresa) or die("Email não enviado para a empresa");
        mail($email,utf8_decode("Encontro da Vinci - Ingresso"),utf8_decode($msgParaUsuario),$headerParaUsuario) or die("Email não enviado para o cliente");

        echo "sucesso";

    }
    else
    {
        die('Método não reconhecido');
    }