<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTextblockRequest;
use App\Http\Requests\UpdateTextblockRequest;
use App\Repositories\TextblockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TextblockController extends AppBaseController
{
    /** @var  TextblockRepository */
    private $textblockRepository;

    public function __construct(TextblockRepository $textblockRepo)
    {
        $this->textblockRepository = $textblockRepo;
    }

    /**
     * Display a listing of the Textblock.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->textblockRepository->pushCriteria(new RequestCriteria($request));
        $textblocks = $this->textblockRepository->all();

        return view('textblocks.index')
            ->with('textblocks', $textblocks);
    }

    /**
     * Show the form for creating a new Textblock.
     *
     * @return Response
     */
    public function create()
    {
        return view('textblocks.create');
    }

    /**
     * Store a newly created Textblock in storage.
     *
     * @param CreateTextblockRequest $request
     *
     * @return Response
     */
    public function store(CreateTextblockRequest $request)
    {
        $input = $request->all();

        $textblock = $this->textblockRepository->create($input);

        Flash::success('Textblock saved successfully.');

        return redirect(route('textblocks.index'));
    }

    /**
     * Display the specified Textblock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            Flash::error('Textblock not found');

            return redirect(route('textblocks.index'));
        }

        return view('textblocks.show')->with('textblock', $textblock);
    }

    /**
     * Show the form for editing the specified Textblock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            Flash::error('Textblock not found');

            return redirect(route('textblocks.index'));
        }

        return view('textblocks.edit')->with('textblock', $textblock);
    }

    /**
     * Update the specified Textblock in storage.
     *
     * @param  int              $id
     * @param UpdateTextblockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTextblockRequest $request)
    {
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            Flash::error('Textblock not found');

            return redirect(route('textblocks.index'));
        }

        $textblock = $this->textblockRepository->update($request->all(), $id);

        Flash::success('Textblock updated successfully.');

        return redirect(route('textblocks.index'));
    }

    /**
     * Remove the specified Textblock from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $textblock = $this->textblockRepository->findWithoutFail($id);

        if (empty($textblock)) {
            Flash::error('Textblock not found');

            return redirect(route('textblocks.index'));
        }

        $this->textblockRepository->delete($id);

        Flash::success('Textblock deleted successfully.');

        return redirect(route('textblocks.index'));
    }
}
