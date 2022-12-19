<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Communicate\BulkDestroyCommunicate;
use App\Http\Requests\Admin\Communicate\DestroyCommunicate;
use App\Http\Requests\Admin\Communicate\IndexCommunicate;
use App\Http\Requests\Admin\Communicate\StoreCommunicate;
use App\Http\Requests\Admin\Communicate\UpdateCommunicate;
use App\Models\Communicate;
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

class CommunicateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCommunicate $request
     * @return array|Factory|View
     */
    public function index(IndexCommunicate $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Communicate::class)->processRequestAndGet(
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

        return view('admin.communicate.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.communicate.create');

        return view('admin.communicate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCommunicate $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCommunicate $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Communicate
        $communicate = Communicate::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/communicates'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/communicates');
    }

    /**
     * Display the specified resource.
     *
     * @param Communicate $communicate
     * @throws AuthorizationException
     * @return void
     */
    public function show(Communicate $communicate)
    {
        $this->authorize('admin.communicate.show', $communicate);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Communicate $communicate
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Communicate $communicate)
    {
        $this->authorize('admin.communicate.edit', $communicate);


        return view('admin.communicate.edit', [
            'communicate' => $communicate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCommunicate $request
     * @param Communicate $communicate
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCommunicate $request, Communicate $communicate)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Communicate
        $communicate->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/communicates'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/communicates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCommunicate $request
     * @param Communicate $communicate
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCommunicate $request, Communicate $communicate)
    {
        $communicate->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCommunicate $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCommunicate $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Communicate::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
