<?php

namespace App\Http\Controllers;

use App\Http\UtilsHelper;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentController extends Controller
{

    /**
     * Shows the Parent Dashboard
     *
     */

    public function index (): Factory|View|Application
    {
        return view('Dashboards.parent-dashboard', self::getPageLevelData() );
    }

    /**
     * Get Page Level Data
     *
     * @return array
     */
    private static function getPageLevelData(): array
    {
        $user = Auth::user();
        $students = $user->getRoleNames()->contains('parent') ? $user->students()->get() : [];
        $menu = [
            'dashboards' => [],
        ];

        foreach ($students as $student){
            $menu['dashboards'][] = [
                'name' => $student->name,
                'link' => RouteServiceProvider::STUDENT,
                'active' => false,
                'icon' => 'fa fa-dashboard',
                'class' => '',
                'id' => 'dashboard'
            ];
        }

        return [
            'title' => 'Parents Dashboard | Treble Clef Academy',
            // 'resources' => UtilsHelper::handlePageLevelResources($resources),
            'meta' => [
                'description' => 'Treble Clef Academy Parents dashboard application.',
                'keywords' => 'Dashboard',
                'canonical_url' => url()->current(),
                'robots' => 'noindex, nofollow'
            ],
            'menu' => $menu,
            'navbar' => [
                'shortcuts' => [
                    'school_calendar' => [
                        'name' => 'School Calendar',
                        'link' => route('school-calendar'),
                        'active' => false,
                        'icon' => 'ti ti-calendar fs-4',
                        'description' => 'View the School Calendar'
                    ],
                    'user_manager' => [
                        'name' => 'Student Manager',
                        'link' => route('student-manager'),
                        'active' => false,
                        'icon' => 'ti ti-user fs-4',
                        'description' => 'Manage the students registered on your account'
                    ],
                    'invoice_manager' => [
                        'name' => 'Invoice Manager',
                        'link' => route('parent-invoice-manager'),
                        'active' => false,
                        'icon' => 'fa fa-file-invoice fs-4',
                        'description' => 'View and manage your invoices'
                    ],
                    'account_settings' => [
                        'name' => 'Account Settings',
                        'link' => route('account-settings'),
                        'active' => false,
                        'icon' => 'ti ti-settings fs-4',
                        'description' => 'Manage your account settings'
                    ],
                    'logout' => [
                        'name' => 'Logout',
                        'link' => route('logout'),
                        'active' => false,
                        'icon' => 'fa fa-sign-out-alt fs-4',
                        'description' => 'Logout from your account'
                    ],
                    'help' => [
                        'name' => 'Help',
                        'link' => route('help'),
                        'active' => false,
                        'icon' => 'ti ti-help fs-4',
                        'description' => 'Help'
                        ,
                        'support' => [
                            'name' => 'Support',
                            'link' => route('support'),
                            'active' => false,
                            'icon' => 'ti ti-support fs-4',
                            'description' => 'Support'
                        ],
                    ]
                ],
            ],
            'breadcrumbs' => [
                [
                    'name' => 'Dashboard',
                    'url' => '',
                    'active' => true,
                    'icon' => 'fa fa-dashboard',
                    'class' => 'active',
                    'id' => 'dashboard'
                ]
            ],
        ];
    }
}

