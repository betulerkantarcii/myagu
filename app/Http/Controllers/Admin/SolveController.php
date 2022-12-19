<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Solve\BulkDestroySolve;
use App\Http\Requests\Admin\Solve\DestroySolve;
use App\Http\Requests\Admin\Solve\IndexSolve;
use App\Http\Requests\Admin\Solve\StoreSolve;
use App\Http\Requests\Admin\Solve\UpdateSolve;
use App\Models\Solve;
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

class SolveController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexSolve $request
     * @return array|Factory|View
     */
    public function index(IndexSolve $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Solve::class)->processRequestAndGet(
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

        return view('admin.solve.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.solve.create');

        return view('admin.solve.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSolve $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreSolve $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Solve
        $solve = Solve::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/solves'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/solves');
    }

    /**
     * Display the specified resource.
     *
     * @param Solve $solve
     * @throws AuthorizationException
     * @return void
     */
    public function show(Solve $solve)
    {
        $this->authorize('admin.solve.show', $solve);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Solve $solve
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Solve $solve)
    {
        $this->authorize('admin.solve.edit', $solve);


        return view('admin.solve.edit', [
            'solve' => $solve,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSolve $request
     * @param Solve $solve
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateSolve $request, Solve $solve)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Solve
        $solve->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/solves'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/solves');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroySolve $request
     * @param Solve $solve
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroySolve $request, Solve $solve)
    {
        $solve->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroySolve $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroySolve $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Solve::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
