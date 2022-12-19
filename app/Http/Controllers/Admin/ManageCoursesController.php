<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ManageCourse\BulkDestroyManageCourse;
use App\Http\Requests\Admin\ManageCourse\DestroyManageCourse;
use App\Http\Requests\Admin\ManageCourse\IndexManageCourse;
use App\Http\Requests\Admin\ManageCourse\StoreManageCourse;
use App\Http\Requests\Admin\ManageCourse\UpdateManageCourse;
use App\Models\ManageCourse;
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

class ManageCoursesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexManageCourse $request
     * @return array|Factory|View
     */
    public function index(IndexManageCourse $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(ManageCourse::class)->processRequestAndGet(
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

        return view('admin.manage-course.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.manage-course.create');

        return view('admin.manage-course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreManageCourse $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreManageCourse $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the ManageCourse
        $manageCourse = ManageCourse::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/manage-courses'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/manage-courses');
    }

    /**
     * Display the specified resource.
     *
     * @param ManageCourse $manageCourse
     * @throws AuthorizationException
     * @return void
     */
    public function show(ManageCourse $manageCourse)
    {
        $this->authorize('admin.manage-course.show', $manageCourse);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ManageCourse $manageCourse
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(ManageCourse $manageCourse)
    {
        $this->authorize('admin.manage-course.edit', $manageCourse);


        return view('admin.manage-course.edit', [
            'manageCourse' => $manageCourse,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateManageCourse $request
     * @param ManageCourse $manageCourse
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateManageCourse $request, ManageCourse $manageCourse)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values ManageCourse
        $manageCourse->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/manage-courses'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/manage-courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyManageCourse $request
     * @param ManageCourse $manageCourse
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyManageCourse $request, ManageCourse $manageCourse)
    {
        $manageCourse->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyManageCourse $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyManageCourse $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    ManageCourse::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
