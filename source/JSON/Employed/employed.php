<?php
$html = '';

$data = json_decode(file_get_contents(__DIR__ . '/employed.json'), true);

if ($data !== null) {

    foreach ($data as $employed) {
        $html .= <<<HTML
        <div class="swiper-slide swiper-work">
            <div class="card border-0 m-1">
                <div class="card-img-top justify-content-center d-flex text-center pt-2">
                    <img loading="lazy" src="{$employed['image']}" class="rounded-circle img-face" alt="Empleado Geekson {$employed['name']}">
                </div>
                <div class="card-body text-center pb-2">
                    <p class="font-title-card color-change-import font-bold my-1">{$employed['name']}</p>
                    <p class="font-card color-change-normal font-shadow-small my-1">{$employed['work-position']}</p>
                </div>
            </div>
        </div>        
        HTML;
    }
} else {
    $html = "Error al obtener los empleados";
}

echo $html;
