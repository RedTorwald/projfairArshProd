<?php

namespace App\Http\Requests\Type;

use App\Http\Requests\BaseRequest;

class UpdateRequestAdminType extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'string',
        ];
    }
}
