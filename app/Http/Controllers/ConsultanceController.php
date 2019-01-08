<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConsultanceRequest;
use App\Http\Requests\UpdateConsultanceRequest;
use App\Repositories\ConsultanceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ConsultanceController extends AppBaseController
{
    /** @var  ConsultanceRepository */
    private $consultanceRepository;

    public function __construct(ConsultanceRepository $consultanceRepo)
    {
        $this->consultanceRepository = $consultanceRepo;
    }

    public function index(Request $request)
    {
        $this->consultanceRepository->pushCriteria(new RequestCriteria($request));
        $consultances = $this->consultanceRepository->all()->sortByDesc('id');

        return view('consultances.index')
            ->with('consultances', $consultances);
    }


    public function store(CreateConsultanceRequest $request)
    {
        $input = $request->all();
        $input = array_add($input, 'status', 'new');
        $consultance = $this->consultanceRepository->create($input);

        Flash::success('Consultance saved successfully.');

        return redirect('/');
    }

    public function show($id)
    {
        $consultance = $this->consultanceRepository->findWithoutFail($id);

        if (empty($consultance)) {
            Flash::error('Consultance not found');

            return redirect(route('consultancesIndex'));
        }

        return view('consultances.show')->with('consultance', $consultance);
    }

}
