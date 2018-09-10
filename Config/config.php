<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Digital Media Solutions, LLC
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'name'        => 'Dashboard Warm',
    'description' => 'Improves the performance of the dashboard by sharing/extending/warming caches.',
    'version'     => '1.0',
    'author'      => 'Mautic',

    'services' => [
        'models' => [
            'mautic.dashboardwarm.model.warm' => [
                'class'     => 'MauticPlugin\MauticDashboardWarmBundle\Model\WarmModel',
                'arguments' => [
                    'doctrine.orm.entity_manager',
                    'mautic.helper.integration',
                ],
            ],
        ],
        'events' => [
            'mautic.dashboardwarm.subscriber' => [
                'class'     => 'MauticPlugin\MauticDashboardWarmBundle\EventListener\DashboardSubscriber',
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'mautic.helper.paths',
                    'mautic.helper.integration',
                ],
            ],
        ],
    ],
];
