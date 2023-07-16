<?php

declare(strict_types=1);

namespace Tempest\Database\Migrations;

use Tempest\Interfaces\Model;
use Tempest\ORM\BaseModel;

final class Migration implements Model
{
    use BaseModel;

    public string $name;
}