<?php

namespace App\Modules\Confirmation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Confirmation\Data\ConfirmationAction;
use App\Modules\Confirmation\Data\ConfirmationMethod;
use App\Modules\Confirmation\Factories\ConfirmationServiceFactory;
use App\Modules\Confirmation\Http\Requests\CreatingConfirmationRequest;
use Illuminate\Http\JsonResponse;

class ConfirmationController extends Controller
{
    public function __construct(
        readonly private ConfirmationServiceFactory $confirmationServiceFactory,
    )
    {
    }

    public function store(CreatingConfirmationRequest $request): JsonResponse
    {
        $confirmationService = $this->confirmationServiceFactory->build(ConfirmationMethod::fromString($request->input('method')));

        $confirmationId = $confirmationService->createConfirmation(
            ConfirmationAction::fromString($request->input('action')),
            $this->getUser()->id,
        );

        $confirmationService->sendCode($confirmationId);

        return new JsonResponse(['$confirmation_id' => $confirmationId]);
    }
}
