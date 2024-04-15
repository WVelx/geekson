<?php
$html = '';

$data = json_decode(file_get_contents(__DIR__.'/services.json'), true);

if ($data !== null) {

    foreach ($data as $services) {
        $html .= <<<HTML
        <div class="card-service border-r col-md-5 d-flex">
        <div class="body-service row">
            <div class="col-3 card-img-service d-flex justify-content-center align-items-center pe-3">
                <i class="{$services['classImage']} color-change-import icon-big"></i>
            </div>
            <div class="col ps-3">
                <h3 class="font-title-card color-change-import font-shadow-small text-center">{$services['title']}</h3>
                <div class="desc-service">
                    <p class="font-card color-change-normal m-0">{$services['description']}</p>
                </div>
            </div>
        </div>
    </div>
    HTML;
    }
} else {
    $html = "Error al obtener los servicios";
}

echo $html;
