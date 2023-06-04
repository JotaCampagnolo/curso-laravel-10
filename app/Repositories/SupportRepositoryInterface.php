<?php

namespace App\Repositories;

use App\DTO\Support\CreateSupportDTO;
use App\DTO\Support\UpdateSupportDTO;
use stdClass;

interface SupportRepositoryInterface {
    public function getAll(string $filter = null): array;
    public function paginate(int $page = 1, int $pageSize = 15, string $filter = null): PaginationInterface;
    public function findOne(string $id): stdClass|null;
    public function delete(string $id): void;
    public function new(CreateSupportDTO $dto): stdClass;
    public function update(UpdateSupportDTO $dto): stdClass|null;
}
