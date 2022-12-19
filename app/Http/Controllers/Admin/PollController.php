<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Poll\BulkDestroyPoll;
use App\Http\Requests\Admin\Poll\DestroyPoll;
use App\Http\Requests\Admin\Poll\IndexPoll;
use App\Http\Requests\Admin\Poll\StorePoll;
use App\Http\Requests\Admin\Poll\UpdatePoll;
use App\Models\Poll;
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

class PollController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPoll $request
     * @return array|Factory|View
     */
    public function index(IndexPoll $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Poll::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'description', 'link', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'title', 'description', 'link']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.poll.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.poll.create');

        return view('admin.poll.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePoll $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StorePoll $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Poll
        $poll = Poll::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/polls'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/polls');
    }

    /**
     * Display the specified resource.
     *
     * @param Poll $poll
     * @throws AuthorizationException
     * @return void
     */
    public function show(Poll $poll)
    {
        $this->authorize('admin.poll.show', $poll);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Poll $poll
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Poll $poll)
    {
        $this->authorize('admin.poll.edit', $poll);


        return view('admin.poll.edit', [
            'poll' => $poll,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePoll $request
     * @param Poll $poll
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdatePoll $request, Poll $poll)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Poll
        $poll->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/polls'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $poll
            ];
        }

        return redirect('admin/polls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPoll $request
     * @param Poll $poll
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyPoll $request, Poll $poll)
    {
        $poll->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyPoll $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyPoll $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Poll::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
