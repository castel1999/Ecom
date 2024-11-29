<?php

namespace Modules\Permission\Http\Requests\Api;

use Modules\Core\Http\Requests\CoreRequest;

class Update extends CoreRequest
{
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255|unique:permissions',
            'guard_name' => 'nullable|string|max:255|in:web,api|default:web',
        ];
    }
}