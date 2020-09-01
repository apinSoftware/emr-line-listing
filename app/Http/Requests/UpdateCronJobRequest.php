<?php

namespace App\Http\Requests;

use App\Article;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCronJobRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'appointmentID'        => [
                'required',
            ],
            'generateAppointmentUrl'        => [
                'required',
            ],
            'appointmentTime'        => [
                'required',
            ],
            'smsID'        => [
                'required',
            ],
            'smsTime'        => [
                'required',
            ],
        ];
    }
}
