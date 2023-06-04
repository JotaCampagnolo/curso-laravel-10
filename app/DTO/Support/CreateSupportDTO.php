<?php

namespace App\DTO\Support;

use App\Http\Requests\StoreUpdateSupport;
use App\Enums\SupportStatus;

class CreateSupportDTO {
    public function __construct(
        public string $subject,
        public SupportStatus $status,
        public string $body
    ) {}

    public static function makeFromRequest(StoreUpdateSupport $request): self {
        return new self(
            $request->subject,
            SupportStatus::O,
            $request->body
        );
    }
}
