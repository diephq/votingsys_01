<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use App\RepositoriesApi\Contracts\LinkRepositoryInterface;

class LinkController extends ApiController
{
    protected $linkRepository;

    public function __construct(LinkRepositoryInterface $linkRepository)
    {
        $this->linkRepository = $linkRepository;
    }

    public function show($token)
    {
        if ($link = $this->linkRepository->findBy('token', $token)->first()) {
            $poll = $link->poll->withoutAppends();

            if (!$poll->status) {
                return $this->falseJson(API_RESPONSE_CODE_UNPROCESSABLE, trans('polls.message_poll_closed'));
            }

            $poll->load('user', 'settings', 'options', 'comments', 'links');

            $data = [
                'poll' => $poll,
                'countParticipant' => $poll->countParticipants(),
                'countComments' => $poll->comments()->count(),
                'result_voted' => $poll->countVotesWithOption(),
            ];

            return $this->trueJson($data);
        }

        return $this->falseJson(API_RESPONSE_CODE_UNPROCESSABLE, trans('polls.message.not_found_polls'));
    }
}
