<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Repositories\MessageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MessageController extends AppBaseController
{
    /** @var  MessageRepository */
    private $messageRepository;

    public function __construct(MessageRepository $messageRepo)
    {
        $this->messageRepository = $messageRepo;
    }


    public function index(Request $request)
    {
        $this->messageRepository->pushCriteria(new RequestCriteria($request));
        $messages = $this->messageRepository->all()->sortByDesc('id');

        return view('messages.index')
            ->with('messages', $messages);
    }


    public function store(CreateMessageRequest $request)
    {
        $input = $request->all();
        $input = array_add($input, 'status', 'new');
        $message = $this->messageRepository->create($input);

        Flash::success('Message saved successfully.');

        return redirect('/');
    }

    public function show($id)
    {
        $message = $this->messageRepository->findWithoutFail($id);

        if (empty($message)) {
            Flash::error('Message not found');

            return redirect(route('messagesIndex'));
        }

        return view('messages.show')->with('message', $message);
    }

}
