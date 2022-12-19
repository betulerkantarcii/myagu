<?php

namespace App\Http\Controllers;


use App\Models\AcademicsAdministration;
use App\Models\Announcement;
use App\Models\CafeteriaMenu;
use App\Models\Calendar;
use App\Models\Communicate;
use App\Models\ManageCourse;
use App\Models\Poll;
use App\Models\Solve;
use Carbon\Carbon; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->user = auth('admin')->user();

            return $next($request);
        });
    }

    public function index()
    {

        $dataAnnouncements = $this->getAnnouncements();
        $dataCalendar = $this->getCalendar();
        $dataPoll = $this->getPoll();
        $dataAandA = $this->getAcademicsAdministration();
        $dataCommunicate = $this->getCommunicate();
        $dataCourses = $this->getManageCourse();
        $dataSolve = $this->getSolve();

        $dataCafeteria = $this->getCafeteria();
        $file = $dataCafeteria->getMedia('file');
        $file_url = isset($file[0]) ? $file[0]->getUrl() : null;



        return view('index', [
            'dataAnnouncements' => $dataAnnouncements,
            'dataCalendar' => $dataCalendar,
            'dataPoll' => $dataPoll,
            'dataAandA' => $dataAandA,
            'dataCommunicate' => $dataCommunicate,
            'dataCourses' => $dataCourses,
            'dataSolve' => $dataSolve,
            'file_url' => $file_url

        ]);

    }

    function getId($text)
    {
        $texts = explode('-', $text);

        return $texts[sizeof($texts) - 1];
    }



    function getAnnouncements()
    {
        $query = Announcement::where('enabled', true);

        if (!$this->isAdmin()) {
            $query->where('published_at', '<=', Carbon::now());
        }

        $query->orderBy('id', 'DESC');

        return $query->get();



    }


    function getCalendar()
    {
        $query = Calendar::where('enabled', true);

        if (!$this->isAdmin()) {
            $query->where('published_at', '<=', Carbon::now());
        }

        $query->orderBy('id', 'DESC');

        return $query->get();



    }

    function getPoll()
    {
        $query = Poll::where('enabled', true);

        if (!$this->isAdmin()) {
            $query->where('published_at', '<=', Carbon::now());
        }

        $query->orderBy('id', 'DESC');

        return $query->get();



    }


    function getAcademicsAdministration()
    {
        $query = AcademicsAdministration::where('enabled', true);

        $query->orderBy('id', 'ASC');

        return $query->get();



    }

    function getCommunicate()
    {
        $query = Communicate::where('enabled', true);

        $query->orderBy('id', 'ASC');

        return $query->get();



    }

    function getManageCourse()
    {
        $query = ManageCourse::where('enabled', true);

        $query->orderBy('id', 'ASC');

        return $query->get();



    }

    function getSolve()
    {
        $query = Solve::where('enabled', true);

        $query->orderBy('id', 'ASC');

        return $query->get();



    }

    


    function getCafeteria()
    {
        $query = CafeteriaMenu::where('enabled', true);

        if (!$this->isAdmin()) {
            $query->where('published_at', '<=', Carbon::now());
        }

        $query->orderBy('id', 'DESC');

        return $query->first();

    }


    function isAdmin(): bool
    {
        $admin = isset($this->user) ? $this->user->roles()->where('name', 'Administrator')->first() : null;

        return $admin != null;
    }



}


