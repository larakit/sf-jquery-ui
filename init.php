<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 23.05.16
 * Time: 10:02
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-jquery-ui')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-jquery')
    ->jsPackage('jquery-ui.js')
    ->cssPackage('jquery-ui.css')
    ->cssPackage('jquery-ui.structure.css')
    ->cssPackage('jquery-ui.theme.css')
;
