<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AcademicsAdministration\BulkDestroyAcademicsAdministration;
use App\Http\Requests\Admin\AcademicsAdministration\DestroyAcademicsAdministration;
use App\Http\Requests\Admin\AcademicsAdministration\IndexAcademicsAdministration;
use App\Http\Requests\Admin\AcademicsAdministration\StoreAcademicsAdministration;
use App\Http\Requests\Admin\AcademicsAdministration\UpdateAcademicsAdministration;
use App\Models\AcademicsAdministration;
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

class AcademicsAdministrationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAcademicsAdministration $request
     * @return array|Factory|View
     */
    public function index(IndexAcademicsAdministration $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(AcademicsAdministration::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'link', 'enabled'],

            // set columns to searchIn
            ['id', 'title', 'link']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.academics-administration.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.academics-administration.create');

        return view('admin.academics-administration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAcademicsAdministration $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAcademicsAdministration $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the AcademicsAdministration
        $academicsAdministration = AcademicsAdministration::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/academics-administrations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/academics-administrations');
    }

    /**
     * Display the specified resource.
     *
     * @param AcademicsAdministration $academicsAdministration
     * @throws AuthorizationException
     * @return void
     */
    public function show(AcademicsAdministration $academicsAdministration)
    {
        $this->authorize('admin.academics-administration.show', $academicsAdministration);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AcademicsAdministration $academicsAdministration
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(AcademicsAdministration $academicsAdministration)
    {
        $this->authorize('admin.academics-administration.edit', $academicsAdministration);


        return view('admin.academics-administration.edit', [
            'academicsAdministration' => $academicsAdministration,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAcademicsAdministration $request
     * @param AcademicsAdministration $academicsAdministration
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAcademicsAdministration $request, AcademicsAdministration $academicsAdministration)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values AcademicsAdministration
        $academicsAdministration->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/academics-administrations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/academics-administrations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAcademicsAdministration $request
     * @param AcademicsAdministration $academicsAdministration
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyAcademicsAdministration $request, AcademicsAdministration $academicsAdministration)
    {
        $academicsAdministration->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAcademicsAdministration $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyAcademicsAdministration $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    AcademicsAdministration::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
