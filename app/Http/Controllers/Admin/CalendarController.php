<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Calendar\BulkDestroyCalendar;
use App\Http\Requests\Admin\Calendar\DestroyCalendar;
use App\Http\Requests\Admin\Calendar\IndexCalendar;
use App\Http\Requests\Admin\Calendar\StoreCalendar;
use App\Http\Requests\Admin\Calendar\UpdateCalendar;
use App\Models\Calendar;
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

class CalendarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCalendar $request
     * @return array|Factory|View
     */
    public function index(IndexCalendar $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Calendar::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'description', 'event_time', 'event_location', 'link', 'published_at', 'enabled'],

            // set columns to searchIn
            ['id', 'title', 'description', 'event_location', 'link']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.calendar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.calendar.create');

        return view('admin.calendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCalendar $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreCalendar $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Calendar
        $calendar = Calendar::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/calendars'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/calendars');
    }

    /**
     * Display the specified resource.
     *
     * @param Calendar $calendar
     * @throws AuthorizationException
     * @return void
     */
    public function show(Calendar $calendar)
    {
        $this->authorize('admin.calendar.show', $calendar);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Calendar $calendar
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Calendar $calendar)
    {
        $this->authorize('admin.calendar.edit', $calendar);


        return view('admin.calendar.edit', [
            'calendar' => $calendar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCalendar $request
     * @param Calendar $calendar
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateCalendar $request, Calendar $calendar)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Calendar
        $calendar->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/calendars'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
                'object' => $calendar
            ];
        }

        return redirect('admin/calendars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCalendar $request
     * @param Calendar $calendar
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyCalendar $request, Calendar $calendar)
    {
        $calendar->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyCalendar $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyCalendar $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Calendar::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
