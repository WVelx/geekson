<?php
$html = '';

$data = json_decode(file_get_contents(__DIR__ . '/clients.json'), true);

if ($data !== null) {

    foreach ($data as $clients) {
        $html .= <<<HTML
        <div class="swiper-slide">
            <div class="div-info-img position-relative overflow-hidden text-center">
                <img loading="lazy" class="img-fluid" src="{$clients['image']}" alt="Cliente {$clients['client']}">
                <div class="overlay overlay-clients position-absolute">
                    <a class="button-overlay fa-solid fa-eye icon-medium color-purple scale-1 transition-300" href="{$clients['link']}"></a>
                </div>
            </div>
        </div>
        HTML;
    }
} else {
    $html = "Error al obtener los clientes";
}

echo $html;
