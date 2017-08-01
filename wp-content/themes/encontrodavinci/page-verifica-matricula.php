<?php 

    if( 'POST' == $_SERVER['REQUEST_METHOD'] && $_POST['mtcpf'] != "") 
    {

        // Do some minor form validation to make sure there is content

        // Add the content of the form to $post as an array

        echo "sucesso";

    }
    else
    {
        die('Método não reconhecido');
    }