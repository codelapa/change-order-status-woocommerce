
<?php



// Função para alterar o nome do status do pedido
function alterar_nome_status_pedido($statuses) {
    // Verifica se o status "Processando" existe
    if (isset($statuses['wc-processing'])) {
        // Altera o nome do status para "Pagamento Recebido"
        $statuses['wc-processing'] = 'Pagamento Recebido';
    }
    return $statuses;
}
add_filter('wc_order_statuses', 'alterar_nome_status_pedido');


// Função para alterar o nome do status do pedido
function alterar_nome_status_pedido_enviado($statuses) {
    // Verifica se o status "Concluído" existe
    if (isset($statuses['wc-completed'])) {
        // Altera o nome do status para "Pedido Enviado"
        $statuses['wc-completed'] = 'Pedido Impresso';
    }
    return $statuses;
}
add_filter('wc_order_statuses', 'alterar_nome_status_pedido_enviado');


