<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '/home/bitcodeweb/public_html/brieflogo/phpmailer/PHPMailerAutoload.php';

if (isset($_POST['p0'])) {
    if (empty($_POST['p0'])) {
        $data = array('success' => false, 'message' => 'Por favor, llene el formulario.');
        echo json_encode($data);
        exit;
    }
    
    $p0='';
    $p1='';
    $p2='';
    $p3='';
    $p4='';
    $p5='';
    $p6='';
    $p7='';
    $p8='';
    $p91='50% Femenino, 50% Masculino';
    $p92='50% Moderno, 50% Tradicional';
    $p93='50% Personal, 50% Profesional';
    $p94='50% Amigable, 50% Serio';
    $p95='50% Inclusiva, 50% Exclusiva';
    $p10='';
    $p11='';
    $p12='';
    $p13='';

                                              
                                              
                                              
                                              

    if (isset($_POST['p0'])) {
        if (!empty($_POST['p0'])) {
            $p0=$_POST['p0'];
        }
    }
    if (isset($_POST['p1'])) {
        if (!empty($_POST['p1'])) {
            $p1=$_POST['p1'];
        }
    }
    if (isset($_POST['p2'])) {
        if (!empty($_POST['p2'])) {
            $p2=$_POST['p2'];
        }
    }
    if (isset($_POST['p3'])) {
        if (!empty($_POST['p3'])) {
            $p3=$_POST['p3'];
        }
    }
    if (isset($_POST['p4'])) {
        if (!empty($_POST['p4'])) {
            $p4=$_POST['p4'];
        }
    }
    if (isset($_POST['p5'])) {
        if (!empty($_POST['p5'])) {
            $p5=$_POST['p5'];
        }
    }
    if (isset($_POST['p6'])) {
        if (!empty($_POST['p6'])) {
            foreach ($_POST['p6'] as $opcion){
                $p6=$opcion . '
                ' . $p6;
            }
        }
    }
    if (isset($_POST['p7'])) {
        if (!empty($_POST['p7'])) {
            $p7=$_POST['p7'];
        }
    }
    if (isset($_POST['p8'])) {
        if (!empty($_POST['p8'])) {
            $p8=$_POST['p8'];
        }
    }
    if (isset($_POST['p91'])) {
        if (!empty($_POST['p91'])) {
            $result=100-$_POST['p91'];
            $p91=$_POST['p91'].'% Femenino, '.$result.'% Masculino';
        }
    }
    if (isset($_POST['p92'])) {
        if (!empty($_POST['p92'])) {
            $result=100-$_POST['p92'];
            $p92=$_POST['p92'].'% Moderno, '.$result.'% Tradicional';
        }
    }
    if (isset($_POST['p93'])) {
        if (!empty($_POST['p93'])) {
            $result=100-$_POST['p93'];
            $p93=$_POST['p93'].'% Personal, '.$result.'% Profesional';
        }
    }
    if (isset($_POST['p94'])) {
        if (!empty($_POST['p94'])) {
            $result=100-$_POST['p94'];
            $p94=$_POST['p94'].'% Amigable, '.$result.'% Serio';
        }
    }
    if (isset($_POST['p95'])) {
        if (!empty($_POST['p95'])) {
            $result=100-$_POST['p95'];
            $p95=$_POST['p95'].'% Inclusiva, '.$result.'% Exclusiva';
        }
    }
    if (isset($_POST['p10'])) {
        if (!empty($_POST['p10'])) {
            $p10=$_POST['p10'];
        }
    }
    if (isset($_POST['p11'])) {
        if (!empty($_POST['p11'])) {
            $p11=$_POST['p11'];
        }
    } 

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';                      
    $mail->From = 'bitcodemail@gmail.com';
    $mail->FromName = 'Brief para Página web';
    $mail->AddAddress('bitcodemail@gmail.com');
    $mail->Subject = 'Respuesta de Brief de diseño web';

    $mail->Body = 'Nombre 
        ' .$p0 . "\r\n\r\n" .'
    ¿Cuáles son tus productos y servicios?
        ' .$p1 . "\r\n\r\n" .'
    ¿En qué año se fundó la empresa?
        ' .$p2 . "\r\n\r\n" .'
    ¿Qué valores destacaría de su empresa?
        ' . $p3. "\r\n\r\n" .'
    ¿Quién es su público objetivo?
        ' .$p4. "\r\n\r\n" .'
    ¿Cuáles son sus principales competidores en línea?
        ' .$p5 . "\r\n\r\n" .'
    ¿Cual sería el principal motivo por la cual visitarian su página?
        ' .$p6 . "\r\n\r\n" .'
    Describa su página ideal
        ' .$p7 . "\r\n\r\n" .'
    ¿Cuantas secciones debe de tener y cuales?
        ' .$p8 . "\r\n\r\n" .'
    ¿Qué valores quiere comunicar con el diseño de su página?
        ' .$p91 . "\r\n\r\n" .'
        ' .$p92 . "\r\n\r\n" .'
        ' .$p93 . "\r\n\r\n" .'
        ' .$p94 . "\r\n\r\n" .'
        ' .$p95 . "\r\n\r\n" .'
        
    ¿Qué páginas de referencia le gusta? ¿Qué le gusta de esas páginas? 
        ' .$p10 . "\r\n\r\n" .'
    Otros datos que puedan ser importantes para el proceso de diseño.
        ' . $p11 ;

    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'No se pudo enviar. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => '¡Cuestionario enviado!');
    echo json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Por favor, termine de llenar el formulario.');
    echo json_encode($data);
}
?>