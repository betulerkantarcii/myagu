<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Announcement\BulkDestroyAnnouncement;
use App\Http\Requests\Admin\Announcement\DestroyAnnouncement;
use App\Http\Requests\Admin\Announcement\IndexAnnouncement;
use App\Http\Requests\Admin\Announcement\StoreAnnouncement;
use App\Http\Requests\Admin\Announcement\UpdateAnnouncement;
use App\Models\Announcement;
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

class AnnouncementsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexAnnouncement $request
     * @return array|Factory|View
     */
    public function index(IndexAnnouncement $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Announcement::class)->processRequestAndGet(
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

        return view('admin.announcement.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.announcement.create');

        return view('admin.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAnnouncement $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreAnnouncement $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Announcement
        $announcement = Announcement::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/announcements'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param Announcement $announcement
     * @throws AuthorizationException
     * @return void
     */
    public function show(Announcement $announcement)
    {
        $this->authorize('admin.announcement.show', $announcement);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Announcement $announcement
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Announcement $announcement)
    {
        $this->authorize('admin.announcement.edit', $announcement);


        return view('admin.announcement.edit', [
            'announcement' => $announcement,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAnnouncement $request
     * @param Announcement $announcement
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateAnnouncement $request, Announcement $announcement)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Announcement
        $announcement->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/announcements'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $announcement
            ];
        }

        return redirect('admin/announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyAnnouncement $request
     * @param Announcement $announcement
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyAnnouncement $request, Announcement $announcement)
    {
        $announcement->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyAnnouncement $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyAnnouncement $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Announcement::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
