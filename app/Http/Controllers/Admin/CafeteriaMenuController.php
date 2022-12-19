<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CafeteriaMenu\BulkDestroyCafeteriaMenu;
use App\Http\Requests\Admin\CafeteriaMenu\DestroyCafeteriaMenu;
use App\Http\Requests\Admin\CafeteriaMenu\IndexCafeteriaMenu;
use App\Http\Requests\Admin\CafeteriaMenu\StoreCafeteriaMenu;
use App\Http\Requests\Admin\CafeteriaMenu\UpdateCafeteriaMenu;
use App\Models\CafeteriaMenu;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CafeteriaMenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCafeteriaMenu $request
     * @return array|Factory|View
     */
    public function index(IndexCafeteriaMenu $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(CafeteriaMenu::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'title']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.cafeteria-menu.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.cafeteria-menu.create');

        return view('admin.cafeteria-menu.create',[
            'mode' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCafeteriaMenu $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCafeteriaMenu $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the CafeteriaMenu
        $cafeteriaMenu = CafeteriaMenu::create($request->validated());

        if ($request->ajax()) {
            return ['redirect' => url('admin/cafeteria-menus'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/cafeteria-menus');
    }

    /**
     * Display the specified resource.
     *
     * @param CafeteriaMenu $cafeteriaMenu
     * @throws AuthorizationException
     * @return void
     */
    public function show(CafeteriaMenu $cafeteriaMenu)
    {
        $this->authorize('admin.cafeteria-menu.show', $cafeteriaMenu);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CafeteriaMenu $cafeteriaMenu
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(CafeteriaMenu $cafeteriaMenu)
    {
        $this->authorize('admin.cafeteria-menu.edit', $cafeteriaMenu);


        return view('admin.cafeteria-menu.edit', [
            'cafeteriaMenu' => $cafeteriaMenu,
            'mode' => 'edit',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCafeteriaMenu $request
     * @param CafeteriaMenu $cafeteriaMenu
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCafeteriaMenu $request, CafeteriaMenu $cafeteriaMenu)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values CafeteriaMenu
        $cafeteriaMenu->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/cafeteria-menus'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $cafeteriaMenu
            ];
        }

        return redirect('admin/cafeteria-menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCafeteriaMenu $request
     * @param CafeteriaMenu $cafeteriaMenu
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCafeteriaMenu $request, CafeteriaMenu $cafeteriaMenu)
    {
        $cafeteriaMenu->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCafeteriaMenu $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCafeteriaMenu $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    CafeteriaMenu::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
