<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Repositories\ReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReviewController extends AppBaseController
{
    /** @var  ReviewRepository */
    private $reviewRepository;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepository = $reviewRepo;
    }

    public function index(Request $request)
    {
        $this->reviewRepository->pushCriteria(new RequestCriteria($request));
        $reviews = $this->reviewRepository->all()->sortByDesc('id');

        return view('reviews.index')
            ->with('reviews', $reviews);
    }


    public function store(CreateReviewRequest $request)
    {

        $input = $request->all();
        $review = $this->reviewRepository->create($input);

        Flash::success('Review saved successfully.');
        return redirect('/');
    
    }


    public function show($id)
    {
        $review = $this->reviewRepository->findWithoutFail($id);

        if (empty($review)) {
            Flash::error('Review not found');

            return redirect(route('reviewsIndex'));
        }

        return view('reviews.show')->with('review', $review);
    }

    
}
