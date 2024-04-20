<?php

$data = json_decode(file_get_contents(__DIR__ . '/projects.json'), true);

usort($data, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

function component_projects($data)
{
    $html = "";

    foreach ($data as $project) {
        $html .= <<<HTML

        <div class="col-md-4">
            <div class="card-portfolio border-r p-3 m-2">
                <div class="cont-img border-r position-relative overflow-hidden d-inline-block">
                    <img class="img-project" src="{$project['images']}">
                    <div class="overlay overlay-project position-absolute">
                        <a class="button-overlay fa-solid fa-eye icon-medium color-purple scale-1 transition-300" href="{$project['link']}"></a>
                    </div>
                </div>
                <div>
                    <p class="font-title-card color-change-import my-2 text-center font-semibold font-shadow-small"> {$project['project']} </p>
                    <div class="desc-project">
                        <p class="font-card color-change-normal m-0">
                            {$project['description']}
                        </p>
                    </div>
                </div>
            </div>
        </div>    
        HTML;
    }

    return $html;
}

function last_project()
{
    global $data;

    return component_projects(array_slice($data, 0, 3));
}

function all_project()
{
    global $data;

    return component_projects($data);
}
